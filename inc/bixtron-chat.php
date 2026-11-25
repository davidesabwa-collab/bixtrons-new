<?php
/**
 * Conversational enquiry: contact-page chat + floating widget.
 *
 *  - REST endpoint  POST /wp-json/bixtron/v1/enquiry   (validates, stores, emails the right office)
 *  - Custom post type "Enquiries" so every conversation is kept in wp-admin even if email fails
 *  - Lazy loading: the widget is a tiny button; the chat script/CSS load on first interaction
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/** Topic keys accepted by the endpoint (labels are shown in the chat, see bx_chat_config). */
function bx_chat_topics() {
    return array(
        'quote'  => 'Get a quote',
        'product' => 'Product enquiry',
        'advice' => 'Technical advice',
        'audit'  => 'Safety audit or training',
        'iso'    => 'ISO certification support',
        'other'  => 'Something else',
    );
}

/** Settings handed to the chat script. */
function bx_chat_config() {
    $offices = array();
    foreach ( bx_offices() as $o ) {
        $offices[] = array(
            'id'      => $o['slug'],
            'label'   => $o['country'] . ' (' . $o['city'] . ')',
            'city'    => $o['city'],
            'phone'   => $o['phone'],
            'phoneRaw' => $o['phone_raw'],
            'wa'      => $o['wa_raw'],
            'email'   => $o['email'],
        );
    }
    $cats = array();
    foreach ( bx_top_categories( 12 ) as $c ) {
        $cats[] = html_entity_decode( $c['name'], ENT_QUOTES, 'UTF-8' );
    }
    $product = null;
    if ( function_exists( 'is_product' ) && is_product() ) {
        $product = array(
            'name' => html_entity_decode( wp_strip_all_tags( get_the_title() ), ENT_QUOTES, 'UTF-8' ),
            'url'  => get_permalink(),
        );
    }
    return array(
        'rest'       => esc_url_raw( rest_url( 'bixtron/v1/enquiry' ) ),
        'topics'     => bx_chat_topics(),
        'offices'    => $offices,
        'categories' => array_slice( $cats, 0, 8 ),
        'product'    => $product,
        'shop'       => function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ),
        'legal'      => home_url( '/legal/' ),
        'css'        => pip_asset( 'css/bixtron-chat.css' ) . '?ver=' . BX_BUILD,
        'js'         => pip_asset( 'js/bixtron-chat.js' ) . '?ver=' . BX_BUILD,
    );
}

/* ------------------------------------------------------------------ stored enquiries */

add_action( 'init', function () {
    register_post_type( 'bx_enquiry', array(
        'labels'              => array( 'name' => 'Enquiries', 'singular_name' => 'Enquiry', 'menu_name' => 'Enquiries', 'all_items' => 'All enquiries' ),
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_rest'        => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-format-chat',
        'menu_position'       => 25,
        'supports'            => array( 'title', 'editor' ),
        'capability_type'     => 'post',
        'capabilities'        => array( 'create_posts' => 'do_not_allow' ),
        'map_meta_cap'        => true,
    ) );
} );

add_filter( 'manage_bx_enquiry_posts_columns', function ( $cols ) {
    return array(
        'cb'      => $cols['cb'],
        'title'   => 'Enquiry',
        'bx_off'  => 'Office',
        'bx_topic' => 'Topic',
        'bx_contact' => 'Contact',
        'bx_mail' => 'Email sent',
        'date'    => 'Date',
    );
} );
add_action( 'manage_bx_enquiry_posts_custom_column', function ( $col, $id ) {
    $map = array( 'bx_off' => 'office', 'bx_topic' => 'topic_label', 'bx_contact' => 'contact', 'bx_mail' => 'mail_sent' );
    if ( isset( $map[ $col ] ) ) {
        $v = get_post_meta( $id, $map[ $col ], true );
        echo esc_html( 'mail_sent' === $map[ $col ] ? ( $v ? 'Yes' : 'No' ) : $v );
    }
}, 10, 2 );

/* ------------------------------------------------------------------ REST endpoint */

add_action( 'rest_api_init', function () {
    register_rest_route( 'bixtron/v1', '/enquiry', array(
        'methods'             => 'POST',
        'callback'            => 'bx_chat_handle_enquiry',
        'permission_callback' => '__return_true',
    ) );
} );

function bx_chat_fail( $msg, $code = 400 ) {
    return new WP_REST_Response( array( 'ok' => false, 'message' => $msg ), $code );
}

