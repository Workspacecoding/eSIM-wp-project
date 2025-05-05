<?php
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    // 父主題 CSS
    wp_enqueue_style(
        'blocksy-styles',
        get_template_directory_uri() . '/style.css'
    );

    // Google Fonts
    wp_enqueue_style(
        'google-fonts-noto-sans-tc',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap',
        [],
        null
    );

    // 自己的 CSS
    wp_enqueue_style(
        'esim-child-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        ['blocksy-styles', 'google-fonts-noto-sans-tc'],
        filemtime( get_stylesheet_directory() . '/assets/css/main.css' )
    );

    function load_custom_scripts() {
        wp_enqueue_script(
            'menu-toggle',
            get_stylesheet_directory_uri() . '/assets/js/menu-toggle.js',
            array(), // 如果需要 jQuery 就填 ['jquery']
            false,
            true // true 表示放在 body 結尾；false 表示放在 head
        );
    }
    add_action('wp_enqueue_scripts', 'load_custom_scripts');
});
