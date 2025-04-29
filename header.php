<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Optional: Favicon -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon" />

    <!-- Optional: 預先載入 Google Font 或其他資源 -->
    <!-- Google fonts> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
// 如果你的主題使用 <header> 元素，可以從這裡開始

?>
<header class="site-header">
  <div class="container">
    <h1 class="site-title">
      <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
    </h1>
    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
  </div>
</header>
