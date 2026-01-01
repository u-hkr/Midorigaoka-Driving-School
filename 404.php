<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 Union Theme - Version: 1.4
*/

get_header();
?>

<div id="heading" class="c-section">
  <div class="sec-inner">
      <h1 class="sec-title">404</h1>
  </div>
</div>

<main id="main">

  <section id="page" class="section c-section">
    <div class="sec-inner c-inner">
      <div class="p_fv_info">
        <p class="text" style="text-align: center;">ページが見つかりませんでした。</p>
        <a href="<?php echo home_url(); ?>" class="sec-btn h-opacity">TOPページに戻る</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer();?>
