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
				<h1 class="sec-title"><?php the_title(); ?></h1>
		</div>
	</div>

	<main id="main">

		<section id="enrollment" class="section c-section">
				<div class="sec-inner c-inner">
							<a href="<?php echo get_page_url("movie"); ?>" class="sec-banner h-opacity">
								<img src="<?php echo dir_img(); ?>/enrollment/banner-img.png" alt="動画でわかる緑ヶ丘自動車学校" class="u-img-contain">
						</a>
						<div id="procedure" class="sec-container">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">入校手続きについて</strong>
										<small class="en">Procedure</small>
								</h2>
								<div class="box-list">
										<div class="sec-box">
												<div class="box-top js-ac-btn"><span class="txt">入校資格<img src="<?php echo dir_img(); ?>/enrollment/procedure-img-1.png" alt="" ></span><span class="plus-btn"></span></div>
												<div class="box-content js-ac-content">
														<div class="bg-white">
																<div class="sec-text">免許年齢（普通車は免許年齢に達する１ヶ月前、その他の車種は半月前から入校できます。）</div>
																<div class="sec-item">
																		<div class="table-header">各種免許年齢</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>普通車・準中型車・<span class="u-ib">けん引車・</span><br> 大特車・<span class="u-ib">大型二輪車</span></span>
																				</div>
																				<div class="table-right">
																						<span><span class="large">18</span>歳以上</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>中型自動車</span>
																				</div>
																				<div class="table-right">
																						<span><span class="large">20</span>歳以上で<br>普通免許取得後<br class="tb"><span class="large">2</span>年以上</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>大型自動車</span>
																				</div>
																				<div class="table-right">
																						<span><span class="large">21</span>歳以上で<br>普通免許取得後<br class="tb"><span class="large">3</span>年以上</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left"><span>普通二輪車</span></div>
																				<div class="table-right">
																						<span><span class="large">16</span>歳以上</span>
																				</div>
																		</div>
																</div>
																<div class="sec-item">
																		<div class="table-header">視力</div>
																		<div class="table-text">
																				<span class="large">視力</span>が<span class="large">両眼</span>で<span class="large">0.7</span>以上、<br class="sp"><span class="large">片眼0.3</span>以上
																		</div>
																		<p class="text">ただし、大型自動車・中型自動車・準中型自動車・けん引車は下記条件が必要。</p>
																		<div class="table-box">
																				<p class="top"><span class="col">大型自動車・中型自動車・<br class="tb">準中型自動車・けん引車</span></p>
																				<div class="txt"><span class="large">両眼</span>で<span class="large">0.8</span>以上、<span class="large">片眼0.5</span>以上で<span class="u-ib"><span class="large">深視力</span>が必要</span></div>
																		</div>
																</div>
																<div class="sec-item">
																		<div class="table-header">その他</div>
																		<div class="table-text">
																				<span class="large">信号機</span>の<span class="large">色</span>が<span class="large">認識</span>できること
																		</div>
																		<p class="table-note">※身体に障害をお持ちの方は、事前にご相談下さい。</p>
																</div>

														</div>
												</div>      
										</div>
										<div class="sec-box">
												<div class="box-top js-ac-btn"><span class="txt">入校時に必要なもの<img src="<?php echo dir_img(); ?>/enrollment/procedure-img-2.png" alt="" ></span><span class="plus-btn"></span></div>
												<div class="box-content js-ac-content">
														<div class="bg-white">
																<div class="sec-points">
																		<p class="item">本籍地の記載されている<span class="line">住民票1通(マイナンバーの付いてないもの）</span>と、その他に身分を証明できるものとして<span class="line" style="transition-delay: 1.3s;">健康保険証、パスポート等</span>をお持ち下さい。（すでに免許証をお持ちの方はその免許証のみでOKです!</p>
																		<p class="item">免許申請等に使用する<span class="line" style="transition-delay: 2.1s;">免許用写真5枚（二輪車は3枚）</span><br>（当校で受付時にお撮りすることができます。）</p>
																		<p class="item"><span class="line" style="transition-delay: 2.9s;">運転に適した服装</span>（動き易い服、運動靴。二輪車に入校の方は、長袖・長ズボン・ヘルメット・グローブ・ブーツ等をご用意下さい。）</p>
																		<p class="item">眼鏡等をご利用の方は<span class="line" style="transition-delay: 3.7s;">眼鏡、コンタクト。</span></p>
																</div>
																<div class="sec-image">
																		<img src="<?php echo dir_img(); ?>/enrollment/procedure-box-1.png" alt="" class="u-img-contain">
																</div>
														</div>
												</div>      
										</div>
										<div class="sec-box">
												<div class="box-top js-ac-btn"><span class="txt">入校受付<img src="<?php echo dir_img(); ?>/enrollment/procedure-img-3.png" alt="" ></span><span class="plus-btn"></span></div>
												<div class="box-content js-ac-content">
														<div class="bg-white">
																<div class="sec-points ">
																		<p class="item"><span class="line">朝9時30分から夜7時30分まで</span> <span class="line" style="transition-delay: 1.3s;">（土、日、祝は4時00分まで）</span>に、 ご来校下さい。</p>
																		<p class="item item-mt0">ホームページからの仮予約は24時間OKです。<br>　<a href="" class="underline">>>ホームページからの受付はこちら</a><br>TEL (052)621-2838</p>
																</div>
																<div class="sec-image">
																		<img src="<?php echo dir_img(); ?>/enrollment/procedure-box-2.png" alt="" class="u-img-contain">
																</div>
														</div>
												</div>      
										</div>
										<div class="sec-box">
												<div class="box-top js-ac-btn"><span class="txt">入校日<img src="<?php echo dir_img(); ?>/enrollment/procedure-img-4.png" alt="" ></span><span class="plus-btn"></span></div>
												<div class="box-content js-ac-content">
														<div class="sec-item sec-item-2">
																<div class="top-text">毎週</div>
																<div class="table-row">
																		<div class="table-left">
																				<span>火曜日</span>
																		</div>
																		<div class="table-right">
																				<span>午前 10時30分～</span>
																		</div>
																</div>
																<div class="table-row">
																		<div class="table-left">
																				<span>水曜日</span>
																		</div>
																		<div class="table-right">
																				<span>午後 6時30分～</span>
																		</div>
																</div>
																<div class="table-row">
																		<div class="table-left">
																				<span>土曜日</span>
																		</div>
																		<div class="table-right">
																				<span>午後 2時20分～</span>
																		</div>
																</div>
														</div>
												</div>      
										</div>
								</div>
						</div>
						<div class="sec-container">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">時間割</strong>
										<small class="en">Time</small>
								</h2>
								<div class="box-list">
										<div id="tab-time" class="sec-box">
												<div class="box-top box-top-green js-ac-btn"><span class="txt">教習時間割<img src="<?php echo dir_img(); ?>/enrollment/time-img-1.png" alt=""></span><span class="plus-btn"></span></div>
												<div class="box-content js-ac-content">
														<div class="sec-item sec-item-3">
																<p class="part">昼間部</p>
																<div class="table">
																		<div class="table-row">
																				<div class="table-left">
																						<span>1時限</span>
																				</div>
																				<div class="table-right">
																						<span>9 : 40  ～ 10 : 30</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>2時限</span>
																				</div>
																				<div class="table-right">
																						<span>10 : 40  ～ 11 : 30</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>3時限</span>
																				</div>
																				<div class="table-right">
																						<span>11 : 40  ～ 12 : 30</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>4時限</span>
																				</div>
																				<div class="table-right">
																						<span>12 : 40  ～ 13 : 30</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>5時限</span>
																				</div>
																				<div class="table-right">
																						<span>14 : 30  ～ 15 : 20</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>6時限</span>
																				</div>
																				<div class="table-right">
																						<span>15 : 30  ～ 16 : 20</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>7時限</span>
																				</div>
																				<div class="table-right">
																						<span>16 : 30  ～ 17 : 20</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>8時限</span>
																				</div>
																				<div class="table-right">
																						<span>17 : 40  ～ 18 : 30</span>
																				</div>
																		</div>
																</div>
														</div>
														<div class="sec-item sec-item-3 col-y">
																<p class="part">夜間部</p>
																<div class="table">
																		<div class="table-row">
																				<div class="table-left">
																						<span>9時限</span>
																				</div>
																				<div class="table-right">
																						<span>18 : 40  ～ 19 : 30</span>
																				</div>
																		</div>
																		<div class="table-row">
																				<div class="table-left">
																						<span>10時限</span>
																				</div>
																				<div class="table-right">
																						<span>19 : 40  ～ 20 : 30</span>
																				</div>
																		</div>
																</div>
														</div>
												</div>
										</div>
										<div class="sec-box">
												<div class="box-top box-top-green js-ac-btn"><span class="txt">学科時間割<img src="<?php echo dir_img(); ?>/enrollment/time-img-2.png" alt=""></span><span class="plus-btn"></span></div>
												<div class="box-content js-ac-content">
														<p class="sec-text sec-text-2">下記PDFからご確認ください。</p>
														<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/gakkaR031101.pdf" class="sec-btn"><img src="<?php echo dir_img(); ?>/common/time.svg" alt="" class="icon"><span class="txt"><span class="large">学科時間割</span>を見る</span></a>
												</div>      
										</div>
								</div>
						</div>
				</div>
		</section>
		<section id="faq" class="section c-section">
				<div class="sec-inner c-inner">
						<h2 class="c-title white sec-title js-inview">
								<small class="en">FAQ</small>
								<strong class="ja">よくある質問</strong>
						</h2>
						<div class="sec-box">
								<div class="box-item js-inview fadeup">
										<div class="question js-ac-btn"><span class="txt">質問はいります。質問はいります。質問はいります。質問はいります。</span><span class="plus-btn"></span></div>
										<div class="answer js-ac-content"><span class="txt">回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。<br>回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。</span></div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="question js-ac-btn"><span class="txt">質問はいります。質問はいります。質問はいります。質問はいります。</span><span class="plus-btn"></span></div>
										<div class="answer js-ac-content"><span class="txt">回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。<br>回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。</span></div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="question js-ac-btn"><span class="txt">質問はいります。質問はいります。質問はいります。質問はいります。</span><span class="plus-btn"></span></div>
										<div class="answer js-ac-content"><span class="txt">回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。<br>回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。</span></div>
								</div>
								<div class="box-item js-inview fadeup">
										<div class="question js-ac-btn"><span class="txt">質問はいります。質問はいります。質問はいります。質問はいります。</span><span class="plus-btn"></span></div>
										<div class="answer js-ac-content"><span class="txt">回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。<br>回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。回答入ります。</span></div>
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
