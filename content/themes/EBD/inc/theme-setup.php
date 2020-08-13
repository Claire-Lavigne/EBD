<?php


if (!function_exists('EBDEbook_setup')) :
    function EBDEbook_setup()
    {
        add_theme_support('title-tag');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_action('wp_print_styles', 'print_emoji_styles');
        // Supprime le lien vers Windows Live Editor Manifest
        remove_action('wp_head', 'wlwmanifest_link');
        // Supprime le lien RSD + XML
        remove_action('wp_head', 'rsd_link');
        // Supprime la meta generator
        remove_action('wp_head', 'wp_generator');
        // Supprime les extra feed rss
        remove_action('wp_head', 'feed_links_extra', 3);
        // Supprime les feeds des Posts et des Commentaires
        remove_action('wp_head', 'feed_links', 2);
    }
endif;
add_action('after_setup_theme', 'EBDEbook_setup');


// custom login page
if (!function_exists('EBDEbook_login_logo')) :
    function EBDEbook_login_logo()
    { ?>
        <style type="text/css">
            #login h1 a,
            .login h1 a {
                background-image: url(<?php echo get_theme_file_uri('/public/images/covers/logo-ebdgrupo.png') ?>);
                height: 180px;
                width: 320px;
                background-size: 250px auto;
                background-repeat: no-repeat;
                padding-bottom: 0;
            }

            body.login div#login p#nav a:hover,
            body.login div#login p#backtoblog a:hover {
                color: #ff1709 !important;
                /* Your link color. */
            }
        </style>
    <?php }
endif;
add_action('login_enqueue_scripts', 'EBDEbook_login_logo');


if (!function_exists('EBDEbook_login_logo_url')) :
    function EBDEbook_login_logo_url()
    {
        return home_url();
    }
endif;
add_filter('login_headerurl', 'EBDEbook_login_logo_url');


if (!function_exists('EBDEbook_login_logo_url_title')) :
    function EBDEbook_login_logo_url_title()
    {
        return 'Grupo EBD';
    }
endif;
add_filter('login_headertext', 'EBDEbook_login_logo_url_title');


if (!function_exists('EBDEbook_favicon')) :
    // FAVICON
    function EBDEbook_favicon()
    { ?>
        <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/public/images/favicon-ebd.png">
<?php }
endif;
add_action('wp_head', 'EBDEbook_favicon');
