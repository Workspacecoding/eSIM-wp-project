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

  <section class="elementor-main-content">
    <?php
    $elementor_page_id = 9; // Elementor做的那一頁 ID
    $post = get_post( $elementor_page_id );
    if ( $post ) {
        echo apply_filters( 'the_content', $post->post_content );
    } else {
        echo '<p>找不到頁面內容</p>';
    }
    ?>
  </section>

</main>

<?php get_footer(); ?>
