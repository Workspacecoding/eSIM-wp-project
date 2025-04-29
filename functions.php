<?php
// 正確的安全檢查
defined( 'ABSPATH' ) || exit;

// 引入父主題CSS
add_action( 'wp_enqueue_scripts', 'blocksy_child_enqueue_styles', 15 );

function blocksy_child_enqueue_styles() {
	wp_enqueue_style(
		'blocksy-child-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'blocksy-styles', // 依賴父主題的CSS，確保順序正確
		]
	);
}
