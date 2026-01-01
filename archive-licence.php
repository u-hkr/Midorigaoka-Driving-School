<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

	<div id="heading" class="c-section">
		<div class="sec-inner">
				<h1 class="sec-title">自動車免許</h1>
		</div>
	</div>

	<main id="main">

		<section id="flow" class="section c-section">
				<div class="sec-inner c-inner">
						<div class="sec-container">
								<div class="box-list">
										
									<?php if (have_posts()): while(have_posts()): the_post(); $the_ID = get_the_ID(); ?>
										<div id="tab-<?php echo $post->post_name; ?>" class="sec-box">

												<?php $is_business = get_field("licence_business"); $icon = get_field("licence_icon"); ?>
												<div class="box-top js-ac-btn <?php if($is_business){ echo "-green"; } ?>">
													<h2 class="txt">
														<?php if($icon): ?>
														<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
														<?php endif; ?>
														<?php the_title(); ?>に<span class="u-ib">ついて</span>
													</h2>
													<?php if($is_business): ?>
													<span class="tag"><span class="col">働く方向け免許</span></span>
													<?php endif; ?>
													<span class="plus-btn"></span>
												</div>

												<div class="box-content js-ac-content">
														<h3 class="c-title-s sec-title">
																<strong class="ja">免許取得の流れ</strong>
																<small class="en">flow</small>
														</h3>
														<?php 
														$text = get_field("flow_text");
														if($text):
														?>
														<p class="sec-text"><span class="txt"><?php echo nl2br($text); ?></span></p>
														<?php endif; ?>
														<div class="sec-list">
															<?php the_field("flow_content"); ?>
														</div>
														<a href="<?php echo get_page_url("enrollment"); ?>#tab-time" class="sec-btn"><img src="<?php echo dir_img(); ?>/common/time.svg" alt="" class="icon"><span class="txt"><span class="large">教習時間・<br class="tb">学科時間割</span>を見る</span></a>
														<div class="sec-part p-1">
																<h3 class="c-title-s title">
																		<strong class="ja">料金</strong>
																		<small class="en">Payment</small>
																</h3>
																<p class="box">当校は<span class="u-line">入校申込金、夜間・休日割り増し料金</span>は一切頂いておりません。</p>
																<p class="box">基本料金は、<span class="u-line" style="transition-delay: .8s;">入学金、技能教習費（基準時限）、学科教習費、教材費、適性検査費、検定料等</span>（修了検定料１回分、卒業検定料１回分、卒業効果測定料１回分、仮免試験料１回分）を<span class="u-line" style="transition-delay: 1.6s;">含んだ金額</span>です。なにも追加が無い場合は基本料金だけでご卒業頂けます。（追加となった技能教習費、検定料等、及び平針学科試験料は別途必要となります。）仮免学科試験の<span class="u-line" style="transition-delay: 2.4s;">2回目以降</span>は、<span class="u-line" style="transition-delay: 3.2s;">別途1,700円</span>が必要となります。<br>教習途中で退校される場合は、<span class="u-line" style="transition-delay: 4s;">未修了の技能教習費のみ返金</span>します。</p>

																<?php $pdf = get_field("licence_price"); if($pdf): ?>
																<a href="<?php echo $pdf; ?>" target="_blank" class="btn btn-1"><img src="<?php echo dir_img(); ?>/flow/payment-img.png" alt="" class="image"><span class="txt"><span class="large">料金表</span>を見る<img src="<?php echo dir_img(); ?>/common/pdf-w.svg" alt="" class="icon-pdf"></span></a>
																<p class="box">この料金表に載ってないものや、詳しく料金等お知りになりたい方は、<br>直接お電話下さいませ。(052)621-2838 までお願いします。</p>
																<?php endif; ?>

																<a href="<?php echo get_page_url("simulation"); ?>" class="btn btn-2"><span class="icon-price"></span><span class="txt"><span class="large">料金シミュレーション</span><span class="u-ib">をする</span></span></a>
														</div>
														<div class="sec-part p-2">
																<h3 class="c-title-s title">
																		<strong class="ja">オプションプラン</strong>
																		<small class="en">Plan</small>
																</h3>
																<div class="item i-1">
																		<p class="item-title">オプションパック</p>
																		<p class="item-text">基本となるのは卒業までに必要な料金を含んだ基本料金プラン。<br>さらに全車種対応のパックＳ・Ｍ・Ｌが選べます！</p>
																		<div class="table">
																				<div class="table-row">
																						<p class="left">パックＳ</p>
																						<p class="right">技能２時限分の料金を入校時にお支払い頂くことで、<br>技能教習<span class="bold"><span class="u-line">延長３時限分</span>＋効果測定・検定料金</span>追加不要になるプランです。</p>
																				</div>
																				<div class="table-row">
																						<p class="left">パックＭ</p>
																						<p class="right">技能４時限分の料金を入校時にお支払い頂くことで、<br>技能教習<span class="bold"><span class="u-line" style="transition-delay: .8s;">延長７時限分</span>＋効果測定・検定料金</span>追加不要になるプランです。</p>
																				</div>
																				<div class="table-row">
																						<p class="left">パックＬ</p>
																						<p class="right">技能６時限分の料金を入校時にお支払い頂くことで、<br>技能教習<span class="bold"><span class="u-line" style="transition-delay: 1.6s;">延長無制限</span>＋効果測定・検定料金</span>追加不要になるプランです。</p>
																				</div>
																		</div>
																		<div class="bg-g">
																				<div class="text-wrap">
																						<p class="top">さらに規定の無料延長分で足りない場合は再度追加可能！！</p>
																						<div class="list-box">
																								<div class="">パックＳ<br class="sp">・・・パックＳの追加可能。</div>
																								<div class="">パックＭ<br class="sp">・・・パックＳ・Ｍの追加可能。</div>
																								<div class="">パックＬ<br class="sp">・・・パックＳ・Ｍ・Ｌの追加可能。</div>
																						</div>
																				</div>
																		</div>
																</div>
																<div class="item i-2">
																		<p class="item-title">スケジュールプラン</p>
																		<p class="item-text">通常の技能教習予約（２週間内で配車窓口にて予約）と異なり、<br><span class="u-line">卒業までスケジュールを組むプラン</span>です。</p>
																		<p class="text-box">この場合<span class="u-line" style="transition-delay: .8s;">予め１ヶ月～２ヶ月程教習可能な日を教えて頂く必要</span>があります。<br>御予約については、まず１段階分の予定をお作りし、２段階については１段階が修了後作成することになります。尚、こちらのプランは、<span class="u-line" style="transition-delay: 1.6s;">短期で卒業ができることを確約するプランではありません。</span></p>
																		<?php 
																		$type = get_field("scheduleplan_type");
																		$price = get_field("scheduleplan_price");
																		if($price):
																		?>
																		<p class="label">スケジュールプランは<br class="sp">別途費用が必要です</p>
																		<div class="table-row">
																				<p class="left"><?php echo $type; ?></p>
																				<p class="right"><?php echo $price; ?></p>
																		</div>
																		<?php endif; ?>
																</div>
																<a href="<?php echo get_page_url("simulation"); ?>" class="btn btn-2"><span class="icon-price"></span><span class="txt"><span class="large">料金シミュレーション</span><span class="u-ib">をする</span></span></a>
																<a href="<?php echo_link("apply"); ?>" target="_blank" class="btn btn-3"><img src="<?php echo dir_img(); ?>/flow/btn-img-1.png" alt="" class="img-l"><span class="txt"><span class="large">入校申し込み</span><br class="sp">をする</span><img src="<?php echo dir_img(); ?>/flow/btn-img-2.png" alt="" class="img-r"></a>
														</div>
												</div>
										</div>
									<?php endwhile; endif; wp_reset_postdata(); ?>

								</div>
						</div>
				</div>
		</section>

	</main>

<?php get_footer();?>
