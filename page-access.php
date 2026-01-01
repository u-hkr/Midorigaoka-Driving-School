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

		<section id="access" class="section c-section">
				<div class="sec-box">
						<div class="sec-container sec-border-sp">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">アクセス情報</strong>
										<small class="en">Access</small>
								</h2>
								<div class="sec-box-1 js-inview fadeup">
										<p class="title">学校近隣図</p>
										<p class="text">自動車・オートバイ等でおこしになられる方はこちらを参考に、おいでください。<br><span class="line js-line">大駐車場も完備</span>しております。</p>
										<div class="map">
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16656.299552089127!2d136.96121268950486!3d35.064868369956415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037ce4434bd22f%3A0x8725462277d74c9b!2z57eR44O25LiY6Ieq5YuV6LuK5a2m5qCh!5e0!3m2!1sja!2sjp!4v1766821719701!5m2!1sja!2sjp" width="870" height="410" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
										<p class="title-bg">公共交通機関</p>
										<p class="text-bg"><span class="txt"><span class="line js-line">JR南大高駅よりスクールバスで１分、</span> <span class="line js-line" style="transition-delay: .8s;">徒歩で１０分弱</span>です。<br>JRオレンジカード等通学補助制度があります。お気軽にどうぞ。</span></p>   
								</div>
						</div>
						<div id="schoolbus" class="sec-container">
								<h2 class="c-title-s sec-title">
										<strong class="ja">無料スクールバス</strong>
										<small class="en">School bus</small>
								</h2>
								<div class="sec-texts">
										<p class="top">送迎バス案内</p>
										<p class="text">無料スクールバスが運行しております。</p>
										<p class="bg"><span class="txt">※<span class="line js-line">日曜日は、スクールバスは運休</span>しておりますので、来校される方は、電車等をご利用下さい。</span></p>
								</div>
								<div class="sec-box-2">
										<p class="title"><span class="small">月～土曜日</span><span>無料スクールバス</span><img src="<?php echo dir_img(); ?>/access/bus.svg" alt="" class="u-img-contain"></p>
										<p class="text"><span class="line js-line">スクールバスは、予約制</span>となっております。</p>
										<p class="box"><span class="ta-l"><span class="large">予約が無い場合、スクールバスは運行しませんので、乗車（迎え、送り）する場合は、必ず予約をお願いします。</span><br>※大府線については、毎時間運行しておりますので、予約がなくても乗車することができます。ただし、予約が無い場合運転手が、乗車される方を把握できませんので、見落とされる場合があります。ですので大府線であっても予約されることをお勧めします。<br>詳しい予約方法については、入校申し込み時、窓口でご案内をさせて頂きます。</span></p>
										<p class="title-bg">各時刻表・路線MAP</p>
										<div class="list">
												<div class="item">
														<span class="route">大府線</span>
														<p class="direction">追分・<span class="u-ib">大府駅・</span><span class="u-ib">至学館大学・</span><span class="u-ib">共和駅・</span><span class="u-ib">南大高駅方面</span></p>
														<div class="files">
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/timeObe.pdf" target="_blank" class="pdf-dl"><span class="">時刻表</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/mapObu.pdf" target="_blank" class="pdf-dl"><span class="">路線MAP</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
														</div>
												</div>
												<div class="item">
														<span class="route">北崎線</span>
														<p class="direction">大府東高校・<span class="u-ib">北崎・</span><span class="u-ib">桶狭間方面</p>
														<div class="files">
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/timeKitasaki.pdf" target="_blank" class="pdf-dl"><span class="">時刻表</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/mapKitasaki.pdf" target="_blank" class="pdf-dl"><span class="">路線MAP</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
														</div>
												</div>
												<div class="item">
														<span class="route">柊山線</span>
														<p class="direction">愛三工業・<span class="u-ib">柊山・</span><span class="u-ib">大府西中・</span><span class="u-ib">田面方面</span></p>
														<div class="files">
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/timeHiiragi.pdf" target="_blank" class="pdf-dl"><span class="">時刻表</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/mapHiiragi.pdf" target="_blank" class="pdf-dl"><span class="">路線MAP</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
														</div>
												</div>
												<div class="item">
														<span class="route">豊明線</span>
														<p class="direction">桜花学園・<span class="u-ib">前後駅・</span><span class="u-ib">間米東方面</span></p>
														<div class="files">
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/timeToyoake.pdf" target="_blank" class="pdf-dl"><span class="">時刻表</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/mapToyoake.pdf" target="_blank" class="pdf-dl"><span class="">路線MAP</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
														</div>
												</div>
												<div class="item">
														<span class="route">大高線</span>
														<p class="direction">鳴海・<span class="u-ib">東海自動車学校・</span><span class="u-ib">大高駅・</span><span class="u-ib">森の里方面</span></p>
														<div class="files">
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/timeOdaka.pdf" target="_blank" class="pdf-dl"><span class="">時刻表</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
																<a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/mapOdaka.pdf" target="_blank" class="pdf-dl"><span class="">路線MAP</span><img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="u-img-contain"></a>
														</div>
												</div>
										</div>
										<p class="box"><span class="ta-l">※ボタンをクリックして頂くことにより時刻表・路線MAPを印刷できます。<br>PDF版の資料をご覧いただくには、「Acrobat Reader」が必要です。<br>お持ちでない方は　<a href="https://get.adobe.com/jp/reader/" class="link" target="_blank">こちら</a>　からダウンロードしてください。</span></p>
								</div>
								<div class="sec-box-btm js-inview fadeup">
										<div class="title"><span class="txt">LINEによるスクールバスお迎えアプリ</span><div class="icon"><img src="<?php echo dir_img(); ?>/access/smartphone.svg" alt="" class="u-img-contain"></div></div>
										<div class="content">
												<div class="text">LINEアプリでお友だち「<span class="line js-line bold"> @teamweb </span>」を検索し、お友だち追加をして下さい。<br>または、<span class="line js-line" style="transition-delay: .8s;">下記のＱＲコード</span>を、ご自身のスマートフォンのLINEアプリで読み込み、お友だち追加をして下さい。</div>
												<div class="image"><img src="<?php echo dir_img(); ?>/access/qrcode.png" alt="" class="u-img-contain"></div>
												<div class="text">その後、下記の手順で入力をしてください。</div>
												<ol class="list">
														<li class="list-item">トークラインに「登録を続けてください。」メッセージが届くので「ここをタップ！」をタップ。</li>
														<li class="list-item">「サービス名称」画面で「みどりがおか」を入力し「送信」ボタンをタップ。</li>
														<li class="list-item">「入校状況の選択」画面で「新規入校生」をタップし「送信」ボタンをタップ。</li>
														<li class="list-item">お客様情報の登録フォーム画面
																<ul class="dots">
																		<li class="dots-item">「教習生番号」項目に姓名を半角ローマ字で入力。</li>
																		<li class="dots-item">「お名前［漢字］項目に姓名を漢字で入力。</li>
																		<li class="dots-item">「お名前［かな］項目に姓名を平仮名で入力。</li>
																		<li class="dots-item">「電話番号」項目に携帯番号等を半角数字で入力。</li>
																</ul>
														</li>
														<li class="list-item">お客様情報の確認画面
																<ul class="dots">
																		<li class="dots-item">この内容でよければ「決定する」をタップ。</li>
																		<li class="dots-item">修正が必要ならば「修正する」をタップ。</li>
																</ul>
														</li>
														<li class="list-item">TEAMWebトークラインに「お迎えアプリへのリンクです」メッセージが届きますので「ここをタップ！」をタップ。</li>
														<li class="list-item">バス送迎アプリが開きます。
																<ul class="dots">
																		<li class="dots-item">「予約」をタップしバスを予約してください。</li>
																		<li class="dots-item">「確認・取消」から予約の確認と取消ができます。</li>
																</ul>
														</li>
												</ol>
												<p class="text">登録後、バスの予約をする場合、<span class="line js-line">予約は原則として予約日の前日の月曜日～金曜日の 19:30、土曜日、祝日は 16:30 迄</span><span class="u-ib">にお願いします。</span><br><br>予約受付時間を過ぎると受付できませんのでご注意下さい。<br><br><span class="line js-line" style="transition-delay: .8s;">(月曜日の予約は、前週の土曜日の 16:30 迄にお願いいたします。）</span></p>
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
