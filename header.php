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

<header class="w-full border-b">
<div class="topbar-announcement">
  <strong>出國上網不用怕破費！</strong> 支援全球130+國家，每GB只要 
  <span>US$1.59</span>，划算到不行～
  <a href="/buy-now">立即購買→</a>
</div>
<nav class="flex items-center justify-between h-[60px] sm:h-[72px] lg:h-[85px] px-6 bg-white">
  <!-- ... 你的 menu 結構照舊 ... -->
</nav>

  <!-- Logo -->
  <div class="shrink-0">
    <a href="/">
      <img src="/logo.svg" alt="Logo" class="h-8" />
    </a>
  </div>

  <!-- 主選單 -->
  <div class="flex items-center gap-[1.7rem] text-sm font-normal text-gray-800">
    <p class="p-button"><a href="/destinations" class=>旅遊目的地</p></a>
    <p class="p-menu"><p class="p-menu"><a href="/what-is-esim">什麼是 eSIM</a>
    <p class="p-menu"><a href="/supported-devices" >支援的裝置</a>
    <p class="p-menu"><a href="/blog" >部落格</a>
    <p class="p-menu"><a href="/faq" >常見問題</a>
  </div>

  <!-- 註冊 / 購物車 -->
  <div class="flex items-center gap-[1.7rem] text-sm text-gray-700">
    <a href="/login" class="flex items-center gap-1 hover:text-blue-600">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
          d="M5.121 17.804A8 8 0 0112 4a8 8 0 016.879 13.804M15 12H9m0 0l3-3m-3 3l3 3" />
      </svg>
      註冊/登入
    </a>

    <a href="/cart" class="hover:text-blue-600">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h11L17 13M7 13h10m-4 6a1 1 0 100-2 1 1 0 000 2zm-4 0a1 1 0 100-2 1 1 0 000 2z" />
      </svg>
    </a>
  </div>
</nav>

</header>

