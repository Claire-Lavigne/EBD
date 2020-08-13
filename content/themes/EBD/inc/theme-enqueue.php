<?php

if (!function_exists('EBDEbook_enqueue_styles')) :

    function EBDEbook_enqueue_styles()
    {
        wp_enqueue_style(
            'EBDEbook',
            get_theme_file_uri('/public/css/style.css'),
            [],
            wp_get_theme()->get('Version')
        );
        wp_enqueue_script(
            'lvg-js',
            get_theme_file_uri('/public/js/app.js'),
            [],
            wp_get_theme()->get('Version'),
            true
        );
    }

endif;

add_action('wp_enqueue_scripts', 'EBDEbook_enqueue_styles');
