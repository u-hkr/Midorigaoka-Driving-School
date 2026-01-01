<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();
?>


<div id="mv">
		<div class="sec-slide js-slide-mv">
				<div class="item"><img src="<?php echo dir_img(); ?>/index/mv-1.png" class="u-img-cover" alt="緑ヶ丘自動車学校 外観"></div>
				<div class="item"><img src="<?php echo dir_img(); ?>/index/mv-2.png" class="u-img-cover" alt="大型車"></div>
				<div class="item"><img src="<?php echo dir_img(); ?>/index/mv-3.png" class="u-img-cover" alt="免許取得の様子"></div>
		</div>
		<div class="sec-line">
				<!-- <object type="image/svg+xml" data="" class="u-img-cover" width="2152.51" height="538" aria-label="線"></object> -->
		</div>
		<div class="sec-inner">
				<div class="sec-scroll pc"><div class="sec-scroll-text">SCROLL</div><div class="sec-scroll-line"></div></div>

				<div class="sec-img-1"><img src="<?php echo dir_img(); ?>/index/mv-text-1.png" class="pc u-img-contain" alt="広い敷地でのびのび練習！"><img src="<?php echo dir_img(); ?>/index/mv-text-1-sp.png" class="tb u-img-contain" alt="広い敷地でのびのび練習！"></div>
				<div class="sec-img-2"><img src="<?php echo dir_img(); ?>/index/mv-text-2.svg" class="u-img-contain" alt="緑ヶ丘自動車学校"></div>

				<div class="sec-news h-opacity">
						<?php
						$_posts = get_posts(array(
							'post_type' => array('post'),
							'posts_per_page' => 3,
							'category_name' => 'important',
						));
						if($_posts):
						?>
						<div class="sec-news-inner">
								<?php foreach($_posts as $post): setup_postdata($post); $the_ID = get_the_ID(); ?>
								<a href="<?php the_permalink(); ?>" class="sec-news-item">
										<time datetime="<?php the_time('Y-m-d'); ?>" class="date tb"><?php the_time('Y.m.d'); ?></time>
										<?php $terms = get_the_terms($the_ID, 'category'); ?>
										<?php if($terms): ?>
										<span class="cat important"><?php echo $terms[0]->name; ?></span>
										<?php endif; ?>
										<div class="info">
												<time datetime="<?php the_time('Y-m-d'); ?>" class="date pc"><?php the_time('Y.m.d'); ?></time>
												<p class="text"><?php the_title(); ?></p>
										</div>
								</a>
								<?php endforeach; ?>
						</div>
						<?php endif; wp_reset_postdata(); ?>
				</div>
		</div>
</div>

