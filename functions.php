<?php
defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', function () {
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
        filemtime(get_stylesheet_directory() . '/assets/css/main.css')
    );

    // 自己的 JS
    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        null,
        true
    );
    add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if ($handle === 'menu-js') {
        return "<script type='module' src='$src'></script>";
    }
    return $tag;
}, 10, 3);
});
