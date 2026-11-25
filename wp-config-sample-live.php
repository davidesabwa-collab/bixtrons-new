<?php
/**
 * WordPress Configuration for new.bixtrons.com
 * EliteHost Cloud (94.72.107.251)
 */

define( 'DB_NAME', 'bixtrons_new' );
define( 'DB_USER', 'bixtrons_new' );
define( 'DB_PASSWORD', 'ENTER_DATABASE_PASSWORD_HERE' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/** Authentication Unique Keys and Salts */
define( 'AUTH_KEY',         'bix_prod_k#98f&21*a@94!72$107%251^a' );
define( 'SECURE_AUTH_KEY',  'bix_prod_s#12d&45*b@94!72$107%251^b' );
define( 'LOGGED_IN_KEY',    'bix_prod_l#34e&67*c@94!72$107%251^c' );
define( 'NONCE_KEY',        'bix_prod_n#56f&89*d@94!72$107%251^d' );
define( 'AUTH_SALT',        'bix_prod_as#78g&01*e@94!72$107%251^e' );
define( 'SECURE_AUTH_SALT', 'bix_prod_ss#90h&23*f@94!72$107%251^f' );
define( 'LOGGED_IN_SALT',   'bix_prod_ls#12i&45*g@94!72$107%251^g' );
define( 'NONCE_SALT',       'bix_prod_ns#34j&67*h@94!72$107%251^h' );

/** Database Table Prefix */
$table_prefix = 'wpke_';

/** Site URLs */
define( 'WP_HOME', 'https://new.bixtrons.com' );
define( 'WP_SITEURL', 'https://new.bixtrons.com' );

/** Environment Settings */
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '1024M' );
define( 'FORCE_SSL_ADMIN', true );
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/** Absolute path to the WordPress directory */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files */
require_once ABSPATH . 'wp-settings.php';
