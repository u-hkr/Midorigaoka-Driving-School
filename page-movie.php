<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

	<div id="top" class="c-section">
			<div class="sec-inner">
					<h1 class="sec-img-1"><img src="<?php echo dir_img(); ?>/movie/mv-img-1.png" alt="動画で分かる緑ヶ丘自動車学校" class="u-img-contain"></h1>
					<h1 class="sec-img-2"><img src="<?php echo dir_img(); ?>/movie/mv-img-2.png" alt="動画で分かる緑ヶ丘自動車学校" class="u-img-contain"></h1>
			</div>
	</div>
    
	<div id="youtube" class="c-youtube">
			<button type="button" class="close"></button>
			<div class="inner">
					<div class="youtube"></div>
					<p class="text"></p>
			</div>
	</div>

	<main id="main">

		<section id="movie" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-texts">
								<div class="image js-inview fadeup"><img src="<?php echo dir_img(); ?>/movie/texts-img.png" alt="入校前に動画をチェック！" class="u-img-contain"></div>
								<p class="text js-inview fadeup">「<span class="col">入校条件</span>」「<span class="col">入校手続き</span>」<br class="tb">「<span class="col">入校時の持ち物</span>」「<span class="col">教習料金</span>」<br class="tb">について、<span class="u-ib">YouTube動画を視聴できます。</span></p>
						</div>
						<div class="sec-box">
								<div class="sec-item js-inview fadeup">
										<div class="box-top js-ac-btn">
												<h2 class="c-title js-inview title">
														<small class="en">CONDITIONS</small>
														<strong class="ja">入校資格</strong>
												</h2>
												<span class="plus-btn"></span>
										</div>
										<div class="box-content js-ac-content">
												<div class="sec-list">
														<div class="list-item">
																<div class="top">
																		<div class="square"><img src="<?php echo dir_img(); ?>/movie/item-top-img-1.png" alt="" class="u-img-contain"></div>
																		<h3 class="title"><span class="large">自動車</span><br>の動画</h3>
																</div>
																<div class="movies">
																		<button type="button" class="link js-youtube" data-youtube="https://youtu.be/4FGUN71QJSI?si=bgx1kNZdW4NCVTmy"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">普通車MT・AT</p></button>
																		<button type="button" class="link js-youtube" data-youtube="https://youtu.be/3HQ7gcZn5bo?si=hACfPflm8p2IU_0s"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">準中型</p></button>
																		<button type="button" class="link js-youtube" data-youtube="https://youtu.be/g3NXeKCRvfw?si=ucUiHMTBCMAxj2Q6"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">中型車</p></button>
																		<button type="button" class="link js-youtube" data-youtube="https://youtu.be/7CC2pPUpau4?si=ti_BBMJ6gwNjUlGS"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">大型車</p></button>
																</div>
														</div>
														<div class="list-item">
																<div class="top">
																		<div class="square"><img src="<?php echo dir_img(); ?>/movie/item-top-img-2.png" alt="" class="u-img-contain"></div>
																		<h3 class="title"><span class="medium">けん引<span class="ls">・</span>大特</span><br>の動画</h3>
																</div>
																<div class="movies">
																		<button type="button" data-youtube="https://youtu.be/_LXisK53V5A?si=Qgdh07UCBAoKdfyq" class="link js-youtube"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">けん引</p></button>
																		<button type="button" data-youtube="https://youtu.be/9P4vR4u6aTU?si=3-P-NVbcBqWnamg1" class="link js-youtube"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">大型特殊</p></button>
																</div>
														</div>
														<div class="list-item">
																<div class="top">
																		<div class="square"><img src="<?php echo dir_img(); ?>/movie/item-top-img-3.png" alt="" class="u-img-contain"></div>
																		<h3 class="title"><span class="large">二輪</span><br>の動画</h3>
																</div>
																<div class="movies">
																		<button type="button" data-youtube="https://youtu.be/yCinSJkCWDo?si=BWXCzI9p1tPyOlAO" class="link js-youtube"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">大型二輪MT・AT</p></button>
																		<button type="button" data-youtube="https://youtu.be/yCinSJkCWDo?si=K-ZVccWnw813u55L" class="link js-youtube"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">普通二輪MT・AT</p></button>
																		<button type="button" data-youtube="https://youtu.be/yCinSJkCWDo?si=f_z2h7v8NxWXoOTs" class="link js-youtube"><div class="mov"><img src="<?php echo dir_img(); ?>/movie/movie-img-1.png" alt="" class="u-img-contain"></div><p class="type">小型二輪MT・AT</p></button>
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class="sec-item js-inview fadeup">
										<div class="box-top js-ac-btn">
												<h2 class="c-title js-inview title">
														<small class="en">PROCEDURE</small>
														<strong class="ja">入校手続き</strong>
												</h2>
												<span class="plus-btn"></span>
										</div>
										<div class="box-content js-ac-content">
												<div class="sec-embed">
														<div class="movie">
																<iframe width="1040" height="585" src="https://www.youtube.com/embed/BOfccWKgEJs?si=d0IWR6URrIaBEfau" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
																<!-- <iframe
																width="1040"
																height="585"
																src="https://www.youtube.com/embed/BOfccWKgEJs"
																title="YouTube video player"
																allow="autoplay; encrypted-media; picture-in-picture"
																allowfullscreen>
																</iframe> -->
														</div>
												</div>
										</div>
								</div>
								<div class="sec-item js-inview fadeup">
										<div class="box-top js-ac-btn">
												<h2 class="c-title js-inview title s">
														<small class="en">PERSONAL EFFECTS</small>
														<strong class="ja">入校時の持ち物</strong>
												</h2>
												<span class="plus-btn"></span>
										</div>
										<div class="box-content js-ac-content">
												<div class="sec-embed">
														<div class="movie">
																<iframe width="1040" height="585" src="https://www.youtube.com/embed/mcr9zaFdazk?si=kXv6Na8Lq2lTTRgA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
														</div>
												</div>
										</div>
								</div>
								<div class="sec-item js-inview fadeup">
										<div class="box-top js-ac-btn">
												<h2 class="c-title js-inview title">
														<small class="en">PAYMENT</small>
														<strong class="ja">教習料金について</strong>
												</h2>
												<span class="plus-btn"></span>
										</div>
										<div class="box-content js-ac-content">
												<div class="sec-embed">
														<div class="movie">
																<iframe width="1040" height="585" src="https://www.youtube.com/embed/C1zX7QITtRc?si=gpM9zpJQEApdJVbn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</section>

	</main>


	<?php
		endwhile;
	endif;
	?>
<?php get_footer();?>