function bx_chat_handle_enquiry( WP_REST_Request $req ) {
    $d = $req->get_json_params();
    if ( ! is_array( $d ) ) {
        return bx_chat_fail( 'Invalid request.' );
    }

    // Spam trap: bots fill the hidden field or answer faster than a person can type.
    $elapsed = (int) ( $d['t'] ?? 0 );
    if ( ! empty( $d['hp'] ) || $elapsed < 6000 ) {
        return new WP_REST_Response( array( 'ok' => true, 'ref' => 'BX-0000', 'office' => 'kenya', 'mail' => false ), 200 );
    }

    // Rate limit: 6 enquiries per hour per visitor.
    $ip   = md5( ( $_SERVER['HTTP_CF_CONNECTING_IP'] ?? '' ) . '|' . ( $_SERVER['REMOTE_ADDR'] ?? '' ) );
    $rkey = 'bx_rl_' . substr( $ip, 0, 20 );
    $n    = (int) get_transient( $rkey );
    if ( $n >= 6 ) {
        return bx_chat_fail( 'Too many messages from this device. Please call or WhatsApp us instead.', 429 );
    }
    set_transient( $rkey, $n + 1, HOUR_IN_SECONDS );

    $topics  = bx_chat_topics();
    $offices = array();
    foreach ( bx_offices() as $o ) {
        $offices[ $o['slug'] ] = $o;
    }

    $name    = sanitize_text_field( mb_substr( (string) ( $d['name'] ?? '' ), 0, 80 ) );
    $company = sanitize_text_field( mb_substr( (string) ( $d['company'] ?? '' ), 0, 120 ) );
    $topic   = sanitize_key( $d['topic'] ?? '' );
    $cat     = sanitize_text_field( mb_substr( (string) ( $d['category'] ?? '' ), 0, 80 ) );
    $details = sanitize_textarea_field( mb_substr( (string) ( $d['details'] ?? '' ), 0, 2000 ) );
    $office  = sanitize_key( $d['office'] ?? '' );
    $country = sanitize_text_field( mb_substr( (string) ( $d['country'] ?? '' ), 0, 60 ) );
    $method  = ( 'phone' === ( $d['method'] ?? '' ) ) ? 'phone' : 'email';
    $contact = trim( (string) ( $d['contact'] ?? '' ) );
    $page    = esc_url_raw( (string) ( $d['page'] ?? '' ) );
    $prod    = sanitize_text_field( mb_substr( (string) ( $d['product'] ?? '' ), 0, 160 ) );

    if ( mb_strlen( $name ) < 2 || ! isset( $topics[ $topic ] ) || mb_strlen( $details ) < 5 ) {
        return bx_chat_fail( 'Some answers are missing. Please start again.' );
    }
    if ( 'email' === $method ) {
        $contact = sanitize_email( $contact );
        if ( ! is_email( $contact ) ) {
            return bx_chat_fail( 'That email address does not look right.' );
        }
    } else {
        $contact = preg_replace( '/[^0-9+()\-\s]/', '', $contact );
        if ( strlen( preg_replace( '/\D/', '', $contact ) ) < 7 ) {
            return bx_chat_fail( 'That phone number does not look right.' );
        }
    }
    if ( 'other' !== $office && ! isset( $offices[ $office ] ) ) {
        $office = 'other';
    }

    // Recipients: chosen office, or both when the visitor is outside Kenya/Uganda.
    $to = ( 'other' === $office ) ? wp_list_pluck( $offices, 'email' ) : array( $offices[ $office ]['email'] );
    $to = array_values( array_unique( $to ) );
    $office_label = ( 'other' === $office ) ? 'Other country' . ( $country ? ' (' . $country . ')' : '' ) : $offices[ $office ]['country'] . ' (' . $offices[ $office ]['city'] . ')';

    $lines = array(
        'Name: ' . $name,
        'Company: ' . ( $company ? $company : '-' ),
        'Topic: ' . $topics[ $topic ],
        'Product area: ' . ( $cat ? $cat : '-' ),
        'Product page: ' . ( $prod ? $prod : '-' ),
        'Office: ' . $office_label,
        ( 'email' === $method ? 'Email: ' : 'Phone/WhatsApp: ' ) . $contact,
        '',
        'Message:',
        $details,
        '',
        'Sent from: ' . ( $page ? $page : home_url( '/' ) ),
    );
    $body = implode( "\n", $lines );

    $id = wp_insert_post( array(
        'post_type'    => 'bx_enquiry',
        'post_status'  => 'publish',
        'post_title'   => $name . ' - ' . $topics[ $topic ],
        'post_content' => $body,
    ), true );
    if ( is_wp_error( $id ) ) {
        return bx_chat_fail( 'Sorry, something went wrong. Please call or WhatsApp us.', 500 );
    }

    $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'From: Bixtron Website <noreply@bixtrons.com>' );
    if ( 'email' === $method ) {
        $headers[] = 'Reply-To: ' . $name . ' <' . $contact . '>';
    }
    update_post_meta( $id, 'office', $office_label );
    update_post_meta( $id, 'topic_label', $topics[ $topic ] );
    update_post_meta( $id, 'contact', $contact );
    update_post_meta( $id, 'ip_hash', substr( $ip, 0, 16 ) );
    update_post_meta( $id, 'mail_sent', 0 );

    // Reply to the visitor straight away; the email goes out after the response has been delivered,
    // so a slow mail server never makes the chat wait. The enquiry is already saved in wp-admin.
    $subject = '[Bixtron website] ' . $topics[ $topic ] . ' - ' . $name;
    register_shutdown_function( function () use ( $to, $subject, $body, $headers, $id ) {
        while ( ob_get_level() > 0 ) {
            @ob_end_flush();
        }
        @flush();
        if ( function_exists( 'fastcgi_finish_request' ) ) {
            @fastcgi_finish_request();
        }
        ignore_user_abort( true );
        $sent = wp_mail( $to, $subject, $body, $headers );
        update_post_meta( $id, 'mail_sent', $sent ? 1 : 0 );
    } );

    return new WP_REST_Response( array( 'ok' => true, 'ref' => 'BX-' . $id, 'office' => $office ), 200 );
}

