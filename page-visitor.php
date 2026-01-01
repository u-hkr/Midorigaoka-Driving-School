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

		<section id="about" class="section c-section">
				<div class="sec-inner c-inner-1250">
						<div class="sec-box-top">
								<div class="texts">
										<p class="title js-inview fadeup"><span class="middle">緑ヶ丘自動車学校は</span><br><span class="col">名古屋市緑区</span>にある<br><span class="line"><span class="large">東海自動車学校グループ</span>の<span class="large">自動車学校</span></span><span class="u-ib">です！</span></p>
										<p class="text js-inview fadeup">1957年の開校時から「一生無事故」のドライバー育成の精神をもって、<br>安全運転マナーをお伝えできるよう励んでいます。</p>
										<p class="text js-inview fadeup">キレイな施設や設備、お子さまがいても安心の託児室、<br>豊富なオプションプランで皆さまの教習ライフを支えます！</p>
								</div>
								<div class="image">
										<div class="js-inview ivimage u-img-cover"><img src="<?php echo dir_img(); ?>/visitor/about-img-1.png" alt="" class="u-img-cover"></div>
								</div>                    
						</div>
						<div class="sec-box-btm h-opacity">
								<div class="">
										<a href="<?php echo get_page_url("movie"); ?>" class="box-item js-inview fadeup">
												<img src="<?php echo dir_img(); ?>/visitor/about-banner-1.png" alt="動画でわかる緑ヶ丘自動車学校" class="u-img-cover">
										</a>
								</div>
								<div class="">
										<a href="https://maps.app.goo.gl/nHBoQ6ag42oACzG4A" class="box-item js-inview fadeup" target="_blank">
												<img src="<?php echo dir_img(); ?>/visitor/about-banner-2.png" alt="360°で見る緑ヶ丘" class="u-img-cover">
										</a>
								</div>
								<div class="">
										<a href="<?php echo get_page_url("campaign"); ?>" class="box-item js-inview fadeup">
												<img src="<?php echo dir_img(); ?>/visitor/about-banner-3.png" alt="割引キャンペーン" class="u-img-cover">
										</a>
								</div>
								<div class="">
										<a href="<?php echo home_url("licence/"); ?>" class="box-item js-inview fadeup">
												<img src="<?php echo dir_img(); ?>/visitor/about-banner-4.png" alt="免許取得の流れ" class="u-img-cover">
										</a>
								</div>
						</div>
				</div>
		</section>
		<section id="reason" class="section c-section">
				<div class="sec-inner c-inner">
						<h2 class="c-title sec-title js-inview">
								<small class="en">REASON</small>
								<strong class="ja">選ばれる理由</strong>
						</h2>
						<div class="sec-box">
								<div class="box-item js-inview fadeup">
										<p class="top"><img src="<?php echo dir_img(); ?>/visitor/reason-1.svg" alt="REASON 01"></p>
										<h3 class="text"><img src="<?php echo dir_img(); ?>/visitor/reason-text-1.png" alt="広い教習コースで、のびのびと練習ができそう！" class="u-img-contain"></h3>
										<div class="image"><img src="<?php echo dir_img(); ?>/visitor/reason-img-1.png" alt="" class="u-img-contain"></div>
										<div class="people"><img src="<?php echo dir_img(); ?>/visitor/reason-people-1.png" alt="" class="u-img-contain"></div>
										<div class="bg"></div><div class="dot"></div>
										<div class="road"><svg class="js-road" viewBox="0 0 640 1040" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="#A3A3A3" stroke-width="75"/><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="white" stroke-width="2" stroke-dasharray="4 4"/><mask><path d="M0 40H570C586.569 40 600 53.4315 600 70V1040" stroke="white" stroke-width="80" class="mask-path"></path></mask></svg></div>
								</div>
								<div class="box-item js-inview fadeup">
										<p class="top"><img src="<?php echo dir_img(); ?>/visitor/reason-2.svg" alt="REASON 02"></p>
										<h3 class="text"><img src="<?php echo dir_img(); ?>/visitor/reason-text-2.png" alt="特殊免許の取得が可能で、業務に直結しそう（給料が上がりそう）" class="u-img-contain"></h3>
										<div class="image"><img src="<?php echo dir_img(); ?>/visitor/reason-img-2.png" alt="" class="u-img-contain"></div>
										<a href="<?php echo home_url("licence/"); ?>" class="btn"><img src="<?php echo dir_img(); ?>/visitor/plan.svg" alt="" class="icon"><span class="txt"><span class="large">自動車免許やプラン</span><br class="sp">について見る</span></a>
										<div class="people"><img src="<?php echo dir_img(); ?>/visitor/reason-people-2.png" alt="" class="u-img-contain"></div>
										<div class="bg"></div><div class="dot"></div>
										<div class="road"><svg class="js-road" viewBox="0 0 640 1040" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="#A3A3A3" stroke-width="75"/><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="white" stroke-width="2" stroke-dasharray="4 4"/><mask><path d="M0 40H570C586.569 40 600 53.4315 600 70V1040" stroke="white" stroke-width="80" class="mask-path"></path></mask></svg></div>
								</div>
								<div class="box-item js-inview fadeup">
										<p class="top"><img src="<?php echo dir_img(); ?>/visitor/reason-3.svg" alt="REASON 03"></p>
										<h3 class="text"><img src="<?php echo dir_img(); ?>/visitor/reason-text-3.png" alt="「厳しい指導をしてくれそう」" class="u-img-contain"></h3>
										<div class="image"><img src="<?php echo dir_img(); ?>/visitor/reason-img-3.png" alt="" class="u-img-contain"></div>
										<div class="people"><img src="<?php echo dir_img(); ?>/visitor/reason-people-3.png" alt="" class="u-img-contain"></div>
										<div class="bg"></div><div class="dot"></div>
										<div class="road"><svg class="js-road" viewBox="0 0 640 1040" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="#A3A3A3" stroke-width="75"/><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="white" stroke-width="2" stroke-dasharray="4 4"/><mask><path d="M0 40H570C586.569 40 600 53.4315 600 70V1040" stroke="white" stroke-width="80" class="mask-path"></path></mask></svg></div>
								</div>
								<div class="box-item js-inview fadeup">
										<p class="top"><img src="<?php echo dir_img(); ?>/visitor/reason-4.svg" alt="REASON 04"></p>
										<h3 class="text"><img src="<?php echo dir_img(); ?>/visitor/reason-text-4.png" alt="的確なアドバイスをしてくれそう" class="u-img-contain"></h3>
										<div class="image"><img src="<?php echo dir_img(); ?>/visitor/reason-img-4.png" alt="" class="u-img-contain"></div>
										<div class="people"><img src="<?php echo dir_img(); ?>/visitor/reason-people-4.png" alt="" class="u-img-contain"></div>
										<div class="bg"></div><div class="dot"></div>
										<div class="road"><svg class="js-road" viewBox="0 0 640 1040" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="#A3A3A3" stroke-width="75"/><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="white" stroke-width="2" stroke-dasharray="4 4"/><mask><path d="M0 40H570C586.569 40 600 53.4315 600 70V1040" stroke="white" stroke-width="80" class="mask-path"></path></mask></svg></div>
								</div>
								<div class="box-item js-inview fadeup">
										<p class="top"><img src="<?php echo dir_img(); ?>/visitor/reason-5.svg" alt="REASON 05"></p>
										<h3 class="text"><img src="<?php echo dir_img(); ?>/visitor/reason-text-5.png" alt="サポート体制！ 試験対策や、困ったときの手厚いサポート" class="u-img-contain"></h3>
										<div class="image"><img src="<?php echo dir_img(); ?>/visitor/reason-img-5.png" alt="" class="u-img-contain"></div>
										<div class="people"><img src="<?php echo dir_img(); ?>/visitor/reason-people-5.png" alt="" class="u-img-contain"></div>
										<div class="bg"></div><div class="dot"></div>
										<div class="road"><svg class="js-road" viewBox="0 0 640 1040" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="#A3A3A3" stroke-width="75"/><path d="M0 37.5H570C586.569 37.5 600 50.9315 600 67.5V1037.5" stroke="white" stroke-width="2" stroke-dasharray="4 4"/><mask><path d="M0 40H570C586.569 40 600 53.4315 600 70V1040" stroke="white" stroke-width="80" class="mask-path"></path></mask></svg></div>
								</div>
								<div class="box-item js-inview fadeup">
										<p class="top"><img src="<?php echo dir_img(); ?>/visitor/reason-6.svg" alt="REASON 06"></p>
										<h3 class="text"><img src="<?php echo dir_img(); ?>/visitor/reason-text-6.png" alt="試験合格保証！一定の条件下で再試験の無料または割引を提供" class="u-img-contain"></h3>
										<div class="image"><img src="<?php echo dir_img(); ?>/visitor/reason-img-6.png" alt="" class="u-img-contain"></div>
										<div class="people"><img src="<?php echo dir_img(); ?>/visitor/reason-people-6.png" alt="" class="u-img-contain"></div>
										<div class="bg"></div><div class="dot"></div>
								</div>
						</div>
				</div>
				<div class="sec-box-img js-inview ivimage">
						<img src="<?php echo dir_img(); ?>/visitor/reason-bg.png" alt="" class="u-img-cover">
				</div>
		</section>
		<section id="interview" class="section c-section">
				<div class="sec-inner c-inner">
						<h2 class="c-title white sec-title js-inview">
								<small class="en">INTERVIEW</small>
								<strong class="ja">卒業生の声</strong>
						</h2>
						<div class="sec-box">
								<div class="box-item js-inview fadeup">
										<div class="text">
												<p class="txt">一生懸命がんばって卒業することが出来ました。これも親切に教えて下さった指導員の皆さんのおかげです。私が普通自動車の教習を受けた学校よりも緑ケ丘自動車学校の方が断然素晴らしかったです。毎日の教習を楽しみに通うことが出来ました。</p>
										</div>
										<div class="profile">
												<div class="image"><img src="<?php echo dir_img(); ?>/visitor/interview-1.png" alt="" class="u-img-contain"></div>
												<div class="info">
														<p>普通二輪車</p>
														<p>男 23歳</p>
												</div>
										</div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="text">
												<p class="txt">とても楽しかった。すごく快適にすごさせてもらいました。職員の方も指導員の先生方もいい人ばっかりでイヤな思いは１回もしなかった。緑ケ丘で運転を習えてよかったと思います。いいドライバーになるよう、これからも頑張ります。</p>
										</div>
										<div class="profile">
												<div class="image"><img src="<?php echo dir_img(); ?>/visitor/interview-2.png" alt="" class="u-img-contain"></div>
												<div class="info">
														<p>普通AT車</p>
														<p>女 18歳</p>
												</div>
										</div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="text">
												<p class="txt">いろんな先生と友達のように仲良く出来ました。授業で笑うことがいっぱいあって、とても明るい授業ばっかりでした。</p>
										</div>
										<div class="profile">
												<div class="image"><img src="<?php echo dir_img(); ?>/visitor/interview-3.png" alt="" class="u-img-contain"></div>
												<div class="info">
														<p>普通AT車</p>
														<p>女 19歳</p>
												</div>
										</div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="text">
												<p class="txt">良いところはちゃんと誉めてくれるし、違ったところはちゃんと教えてくれてとっても良かったです。また大型など取る場合も来たいです。</p>
										</div>
										<div class="profile">
												<div class="image"><img src="<?php echo dir_img(); ?>/visitor/interview-4.png" alt="" class="u-img-contain"></div>
												<div class="info">
														<p>普通二輪車</p>
														<p>男 20歳</p>
												</div>
										</div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="text">
												<p class="txt">とても優しい先生ばかりだったので卒業するのは、とても寂しいです。けれど今まで先生に教えてもらった事を無駄にせず運転を頑張りたいと思います。</p>
										</div>
										<div class="profile">
												<div class="image"><img src="<?php echo dir_img(); ?>/visitor/interview-5.png" alt="" class="u-img-contain"></div>
												<div class="info">
														<p>普通AT車</p>
														<p>女 19歳</p>
												</div>
										</div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="text">
												<p class="txt">緑ケ丘にして良かったと思う！!</p>
										</div>
										<div class="profile">
												<div class="image"><img src="<?php echo dir_img(); ?>/visitor/interview-6.png" alt="" class="u-img-contain"></div>
												<div class="info">
														<p>普通MT車</p>
														<p>男 18歳</p>
												</div>
										</div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="text">
												<p class="txt">指導員からあいさつしてくれるので、とてもいい気持ちで教習に向かえた。</p>
										</div>
										<div class="profile">
												<div class="image"><img src="<?php echo dir_img(); ?>/visitor/interview-7.png" alt="" class="u-img-contain"></div>
												<div class="info">
														<p>普通二輪車</p>
														<p>男 19歳</p>
												</div>
										</div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="text">
												<p class="txt">入校前は、先生怖いかなって思ったけど、話していくとすごくいい人たちで教習も楽しく出来た。受付のお姉さんたちの“頑張って”の一言がうれしかった。最後まで諦めずに出来てよかったです。ありがとうございました。</p>
										</div>
										<div class="profile">
												<div class="image"><img src="<?php echo dir_img(); ?>/visitor/interview-8.png" alt="" class="u-img-contain"></div>
												<div class="info">
														<p>普通二輪車</p>
														<p>女 23歳</p>
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
