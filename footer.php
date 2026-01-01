<?php
/**
 * The template for displaying the footer.
 */
?>
<?php wp_reset_postdata(); ?>

<footer id="footer" class="c-section">
      <div class="sec-inner">
          <div class="sec-bg"></div>
          <div class="sec-box-top">
              <div class="box-image">
                  <div class="image">
                      <img src="<?php echo dir_img(); ?>/index/bg-img-3.png" alt="" class="u-img-cover">
                  </div>
                  <div class="image">
                      <img src="<?php echo dir_img(); ?>/index/bg-img-4.png" alt="" class="u-img-cover">
                  </div>
              </div>
              <div class="box-list">
                  <a href="<?php echo_link("tel"); ?>" target="_blank" class="box-item js-inview fadeup">
                      <div class="icon-l">
                          <img src="<?php echo dir_img(); ?>/common/phone-icon.png" alt="" class="u-img-contain">
                      </div>
                      <span class="text">電話でお問い合わせはこちら</span>
                      <div class="icon-r">
                          <img src="<?php echo dir_img(); ?>/common/link.svg" alt="" class="u-img-contain">
                      </div>
                  </a>
                  <a href="<?php echo_link("information"); ?>" target="_blank" class="box-item js-inview fadeup">
                      <div class="icon-l">
                          <img src="<?php echo dir_img(); ?>/common/info-icon.png" alt="" class="u-img-contain">
                      </div>
                      <span class="text">資料請求はこちら</span>
                      <div class="icon-r">
                          <img src="<?php echo dir_img(); ?>/common/link-w.svg" alt="" class="u-img-contain">
                      </div>
                  </a>
                  <a href="<?php echo_link("apply"); ?>" target="_blank" class="box-item js-inview fadeup">
                      <div class="icon-l">
                          <img src="<?php echo dir_img(); ?>/common/bus-icon.png" alt="" class="u-img-contain">
                      </div>
                      <span class="text">入校申込はこちら</span>
                      <div class="icon-r">
                          <img src="<?php echo dir_img(); ?>/common/link.svg" alt="" class="u-img-contain">
                      </div>
                  </a>
              </div>
          </div>
          <div class="sec-box-mid c-inner">
              <div class="box-left"><img src="<?php echo dir_img(); ?>/common/logo.png" alt="緑ヶ丘自動車学校" class="u-img-contain"></div>
              <div class="box-right pc">
                  <div class="column">
                      <div class="list">
                        <?php $link = get_page_url("visitor"); ?>
                          <a href="<?php echo $link; ?>" class="top"><img src="<?php echo dir_img(); ?>/common/footer-icon-1.png" alt="" class="icon u-img-contain"><span class="text">初めての方へ</span><span class="arrow"></span><span class="bg"></span></a>
                        <?php if($link): ?>
                          <a href="<?php echo $link; ?>#about" class="item">緑ヶ丘自動車学校ってこんなところ</a>
                          <a href="<?php echo $link; ?>#reason" class="item">選ばれる理由</a>
                          <a href="<?php echo $link; ?>#interview" class="item">卒業生の声</a>
                        <?php endif; ?>
                          <a href="<?php echo get_page_url("campaign"); ?>" class="item">割引キャンペーン</a>
                          <a href="<?php echo home_url("licence/"); ?>" class="item">免許取得の流れ</a>
                      </div>
                      <div class="list">
                        <?php $link = get_page_url("enrollment"); ?>
                          <a href="<?php echo $link; ?>" class="top"><img src="<?php echo dir_img(); ?>/common/footer-icon-2.png" alt="" class="icon u-img-contain"><span class="text">入校案内</span><span class="arrow"></span><span class="bg"></span></a>
                        <?php if($link): ?>
                          <a href="<?php echo $link; ?>#procedure" class="item">入校手続きについて</a>
                          <a href="<?php echo $link; ?>#tab-time" class="item">時間割</a>
                          <a href="<?php echo $link; ?>#faq" class="item">よくある質問</a>
                        <?php endif; ?>
                      </div>
                  </div>
                  <div class="column">
                      <div class="list">
                        <?php $link = get_page_url("school"); ?>
                          <a href="<?php echo $link; ?>" class="top"><img src="<?php echo dir_img(); ?>/common/footer-icon-3.png" alt="" class="icon u-img-contain"><span class="text">学校案内</span><span class="arrow"></span><span class="bg"></span></a>
                          <?php if($link): ?>
                          <a href="<?php echo $link; ?>#facilities" class="item">施設案内</a>
                          <a href="<?php echo $link; ?>#course" class="item">コース案内</a>
                          <a href="<?php echo $link; ?>#system" class="item">教習システム</a>
                          <div class="item item-e"></div>
                          <div class="item item-e"></div>
                          <?php endif; ?>
                      </div>
                      <div class="list">
                        <?php $link = get_page_url("access"); ?>
                          <a href="<?php echo $link; ?>" class="top top-i"><span class="image"><img src="<?php echo dir_img(); ?>/common/footer-img-1.png" alt="" class="u-img-contain"></span><span class="text">アクセス</span><span class="arrow"></span><span class="bg"></span></a>
                        <?php if($link): ?>
                          <a href="<?php echo $link; ?>#access" class="item">アクセス情報</a>
                          <a href="<?php echo $link; ?>#schoolbus" class="item">無料スクールバス</a>
                        <?php endif; ?>
                      </div>
                  </div>
                  <div class="column">
                      <div class="list">
                          <a href="<?php echo get_page_url("types"); ?>" class="top"><img src="<?php echo dir_img(); ?>/common/footer-icon-4.png" alt="" class="icon u-img-contain"><span class="text">教習の種類</span><span class="arrow"></span><span class="bg"></span></a>
                          <a href="<?php echo home_url("licence/#tab-standard"); ?>" class="item">普通自動車</a>
                          <a href="<?php echo home_url("licence/#tab-motorcycle"); ?>" class="item">二輪車</a>
                          <a href="<?php echo home_url("licence/#tab-semi-mid"); ?>" class="item">準中型</a>
                          <a href="<?php echo home_url("licence/#tab-large"); ?>" class="item">大型</a>
                          <a href="<?php echo home_url("licence/#tab-mid"); ?>" class="item">中型</a>
                          <a href="<?php echo home_url("licence/#tab-towing"); ?>" class="item">けん引</a>
                          <a href="<?php echo home_url("licence/#tab-special-large"); ?>" class="item">大特</a>
                          <a href="<?php echo home_url("licence/#tab-second"); ?>" class="item">二種</a>
                          <a href="<?php echo get_page_url("class"); ?>" class="item">各種講習</a>
                      </div>
                      <button type="button" class="top top-l js-students">
                          <div class="container">
                              <span class="image"><img src="<?php echo dir_img(); ?>/common/footer-img-2.png" alt="" class="u-img-contain"></span><span class="text">在校生の方へ</span>
                          </div>
                          <span class="arrow"></span><span class="bg"></span>
                      </button>
                  </div>
              </div>
          </div>
          <div class="sec-box-btm">
              <div class="box c-inner">
                  <a href="" class="link">プライバシーポリシー</a>
                  <small class="copyright">Copyright © Midorigaoka Driving School All Rights Reserved.</small>            
              </div>
          </div>
          <a id="pagetop" href="#" class="pagetop" aria-label="ページの先頭へ戻る">PAGE TOP</a>
      </div>
  </footer>

<?php wp_footer(); ?>

</body>

</html>