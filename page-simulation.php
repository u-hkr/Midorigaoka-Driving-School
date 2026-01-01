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
				<span class="icon"></span>
		</div>
	</div>

	<main id="main">

		<section id="access" class="section c-section js-inview fadeup">
				<div class="sec-box c-inner">
						<div class="sec-inner">
								<div class="sec-box-select">
										<label for="area" class="title">取得したい免許を選択</label>
										<div class="box">
												<div class="select-wrap">
														<select id="licence-1" name="取得したい免許" class="select">
																<option value="普通自動車免許（AT）" data-price="280000" selected>普通自動車免許（AT）</option>
																<option value="普通自動車免許（MT）" data-price="300000">普通自動車免許（MT）</option>
														</select>
												</div>
										</div>
										<label for="area" class="title">現在所持している免許を選択</label>
										<div class="box">
												<div class="select-wrap">
														<select id="licence-2" name="現在所持している免許" class="select">
														<option value="免許なし・小型特殊免許">免許なし・小型特殊免許</option>
														</select>
												</div>
										</div>
										<p class="title">オプションパックの選択</p>
										<div class="box">
												<div class="item js-data" data-price="3000">
														<div class="top">
																<label class="check"><input type="checkbox" class="js-simulation-option" name="option" value="パックＳ">パックＳ</label>
																<span class="border">+技能２時限分の料金</span>
														</div>
														<p class="text">技能２時限分の料金を入校時にお支払い頂くことで、<br>技能教習<span class="bold"><span class="col">延長３時限分</span>＋効果測定・検定料金</span>追加不要になるプランです。</p>
												</div>
												<div class="item js-data" data-price="3000">
														<div class="top">
																<label class="check"><input type="checkbox" class="js-simulation-option" name="option" value="パックＭ">パックＭ</label>
																<span class="border">+技能４時限分の料金</span>
														</div>
														<p class="text">技能４時限分の料金を入校時にお支払い頂くことで、<br>技能教習<span class="bold"><span class="col">延長７時限分</span>＋効果測定・検定料金</span>追加不要になるプランです。</p>
												</div>
												<div class="item js-data" data-price="3000">
														<div class="top">
																<label class="check"><input type="checkbox" class="js-simulation-option" name="option" value="パックＬ">パックＬ</label>
																<span class="border">+技能６時限分の料金</span>
														</div>
														<p class="text">技能６時限分の料金を入校時にお支払い頂くことで、<br>技能教習<span class="bold"><span class="col">延長無制限</span>＋効果測定・検定料金</span>追加不要になるプランです。</p>
												</div>
										</div>
								</div>
								<div class="sec-box-result">
										<div class="top">
												<span class="icon"></span>
												<p class="title">シミュレーション結果</p>
										</div>
										<div class="box">
												<p class="bg bg-p">プラン料金</p>
												<div id="result-licence-1" class="item">
														<div class="left">
																<p class="text"></p>
														</div>
														<p class="price">￥0</p>
												</div>
												<p class="bg bg-p">オプション料金</p>
												<div id="result-option">
														<div class="item">
																<div class="left">
																		<p class="text"></p>
																</div>
																<p class="price">￥0</p>
														</div>
												</div>
										</div>
										<div id="result-price" class="box">
												<p class="bg bg-y">合計金額（税込）</p>
												<p class="result js-simulation-price"></p>
										</div>
										<a href="" class="btn">
												<img src="<?php echo dir_img(); ?>/common/bus-icon.png" alt="" class="u-img-contain">
												<span>入校申込</span>
										</a>
								</div>
						</div>
				</div>
				<div class="js-inview fadeup">
						<a href="<?php echo home_url("licence/"); ?>" class="sec-btn"><img src="<?php echo dir_img(); ?>/common/plan.svg" alt="" class="icon"><span class="txt"><span class="large">自動車免許や<br class="tb">プラン</span>について見る</span></a>
				</div>
		</section>

	</main>


	<?php
		endwhile;
	endif;
	?>
<?php get_footer();?>
