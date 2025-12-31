<!DOCTYPE html>
<html lang="ja">

<head>
  <title>
    <?php if (is_front_page() || is_home()) {
      echo get_bloginfo('name');
    } else {
      wp_title('|', true, 'right');
      echo bloginfo('name');
    } ?>
  </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <!-- <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" /> -->

  <!-- <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="<?php echo dir_img(); ?>/ogp.png" /> -->
  <meta property="og:url" content="<?php echo home_url(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />

  <!-- <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:image" content="<?php echo dir_img(); ?>/ogp.png" /> -->

  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo home_url(); ?>" />

  <link rel="icon" type="image/vnd.microsoft.icon"
    href="<?php echo dir_img(); ?>/favicon.ico" />

  <!-- Fonts and CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <?php if(is_home() || is_front_page()): ?>
  <div id="loading">
      <img class="m" src="<?php echo dir_img(); ?>/common/loading-m-base.svg" data-src="<?php echo dir_img(); ?>/common/loading-m.svg" alt="M">
  </div>
  <?php endif; ?>

  <nav id="menu">
      <div class="sec-inner">
          <div class="sec-boxes">
              <div class="sec-box">
                  <a href="" class="sec-top h-opacity"><img src="<?php echo dir_img(); ?>/common/footer-icon-1.png" alt="" class="icon u-img-contain"><span class="txt">初めての方へ</span></a>
                  <ul class="children">
                      <li><a href="">緑ヶ丘自動車学校ってこんなところ</a></li>
                      <li><a href="">選ばれる理由</a></li>
                      <li><a href="">卒業生の声</a></li>
                      <li><a href="">割引キャンペーン</a></li>
                      <li><a href="">免許取得の流れ</a></li>
                  </ul>
              </div>
              <div class="sec-box">
                  <a href="" class="sec-top h-opacity"><img src="<?php echo dir_img(); ?>/common/footer-icon-4.png" alt="" class="icon u-img-contain"><span class="txt">教習の種類</span></a>
                  <ul class="children">
                      <li><a href="">普通自動車</a></li>
                      <li><a href="">二輪車</a></li>
                      <li><a href="">準中型</a></li>
                      <li><a href="">大型</a></li>
                      <li><a href="">中型</a></li>
                      <li><a href="">けん引</a></li>
                      <li><a href="">大特</a></li>
                      <li><a href="">二種</a></li>
                      <li><a href="">各種講習</a></li>
                  </ul>
              </div>
              <div class="sec-box">
                  <a href="" class="sec-top h-opacity"><img src="<?php echo dir_img(); ?>/common/footer-icon-3.png" alt="" class="icon u-img-contain"><span class="txt">学校案内</span></a>
                  <ul class="children">
                      <li><a href="">施設案内</a></li>
                      <li><a href="">コース案内</a></li>
                      <li><a href="">教習システム</a></li>
                  </ul>
              </div>
              <div class="sec-box">
                  <a href="" class="sec-top h-opacity"><img src="<?php echo dir_img(); ?>/common/footer-icon-2.png" alt="" class="icon u-img-contain"><span class="txt">入校案内</span></a>
                  <ul class="children">
                      <li><a href="">入校手続きについて</a></li>
                      <li><a href="">時間割</a></li>
                      <li><a href="">よくある質問</a></li>
                  </ul>
              </div>
              <div class="sec-box">
                  <a href="<?php echo get_page_url("access"); ?>" class="sec-top h-opacity"><span class="image image-1"><img src="<?php echo dir_img(); ?>/common/footer-img-1.png" alt="" class="u-img-contain"></span><span class="txt">アクセス</span></a>
                  <ul class="children">
                      <li><a href="">アクセス情報</a></li>
                      <li><a href="">無料スクールバス</a></li>
                  </ul>
              </div>
              <div class="sec-box" style="align-self: start;">
                  <a href="" class="sec-top h-opacity"><span class="image image-2"><img src="<?php echo dir_img(); ?>/common/footer-img-2.png" alt="" class="u-img-contain"></span><span class="txt">在校生の方へ</span></a>
              </div>
          </div>
          <div class="sec-bottom"></div>
      </div>
  </nav>

  <nav id="nav" class="">
      <div class="sec-inner">
          <div class="sec-box">
              <div  id="navBtn" class="sec-top" >
                  <p class="text"></p>
                  <div class="btn">
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>
              </div>
              <a href="<?php echo get_page_url("simulation"); ?>" class="sec-mid h-opacity">
                  <div class="icon"><img src="<?php echo dir_img(); ?>/common/price.svg" alt="" class="u-img-contain"></div>
                  <p class="text">料金シミュレーション</p>
              </a>
          </div>
      </div>
  </nav>

  <header id="header">
      <div class="sec-inner">
          <div class="sec-box h-opacity">
              <a href="<?php echo home_url(); ?>" class="sec-logo"><img src="<?php echo dir_img(); ?>/common/logo.png" alt="緑ヶ丘自動車学校" class="u-img-contain"></a>
              <ul class="sec-list-1">
                  <li class="js-gnav"><a href="<?php echo home_url(); ?>" class="item"><span>TOP</span></a></li>
                  <li class="js-gnav"><a href="" class="item"><span>初めての方へ</span></a>
                      <div class="children">
                          <a href="">緑ヶ丘自動車学校ってこんなところ</a>
                          <a href="">選ばれる理由</a>
                          <a href="">卒業生の声</a>
                          <a href="">割引キャンペーン</a>
                          <a href="">免許取得の流れ</a>
                      </div>
                  </li>
                  <li class="js-gnav"><a href="" class="item"><span>教習の種類</span></a>
                      <div class="children">
                          <a href="">普通自動車</a>
                          <a href="">二輪車</a>
                          <a href="">準中型</a>
                          <a href="">大型</a>
                          <a href="">中型</a>
                          <a href="">けん引</a>
                          <a href="">大特</a>
                          <a href="">二種</a>
                          <a href="">各種講習</a>
                      </div>
                  </li>
                  <li class="js-gnav"><a href="" class="item"><span>学校案内</span></a>
                      <div class="children">
                          <a href="">施設案内</a>
                          <a href="">コース案内</a>
                          <a href="">教習システム</a>
                      </div>
                  </li>
                  <li class="js-gnav"><a href="" class="item"><span>入校案内</span></a>
                      <div class="children">
                          <a href="">入校手続きについて</a>
                          <a href="">時間割</a>
                          <a href="">よくある質問</a>
                      </div>
                  </li>
                  <li class="js-gnav"><a href="<?php echo get_page_url("access"); ?>" class="item"><span>アクセス</span></a>
                      <div class="children">
                          <a href="">アクセス情報</a>
                          <a href="">無料スクールバス</a>
                      </div>
                  </li>
                  <li class="js-gnav"><a href="" class="item item-tb"><span>在校生の<br class="tb">方へ</span></a></li>
              </ul>
              <ul class="sec-list-2 pc">
                  <li><a href="" class="list-item i-1">
                      <div class="icon">
                          <img src="<?php echo dir_img(); ?>/common/phone-icon.png" alt="" class="u-img-contain">
                      </div>
                      <p class="text">電話お問い合わせ</p>
                  </a></li>
                  <li><a href="" class="list-item i-2">
                      <div class="icon">
                          <img src="<?php echo dir_img(); ?>/common/info-icon.png" alt="" class="u-img-contain">
                      </div>
                      <p class="text">資料請求</p>
                  </a></li>
                  <li><a href="" class="list-item i-3">
                      <div class="icon">
                          <img src="<?php echo dir_img(); ?>/common/bus-icon.png" alt="" class="u-img-contain">
                      </div>
                      <p class="text">入校申込</p>
                  </a></li>
              </ul>
          </div>
          
      </div>
  </header>