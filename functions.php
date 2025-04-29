<?php
// 安全性檢查，防止外部直接存取
defined( 'ABSPATH' ) || exit;

// 掛載父主題CSS + Google Fonts + 自己的 main.css
add_action( 'wp_enqueue_scripts', function() {
    // 先載父主題的CSS
    wp_enqueue_style(
        'blocksy-styles',
        get_template_directory_uri() . '/style.css'
    );

    // 載入 Google Fonts：Noto Sans TC
    wp_enqueue_style(
        'google-fonts-noto-sans-tc',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap',
        [],
        null
    );

    // 再載子主題自己的 main.css
    wp_enqueue_style(
        'esim-child-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        ['blocksy-styles', 'google-fonts-noto-sans-tc'], // 指定依賴父主題跟 Google Fonts
        filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) // 防止快取
    );
});
