<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();
	// $paged = get_query_var('paged') ? get_query_var('paged') : 1;

	$the_ID;
?>

<div id="heading" class="c-section">
		<div class="sec-inner">
				<h1 class="sec-title">お知らせ</h1>
		</div>
</div>

<main id="main">

		<!-- 投稿詳細 -->
		<?php if(have_posts()): while(have_posts()): the_post(); $the_ID = get_the_ID(); ?>
		<section id="post" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-top">
								<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
								<?php $terms = get_the_terms($the_ID, 'category'); ?>
								<?php if($terms): foreach($terms as $term) : ?>
								<span class="bg <?php echo $term->slug; ?>"><?php echo $term->name; ?></span>
								<?php endforeach; endif; ?>
						</div>
						<h2 class="sec-title"><?php the_title(); ?></h2>
						<div class="sec-box c-post">
								<?php the_content(); ?>
						</div>
						<a href="<?php echo home_url("news/"); ?>" class="sec-btn h-opacity">一覧に戻る</a>
				</div>
		</section>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		
		
		<?php
		$_posts = get_posts(array(
			'post_type' => array('post'),
			'posts_per_page' => 3,
			'exclude' => array($the_ID),
		));
		if($_posts):
		?>
		<section id="archive" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-list c-newslist h-opacity">
								<?php if($_posts): foreach($_posts as $post): setup_postdata($post); $the_ID = get_the_ID(); ?>
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
								<?php endforeach; endif; wp_reset_postdata();  ?>
						</div>
				</div>
		</section>
		<?php endif; ?>

</main>

<?php get_footer();?>
