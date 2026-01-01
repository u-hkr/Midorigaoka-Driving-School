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

		<section id="facilities" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-container">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">施設案内</strong>
										<small class="en">Facilities</small>
								</h2>
								<div class="sec-box sec-box-2">
										<div class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/school/facilities-img-1.png" alt="" class="u-img-cover"></div>
												<p class="bg">二輪専用校舎（待合室）</p>
										</div>
										<div class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/school/facilities-img-2.png" alt="" class="u-img-cover"></div>
												<p class="bg">教室内風景</p>
										</div>
								</div>
								<div class="sec-box sec-box-3">
										<div class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/school/facilities-img-3.png" alt="" class="u-img-cover"></div>
												<p class="bg">校舎</p>
										</div>
										<div class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/school/facilities-img-4.png" alt="" class="u-img-cover"></div>
												<p class="bg">ドライビングトレーチャー</p>
												<p class="sec-text tb">※当校の普通車の高速教習は、シミュレーターではなく実車で行っております。</p>
										</div>
										<div class="box-item js-inview fadeup">
												<div class="image"><img src="<?php echo dir_img(); ?>/school/facilities-img-5.png" alt="" class="u-img-cover"></div>
												<p class="bg">送迎バス</p>
										</div>
								</div>
								<p class="sec-text pc js-inview fadeup">※当校の普通車の高速教習は、シミュレーターではなく実車で行っております。</p>
						</div>
						<a href="https://maps.app.goo.gl/nHBoQ6ag42oACzG4A" class="sec-banner h-opacity" target="_blank">
								<img src="<?php echo dir_img(); ?>/school/banner-img.png" alt="360°で見る緑ヶ丘" class="u-img-contain tc">
								<img src="<?php echo dir_img(); ?>/index/banner-3.png" alt="360°で見る緑ヶ丘" class="u-img-contain sp">
						</a>
				</div>
		</section>
		<section id="course" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-container">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">コース案内</strong>
										<small class="en">Course</small>
								</h2>
								<div class="sec-box">
										<div class="box-item">
												<div class="image js-inview ivimage"><img src="<?php echo dir_img(); ?>/school/course-img-1.png" alt="" class="u-img-contain"></div>
												<div class="texts">
														<span class="course">教習コース</span><span class="text">県下随一の広大なコースで“のびのび教習”を！</span>
												</div>
										</div>
										<div class="box-item">
												<div class="image js-inview ivimage"><img src="<?php echo dir_img(); ?>/school/course-img-2.png" alt="" class="u-img-contain"></div>
												<div class="texts">
														<span class="course">二輪車専用コース</span><span class="text">当校は二輪車専用のコースを完備しております。<br>広々とした二輪車だけのコースで安全・快適に練習して頂けます。</span>
												</div>
										</div>
								</div>
															
						</div>
				</div>
		</section>
		<section id="system" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-container">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">教習システム</strong>
										<small class="en">System</small>
								</h2>
								<p class="sec-text js-inview fadeup">技能教習のご予約については、予約窓口にて直接お取りしています。<br>卒業までスケジュールを組むプランもオプションでご用意しております。<br>詳しくは、窓口までお尋ね下さい。</p>
								<div class="sec-box-top js-inview fadeup">
										<p class="top">電話でのご予約</p>
										<div class="box">
												<div class="tel"><img src="<?php echo dir_img(); ?>/common/phone-icon.png" alt="" class="icon u-img-contain"><span>0120-310-625</span></div>
												<p class="time">月～土曜日／９：０５～２０：３０<br>日曜日／９：０５～１７：２０</p>
										</div>
								</div>
								<div class="sec-box-btm">
										<div class="box js-inview fadeup">
												<div class="item">
														<p class="bg">卒業まで同じ指導員を<br class="sp">ご希望の方は…</p>
														<p class="line"><span>担任制システムで！！</span></p>
														<p class="text">色々指導員が変わるのはちょっと・・・ という方は担任制システムがあります。<br><br>卒業まで同じ指導員が責任をもって指導いたします。<br><br>ただし、指導員もお休みをいただく日がありますので、一人の指導員で入校から卒業までということになると、若干日数がかかってしまいます。<br><br>また、検定試験は同じ指導員が行うことができないことをご了承ください。</p>
												</div>
												<div class="item">
														<p class="bg">平日、仕事や学校で<br class="sp">お忙しい方は…</p>
														<p class="line"><span>大丈夫です！！<br class="sp">緑ヶ丘は年中無休。</span></p>
														<p class="text">土日はもちろん祝日も正規の技能・学科教習ができます。<br>（年末年始、お盆等はお休みさせていただきます。）<br><br>土日中心で、時には夜間教習を行うことで、普段忙しくて平日の昼にはなかなか来られない方でも、教習を行うことが出来ます。<br><br>※仮免試験は平日の月・水・金にしか行っておりません。<br>※高速教習は、昼間部に行います。</p>
												</div>
										</div>
								</div>           
						</div>
						<div class="js-inview fadeup">
								<a href="<?php echo get_page_url("enrollment"); ?>#tab-time" class="sec-btn"><img src="<?php echo dir_img(); ?>/common/time.svg" alt="" class="icon"><span class="txt"><span class="large">教習時間・<br class="sp">学科時間割</span>を見る</span></a>
						</div>
				</div>
		</section>

	</main>


	<?php
		endwhile;
	endif;
	?>
<?php get_footer();?>
