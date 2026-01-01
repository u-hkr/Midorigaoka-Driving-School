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
				<div class="icon"><img src="<?php echo dir_img(); ?>/campaign/top-icon.png" alt="" class="u-img-contain"></div>
				<h1 class="sec-title"><?php the_title(); ?></h1>
		</div>
	</div>

	<main id="main">

		<section id="campaign" class="section c-section">
				<div class="sec-top  js-inview fadeup"><span class="txt">※クレジットカードをご利用の場合、すべての割引制度は適応されません。</span></div>
				<div class="sec-inner">
						<div class="sec-container sec-border-sp">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">インターネット割引</strong>
										<small class="en">Internet</small>
								</h2>
								<div class="sec-text  js-inview fadeup"><span class="txt">インターネットよりお申し込みいただくと、教習費より割引いたします。</span></div>
								<div class="sec-box js-inview fadeup">
										<div class="table">
												<div class="table-row">
														<p class="left">
																<span class="txt">普通一種、<br>準中型車（普通免許所持の方除く）、<span class="u-ib">大型一種</span></span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">10,000</span>円割引<br><span class="parentheses">(ただし、仮免許所持の方は<br class="tc">5,000円割引とさせていただきます。)</span></span>
														</p>
												</div>
												<div class="table-row">
														<p class="left">
																<span class="txt">自動二輪車、<span class="u-ib">けん引、</span><span class="u-ib">大特、</span><span class="u-ib">中型一種、</span><span class="u-ib">準中型（普通免許所持）</span></span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">5,000</span>円割引</span>                                
														</p>
												</div>
										</div> 
										<div class="box"><span class="txt">※限定解除は除きます。<br>※他の割引と併用はできません。（キャンペーン時は併用できる場合もございますので、<br>キャンペーンの欄をご覧ください。）</span></div>
								</div>
						</div>
						<div class="sec-container sec-border-sp">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">紹介割引</strong>
										<small class="en">Introduction</small>
								</h2>
								<div class="sec-box js-inview fadeup">
										<p class="box-title">教習生をご紹介いただいた方</p>
										<p class="box-text">一名ご紹介につき、クオカードをプレゼントいたします。</p>
										<div class="table">
												<div class="table-row">
														<p class="left">
																<span class="txt">普通車若しくは準中型（普通免許所持除く）</span></span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">5,000</span>円のクオカード</span>
														</p>
												</div>
												<div class="table-row">
														<p class="left">
																<span class="txt">その他の車種</span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">3,000</span>円のクオカード</span>                                
														</p>
												</div>
										</div> 
								</div>
								<div class="sec-box js-inview fadeup">
										<p class="box-title">ご入校される方</p>
										<p class="box-text">ご入校される方にも、割引がございます。</p>
										<div class="table">
												<div class="table-row">
														<p class="left">
																<span class="txt">普通車若しくは準中型（普通免許所持除く）</span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">5,000</span>円割引</span>
														</p>
												</div>
												<div class="table-row">
														<p class="left">
																<span class="txt">その他の車種</span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">3,000</span>円割引</span>                                
														</p>
												</div>
										</div> 
										<div class="box"><span class="txt">※学生割引も併用できます。<br>他の割引（学割除く）と併用はできません。</span></div>
								</div>
						</div>
						<div class="sec-container sec-border-sp">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">卒業生割引</strong>
										<small class="en">Alumni</small>
								</h2>
								<div class="sec-text  js-inview fadeup"><span class="txt">当校もしくは姉妹校の東海自動車学校を5年以内に卒業された方は、教習費より割引いたします。</span></div>
								<div class="sec-box js-inview fadeup">
										<div class="table">
												<div class="table-row">
														<p class="left">
																<span class="txt">全車種</span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">10,000</span>円割引</span>
														</p>
												</div>
										</div> 
										<div class="box"><span class="txt">※他の割引と併用はできません。</span></div>
								</div>
						</div>
						<div class="sec-container sec-border-sp">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">同時申し込み割引</strong>
										<small class="en">Simultaneous application</small>
								</h2>
								<div class="sec-text  js-inview fadeup"><span class="txt">2車種以上同時にお申し込みの場合、教習費より割引いたします。</span></div>
								<div class="sec-box js-inview fadeup">
										<div class="table">
												<div class="table-row">
														<p class="left">
																<span class="txt">当校卒業生</span>
														</p>
														<p class="right">
																<span class="txt">1車種目より<span class="large">20,000</span>円<span class="u-ib">割引</span><br><span class="parentheses">（限定解除は10,000円割引）</span></span>
														</p>
												</div>
												<div class="table-row">
														<p class="left">
																<span class="txt lh">当校在校生<br><span class="parentheses">※在校中に次の免許のお申し込み</span></span>
														</p>
														<p class="right">
																<span class="txt">次の車種より<span class="large">20,000</span>円<span class="u-ib">割引</span><br><span class="parentheses">（限定解除は10,000円割引）</span></span>
														</p>
												</div>
												<div class="table-row">
														<p class="left">
																<span class="txt">他校卒業生</span>
														</p>
														<p class="right">
																<span class="txt">2車種目より<span class="large">20,000</span>円<span class="u-ib">割引</span><br><span class="parentheses">（限定解除除く）</span></span>
														</p>
												</div>
										</div> 
										<div class="box"><span class="txt">※他の割引と併用はできません。</span></div>
								</div>
						</div>
						<div class="sec-container sec-border-sp">
								<h2 class="c-title-s sec-title js-inview fadeup">
										<strong class="ja">学生割引</strong>
										<small class="en">Student</small>
								</h2>
								<div class="sec-box js-inview fadeup">
										<div class="table">
												<div class="table-row">
														<p class="left">
																<span class="txt">普通車</span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">5,000</span>円割引<br><span class="parentheses">（限定解除除く）</span></span>
														</p>
												</div>
												<div class="table-row">
														<p class="left">
																<span class="txt lh">その他の車種</span>
														</p>
														<p class="right">
																<span class="txt"><span class="large">3,000</span>円割引<br><span class="parentheses">（限定解除除く）</span></span>
														</p>
												</div>
										</div> 
										<div class="box"><span class="txt">また、ご紹介で入校の方には、上記紹介割引も併用できます。<br>※学生証をお持ちください。<br>※他の割引（紹介割引除く）と併用はできません。</span></div>
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
