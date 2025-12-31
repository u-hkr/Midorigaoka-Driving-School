<?php

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$blog_category_id = get_query_var('blog_category_id') ? get_query_var('blog_category_id') : "100";
?>

	<div id="heading" class="c-section">
		<div class="sec-inner">
				<h1 class="sec-title">お知らせ</h1>
		</div>
	</div>
	
	<main id="main">

		<!-- お知らせ一覧 -->
		<section id="archive" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-list c-newslist h-opacity">
							<?php if (have_posts()): while(have_posts()): the_post(); $the_ID = get_the_ID(); ?>
								<a href="<?php the_permalink(); ?>" class="item">
										<?php if(has_post_thumbnail()): ?>
										<div class="img" style="background: #D9D9D9;"><?php the_post_thumbnail('full', array('class' => 'u-img-cover')); ?></div>
										<?php else: ?>
										<div class="img" style="background: #D9D9D9;"></div>
										<?php endif; ?>
										<div class="info">
											<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
											<?php $terms = get_the_terms($the_ID, 'category'); ?>
											<?php if($terms): ?>
											<span class="bg <?php echo $terms[0]->slug; ?>"><?php echo $terms[0]->name; ?></span>
											<?php endif; ?>
										</div>
										<h2 class="title"><span><?php the_title(); ?></span></h2>
								</a>
							<?php endwhile; endif; ?>
						</div>

						<div class="sec-nav">
							<?php 
							$args = array(
								'mid_size' => 1,
								'prev_text' => '',
								'next_text' => '',
								'screen_reader_text' => ' ',
								'before_page_number' => '<span>',
								'after_page_number'  => '</span>',
							);
							the_posts_pagination($args);
							?>
						</div>
				</div>
		</section>
		
	</main>

<?php get_footer();?>