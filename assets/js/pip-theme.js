/**
 * PIP Global Replica Theme Interactive Initializer
 */
(function($) {
    'use strict';

    // 1. In-View Animation Elements
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = window_top_position + window_height;

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = element_top_position + element_height;

            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);

    $(document).ready(function() {
        check_if_in_view();

        // Ensure all animation elements reveal after DOM ready
        setTimeout(function() {
            $('.animation-element').addClass('in-view');
        }, 600);

        // 2. Scroll to Top
        $window.scroll(function() {
            if ($(this).scrollTop() > 150) {
                $('.scrollToTop').fadeIn(200);
            } else {
                $('.scrollToTop').fadeOut(200);
            }
        });

        $('.scrollToTop').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 500);
            return false;
        });

        // 3. Navigation Dropdowns & Menus
        var $dropdown = $('#locations-dropdown');
        var $regionsLink = $('.parent-link.show_gbl_loc');

        function openRegionsModal() {
            $dropdown.addClass('menu-open').css({'display': 'block', 'opacity': '1'});
        }

        function closeRegionsModal() {
            $dropdown.removeClass('menu-open').css({'display': 'none', 'opacity': '0'});
        }

        // Regions Modal Hover & Click Triggers
        $regionsLink.on('mouseenter click', function(e) {
            e.stopPropagation();
            openRegionsModal();
        });

        $dropdown.on('mouseenter', function() {
            openRegionsModal();
        });

        $regionsLink.on('mouseleave', function() {
            setTimeout(function() {
                if (!$dropdown.is(':hover')) {
                    closeRegionsModal();
                }
            }, 200);
        });

        $dropdown.on('mouseleave', function() {
            closeRegionsModal();
        });

        // Exit languages button
        $('.exitlanguages, #locations-dropdown .icon-close').on('click', function(e) {
            e.stopPropagation();
            closeRegionsModal();
        });

        // Other parent links dropdowns (Our Brands, Channels We Serve)
        $('.parent-link:not(.show_gbl_loc)').on('mouseenter', function() {
            // Touch screens fire mouseenter and then click for one tap: remember it so the click does not close the menu again.
            $(this).data('hoverAt', Date.now());
            $(this).children('ul').addClass('menu-open').css({'display': 'block', 'opacity': '1'});
        }).on('mouseleave', function() {
            $(this).children('ul').removeClass('menu-open').css({'display': 'none', 'opacity': '0'});
        });

        $('.parent-link:not(.show_gbl_loc) > span').on('click', function(e) {
            e.stopPropagation();
            var $ul = $(this).siblings('ul');
            var justHovered = (Date.now() - ($(this).parent().data('hoverAt') || 0)) < 700;
            $('.parent-link ul').not($ul).removeClass('menu-open').css({'display': 'none', 'opacity': '0'});
            if (justHovered) {
                $ul.addClass('menu-open');
            } else {
                $ul.toggleClass('menu-open');
            }
            if ($ul.hasClass('menu-open')) {
                $ul.css({'display': 'block', 'opacity': '1'});
            } else {
                $ul.css({'display': 'none', 'opacity': '0'});
            }
        });

        // Click outside closes all menus
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.parent-link, #locations-dropdown').length) {
                $('.parent-link ul').removeClass('menu-open').css({'display': 'none', 'opacity': '0'});
                closeRegionsModal();
            }
        });

        // Region Accordion
        $('.loc-collapsible').on('click', function(e) {
            e.preventDefault();
            $(this).next('.location-content').slideToggle(200);
            $(this).toggleClass('active');
        });

        // 4. Mobile Navigation Drawer Toggle
        $('.mobile-nav-toggle, .hamburger-menu, .hamburger').on('click', function(e) {
            e.preventDefault();
            $('.site-header__site-nav').toggleClass('mobile-open');
            $(this).toggleClass('is-active');
        });

        // 5. BXSlider Ticker Initialization
        if ($.fn.bxSlider && $('.bxslider').length) {
            $('.bxslider').bxSlider({
                infiniteLoop: true,
                speed: 40000,
                minSlides: 4,
                maxSlides: 8,
                slideWidth: 180,
                slideMargin: 20,
                ticker: true,
                tickerHover: true
            });
        }

        // 6. Owl Carousel Initialization
        if ($.fn.owlCarousel && $('.social-slider').length) {
            $('.social-slider').owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                dots: true,
                nav: true
            });
        }

        // 7. Channel Specs Tabs Switcher (.lt click)
        $('.lt').on('click', function(e) {
            e.preventDefault();
            var tech = $(this).attr('id');
            $('.lt').removeClass('active');
            $(this).addClass('active');
            $('.tech-content').hide();
            $('#content-' + tech).fadeIn(200);
        });

        // 8. Contact Us Tabs Switcher
        $('.tablinks').on('click', function(e) {
            e.preventDefault();
            var tabId = $(this).data('tab') || $(this).attr('onclick');
            if (tabId) {
                $('.tabcontent').hide();
                $('.tablinks').removeClass('active');
                $(this).addClass('active');
                $('#' + tabId).fadeIn(200);
            }
        });
    });

})(jQuery);