/* ------------------------------------------------------------------ front end */

/** Contact page loads the chat immediately; elsewhere it loads on first interaction with the widget. */
function bx_is_contact_page() {
    return is_page( 'contact' );
}

add_action( 'wp_enqueue_scripts', function () {
    if ( ! bx_is_contact_page() ) {
        return;
    }
    wp_enqueue_style( 'bx-chat', pip_asset( 'css/bixtron-chat.css' ), array( 'bixtron-css' ), BX_BUILD );
    wp_enqueue_script( 'bx-chat', pip_asset( 'js/bixtron-chat.js' ), array(), BX_BUILD, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}, 30 );

add_action( 'wp_footer', function () {
    $cfg = bx_chat_config();
    $on_contact = bx_is_contact_page();
    ?>
<script id="bx-chat-config">window.bxChat=<?php echo wp_json_encode( $cfg ); ?>;</script>
<?php if ( ! $on_contact ) : ?>
<button type="button" class="bx-fab" id="bx-fab" aria-label="Chat with Bixtron" aria-haspopup="dialog" aria-expanded="false" aria-controls="bx-chat-panel">
    <svg class="bx-fab__icon bx-fab__icon--chat" viewBox="0 0 24 24" width="26" height="26" aria-hidden="true"><path fill="#fff" d="M12 3C6.5 3 2 6.9 2 11.7c0 2.4 1.1 4.6 3 6.2L4 21.5l4-1.7c1.2.4 2.6.6 4 .6 5.5 0 10-3.9 10-8.7S17.5 3 12 3zm-4 9.7a1.2 1.2 0 110-2.4 1.2 1.2 0 010 2.4zm4 0a1.2 1.2 0 110-2.4 1.2 1.2 0 010 2.4zm4 0a1.2 1.2 0 110-2.4 1.2 1.2 0 010 2.4z"/></svg>
    <svg class="bx-fab__icon bx-fab__icon--close" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><path fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>
    <span class="bx-fab__label" id="bx-fab-label">Chat with us</span>
</button>
<script>
(function(){var f=document.getElementById('bx-fab');if(!f)return;var loaded=false;
function load(open){if(window.bxChatReady){if(open)window.bxChatToggle();return;}
window.__bxOpenPending=window.__bxOpenPending||!!open;if(loaded)return;loaded=true;
var l=document.createElement('link');l.rel='stylesheet';l.href=window.bxChat.css;document.head.appendChild(l);
var s=document.createElement('script');s.src=window.bxChat.js;s.defer=true;document.head.appendChild(s);}
f.addEventListener('click',function(){load(true);});
['pointerenter','touchstart','focus'].forEach(function(e){f.addEventListener(e,function(){load(false);},{once:true,passive:true});});
var last=window.pageYOffset,tm,mq=window.matchMedia('(max-width:600px)');
window.addEventListener('scroll',function(){if(!mq.matches||document.documentElement.classList.contains('bx-chat-open'))return;var y=window.pageYOffset;
if(y>last+8&&y>200){f.classList.add('is-away');}else if(y<last-8){f.classList.remove('is-away');}last=y;clearTimeout(tm);tm=setTimeout(function(){f.classList.remove('is-away');},700);},{passive:true});
if('requestIdleCallback' in window){requestIdleCallback(function(){setTimeout(function(){load(false);},4000);},{timeout:8000});}
})();
</script>
<?php endif;
}, 5 );
