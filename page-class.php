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

		<section id="class" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-container">
								<div class="sec-box js-inview fadeup">
										<p class="box-title">高齢者講習</p>
										<div class="box-text">年齢が70歳以上の方は、免許の更新をされる場合に指定講習機関（指定された自動車学校）において講習を受けなければなりません。講習内容は、簡単な実技、適性検査などがあります。<br>（試験・テスト等は一切ありません。お気軽におこしください。）</div>
										<p class="box-title">取得時講習</p>
										<div class="box-text">運転免許試験場において、免許試験に合格した場合に、免許交付前に指定講習機関（指定された自動車学校）において講習を受けなければなりません。講習内容は、運転実技、学科講習、応急救護処置講習などです。</div>
										<p class="box-title">初心運転者講習</p>
										<div class="box-text">運転免許（普通免許・準中型免許・大型二輪免許・普通二輪免許・原付免許）取得後、軽微な違反によって一定の減点数に達したときは指定講習機関（指定された自動車学校）において講習を受けなければなりません。講習内容は運転実技、安全知識講習などです。</div>
										<p class="box-title">個人・企業向け安全講習</p>
										<div class="box-text">地域の企業や、個人のみなさまに各種安全講習や、ペーパードライバー向けの再教育等を行っております。お気軽にお申し込みください。</div>
										<p class="box-title">ライディングスクール</p>
										<div class="box-text">当校では緑警察署などと合同で、年に数回二輪車のライディングスクールを開催しております。数多くの二輪車卒業生を輩出してきた当校ならではの内容で、卒業後のフォローもバッチリです。また、当校卒以外の方でも遠慮なく参加してください。</div>
								</div>
								<div class="sec-btns h-opacity js-inview fadeup">
										<a href="<?php echo_link("tel"); ?>" target="_blank" class="btn -green">
												<div class="icon"><img src="<?php echo dir_img(); ?>/common/phone-icon.png" alt="" class="u-img-contain"></div>
												<span class="txt">電話でお問い合わせはこちら</span>
												<div class="icon"><img src="<?php echo dir_img(); ?>/common/link.svg" alt="" class="u-img-contain"></div>
										</a>
										<a href="<?php echo_link("apply"); ?>" target="_blank" class="btn -yellow">
												<div class="icon"><img src="<?php echo dir_img(); ?>/common/bus-icon.png" alt="" class="u-img-contain"></div>
												<span class="txt">入校申込はこちら</span>
												<div class="icon"><img src="<?php echo dir_img(); ?>/common/link.svg" alt="" class="u-img-contain"></div>
										</a>
								</div>
								<div class="sec-box js-inview fadeup">
										<p class="box-title">指導員(インストラクター)<span class="u-ib">になるには</span></p>
										<div class="box-text">指導員になるためには、自動車学校に入社し、一定の教養を受け、都道府県公安委員会が行う審査（指導員審査）に合格しなければなりません。</div>
										<div class="box-table">
												<div class="table-row">
														<div class="table-left"><span class="txt">資格要件</span></div>
														<div class="table-right">
																<ol class="list">
																		<li class="item">21歳以上であること。</li>
																		<li class="item">その他、一定の条件を、満たしている者</li>
																</ol>
														</div>
												</div>
												<div class="table-row">
														<div class="table-left"><span class="txt">審査内容</span></div>
														<div class="table-right">
																<ol class="list">
																		<li class="item">指導員として必要な自動車の運転技能</li>
																		<li class="item">技能の教習方法</li>
																		<li class="item">学科の教習方法</li>
																		<li class="item">教則の内容となっている事項、その他自動車の運転に関する知識</li>
																		<li class="item">自動車学校に関する法令についての知識</li>
																		<li class="item">指導員として必要な教育についての知識</li>
																</ol>
														</div>
												</div>
										</div>
										<div class="box-text-bg">上記の審査の合格基準は、かなり厳しく問題によっては80～95％の正解率が必要です。 当校は、徹底した指導員養成教育により県下随一の合格率を誇ります。</div>
										<div class="box-text">自動車学校への就職を伴わず、資格だけを取得することも可能です。ご興味がありましたら、お気軽にお問い合わせください。</div>
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
