<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

	<div id="top" class="c-section js-inview">
		<div class="sec-inner">
				<h1 class="sec-title"><?php the_title(); ?></h1>
		</div>
	</div>

	<main id="main">

		<section class="section c-section">
				<div class="sec-inner">
					<?php the_content(); ?>
				</div>
		</section>

	</main>


	<?php
		endwhile;
	endif;
	?>
<?php get_footer();?>
