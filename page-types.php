<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

	<div id="heading" class="c-section">
		<div class="sec-inner">
				<h1 class="sec-title"><?php the_title(); ?></h1>
		</div>
	</div>

	<main id="main">

		<section id="types" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-box">
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-yellow"><img src="<?php echo dir_img(); ?>/types/box-img-1.png" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">普通自動車</span><span class="arrow"></span></p>
						</a>
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-blue"><img src="<?php echo dir_img(); ?>/types/box-img-2.png" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">二輪車</span><span class="arrow"></span></p>
						</a>
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-green"><img src="" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">準中型</span><span class="arrow"></span></p>
						</a>
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-green"><img src="<?php echo dir_img(); ?>/types/box-img-4.png" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">大型</span><span class="arrow"></span></p>
						</a>
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-green"><img src="<?php echo dir_img(); ?>/types/box-img-5.png" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">中型</span><span class="arrow"></span></p>
						</a>
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-green"><img src="<?php echo dir_img(); ?>/types/box-img-6.png" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">けん引</span><span class="arrow"></span></p>
						</a>
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-green"><img src="<?php echo dir_img(); ?>/types/box-img-7.png" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">大特</span><span class="arrow"></span></p>
						</a>
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-green"><img src="" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">二種</span><span class="arrow"></span></p>
						</a>
						<a href="" class="box-item js-inview fadeup">
								<div class="image image-purple"><img src="<?php echo dir_img(); ?>/types/box-img-9.png" alt="" class="u-img-contain"></div>
								<p class="btm-btn"><span class="txt">各種講習</span><span class="arrow"></span></p>
						</a>
						</div>
				</div>
		</section>

	</main>


	<?php
		endwhile;
	endif;
	?>
<?php get_footer();?>
