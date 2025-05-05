<?php get_header(); ?>
<main class="site-main">

<?php
$home_page_id = 121;

// 撈出ACF的首頁標題
$home_title = get_field('home_title', $home_page_id);

if ( !empty($home_title) ) {
    echo '<center><h1 class="home-title">' . esc_html($home_title) . '</h1><center>';
} else {
    echo '<h1 class="home-title">預設首頁標題</h1>';
}
?>


  <section class="custom-tourist-destination">
    <!-- 這裡是你自己之後要加的區塊 -->
  </section>


</main>
</body>

<script src="http://esim-website.local/wp-content/themes/eSIM/assets/js/2.js"></script>
<?php get_footer(); ?>