<main id="main-top">

		<section id="driver" class="section c-section">
				<div class="sec-inner c-inner-max">
						<!-- 共通タイトル -->
						<h2 class="c-title white text-center sec-title js-inview">
								<small class="en">DRIVER <span class="u-ib">LICENCE</span></small>
								<strong class="ja">免許を取りたい方</strong>
						</h2>
						<div class="sec-box-top">
								<a href="<?php echo get_page_url("visitor"); ?>" class="box single js-inview fadeup">
										<h3 class="title">初めての方へ</h3>
										<div class="image"><img src="<?php echo dir_img(); ?>/index/box-top-s.png" alt="" class="u-img-contain"></div>
										<p class="btm-btn"><span class="txt">詳しい内容を見る</span><span class="arrow"></span></p>
								</a>
								<div class="box double js-inview fadeup">
										<h3 class="title">普通自動車・二輪車</h3>
										<div class="bg">
												<a href="<?php echo get_page_url("simulation"); ?>" class="top-btn h-opacity"><span class="txt">料金シミュレーションをする</span><span class="arrow"></span></a>
												<div class="box-list">
														<a href="<?php echo home_url("licence/#tab-standard"); ?>" class="box-item">
																<div class="image"><img src="<?php echo dir_img(); ?>/index/box-top-d-1.png" alt="" class="u-img-contain"></div>
																<p class="btm-btn"><span class="txt"><span class="large">普通自動車</span>を<br class="tb">詳しく見る</span><span class="arrow"></span></p>
														</a>
														<a href="<?php echo home_url("licence/#tab-motorcycle"); ?>" class="box-item">
																<div class="image"><img src="<?php echo dir_img(); ?>/index/box-top-d-2.png" alt="" class=""></div>
																<p class="btm-btn"><span class="txt"><span class="large">二輪車</span>を<br class="tb">詳しく見る</span><span class="arrow"></span></p>
														</a>
												</div>
										</div>
								</div>
						</div>
						<div class="sec-box-mid">
								<h3 class="title js-inview fadeup">働く方向けの免許</h3>
								<div class="box-list">
										<a href="<?php echo home_url("licence/#tab-large"); ?>" class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/index/box-mid-1.png" alt="" class="u-img-contain"></div>
												<div class="btm-btn"><p class="txt"><span class="large">大型</span>を<br class="tb">詳しく見る</p><span class="arrow"></span></div>
										</a>
										<a href="<?php echo home_url("licence/#tab-mid"); ?>" class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/index/box-mid-2.png" alt="" class="u-img-contain"></div>
												<div class="btm-btn"><p class="txt"><span class="large">中型</span>を<br class="tb">詳しく見る</p><span class="arrow"></span></div>
										</a>
										<a href="<?php echo home_url("licence/#tab-towing"); ?>" class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/index/box-mid-3.png" alt="" class="u-img-contain"></div>
												<div class="btm-btn"><p class="txt"><span class="large">けん引</span>を<br class="tb">詳しく見る</p><span class="arrow"></span></div>
										</a>
										<a href="<?php echo home_url("licence/#tab-special-large"); ?>" class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/index/box-mid-4.png" alt="" class="u-img-contain"></div>
												<div class="btm-btn"><p class="txt"><span class="large">大特</span>を<br class="tb">詳しく見る</p><span class="arrow"></span></div>
										</a>
								</div>
						</div>
						<div class="sec-box-btm">
								<div class="box-list">
										<a href="<?php echo get_page_url("access"); ?>" class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/index/box-btm-1.png" alt=""></div>
												<p class="text">アクセス</p>
										</a>
										<a href="<?php echo get_page_url("school"); ?>" class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/index/box-btm-2.png" alt=""></div>
												<p class="text">学校案内</p>
										</a>
										<a href="<?php echo get_page_url("enrollment"); ?>" class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/index/box-btm-3.png" alt=""></div>
												<p class="text">入校案内</p>
										</a>
								</div>
						</div>
						<div class="sec-box-img">
								<img src="<?php echo dir_img(); ?>/index/bg-img-1.png" alt="" class="u-img-cover">
						</div>
				</div>
		</section>

		<?php
		$_posts = get_posts(array(
			'post_type' => array('post'),
			'posts_per_page' => 3,
		));
		?>
		<section id="news" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-box-left">
								<h2 class="title c-title js-inview">
										<small class="en">NEWS</small>
										<strong class="ja">お知らせ</strong>
								</h2>
								<a href="<?php echo home_url("news/"); ?>" class="btn js-inview fadeup"><span class="txt">一覧を見る</span><span class="arrow"></span></a>
						</div>
						<div class="sec-box-right">
								<div class="box-list js-inview fadeup h-opacity">
										<?php if($_posts): foreach($_posts as $post): setup_postdata($post); $the_ID = get_the_ID(); ?>
										<a href="<?php the_permalink(); ?>" class="box-item">
												<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
												<?php $terms = get_the_terms($the_ID, 'category'); ?>
												<?php if($terms): ?>
												<span class="bg <?php echo $terms[0]->slug; ?>"><?php echo $terms[0]->name; ?></span>
												<?php endif; ?>
												<span class="text"><?php the_title(); ?></span>
												<span class="arrow"></span>
										</a>
										<?php endforeach; endif; wp_reset_postdata();  ?>
								</div>
						</div>
						
						<!-- <h2 class="c-title-s">
								<strong class="ja">免許取得の流れ</strong>
								<small class="en">flow</small>
						</h2> -->
				</div>
				<div class="sec-box-img js-inview ivimage">
						<img src="<?php echo dir_img(); ?>/index/bg-img-2.png" alt="" class="u-img-cover">
				</div>
		</section>

		<section id="banner" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-box h-opacity">
								<div class="js-inview fadeup">
										<a href="" class="box-item">
												<img src="<?php echo dir_img(); ?>/index/banner-1.png" alt="名古屋市緑区 東海自動車学校 鳴海駅から徒歩5分" class="u-img-cover">
										</a>
								</div>
								<div class="js-inview fadeup">
										<a href="" class="box-item">
												<img src="<?php echo dir_img(); ?>/index/banner-2.png" alt="採用サイトはこちらから" class="u-img-cover">
										</a>
								</div>
								<div class="js-inview fadeup">
										<a href="https://maps.app.goo.gl/nHBoQ6ag42oACzG4A" class="box-item" target="_blank">
												<img src="<?php echo dir_img(); ?>/index/banner-3.png" alt="360°で見る緑ヶ丘" class="u-img-cover">
										</a>
								</div>
								<div class="js-inview fadeup">
										<a href="<?php echo get_page_url("movie"); ?>" class="box-item">
												<img src="<?php echo dir_img(); ?>/index/banner-4.png" alt="動画でわかる緑ヶ丘自動車学校" class="u-img-cover">
										</a>
								</div>
						</div>
						
						<!-- <h2 class="c-title-s">
								<strong class="ja">免許取得の流れ</strong>
								<small class="en">flow</small>
						</h2> -->
				</div>
		</section>

</main>

<?php
	get_footer();
?>