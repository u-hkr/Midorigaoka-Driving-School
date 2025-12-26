

// ローディング
$(window).on('load', function() {
  const $loading = $("#loading");
  const $mv = $("#mv");
  const $mv_line = $("#mv .sec-line");
  $('.js-slide-mv').slick({
    slidesToShow: 1,
    dots: false,
    arrows: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnFocus: false,
    pauseOnHover: false,
  });

  var is_firstload = sessionStorage.getItem('is-first-load');

  if (!is_firstload) {
    const $nav = $("#nav");
    const $header = $("#header");
    const $inner = $mv.find(".sec-inner");
    const $m = $loading.find(".m");

    $(window).scrollTop(0);
    sessionStorage.setItem('is-first-load', true);
    $m.attr("src", $m.data("src"));
    $mv.addClass("hide");
    $nav.hide();
    $header.hide();
    $inner.hide();
    console.log($inner);
    
    $('.js-slide-mv').slick("slickPause");

    setTimeout(function(){
      $loading.addClass("hide");
      $mv.removeClass("hide");
    },1800);
    setTimeout(function(){
      $loading.fadeOut();
      $('.js-slide-mv').slick("slickPlay");
      $mv_line.addClass("active");
    },2500);
    setTimeout(function(){
      $nav.fadeIn();
      $header.fadeIn();
      $inner.fadeIn();
    },3800);

  } else {
    $loading.hide();
    $mv_line.addClass("active");
  }

});


// common
$(function(){
  var topReturn = false;
  var $topReturn = $('#pagetop');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500 && !topReturn) {
      $topReturn.fadeIn();
      topReturn = true;
    } else if($(this).scrollTop() <= 500 && topReturn) {
      $topReturn.fadeOut();
      topReturn = false;
    }
  });

	$(".js-inview").each(function(){
	  ScrollTrigger.create({
	      trigger: $(this),
	      start: "top 70%",
	      // end: "bottom 20%",
	      toggleClass: {
	          targets: $(this),
	          className: "inview",
	      },
	      once: true,
	  });
	});

  const $navbtn = $("#navBtn");
  const $menu = $("#menu");
  const $body = $("body");
  var body_pos = 0;
  $navbtn.on("click", function(){
    if($(this).hasClass("active")){
      $(this).removeClass("active");
      $menu.fadeOut();
      $menu.removeClass("active");

      $body.css("top", "");
      $body.removeClass("fixed");
      $(window).scrollTop(body_pos);
    }else{
      $(this).addClass("active");
      $menu.fadeIn();
      $menu.addClass("active");

      body_pos = $(window).scrollTop();
      $body.css("top", -body_pos);
      $body.addClass("fixed");
    }
  });

  const $gnavitem = $(".js-gnav");
  const $children = $gnavitem.find(".children");
  $gnavitem.on("mouseenter", function(e){
    if($menu.hasClass("active")) return;
    if(!e.target.tagName.toLowerCase() === "li" || $(this).hasClass("active")) return;
    $gnavitem.removeClass("active");
    $children.hide();
    const $child = $(this).find(".children");
    $(this).addClass("active");
    $child.fadeIn();
  });
  $children.on("mouseleave", function(e){
    if(!$(e.target).hasClass("children")) return;
    $(this).fadeOut(100);
    $(this).closest("li").removeClass("active");
  });


  // ページ内リンク
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    if(position < 0) position = 0;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

// アコーディオンボタン
$(function () {
  $('.js-ac-btn').on('click', function () {
    $(this).next('.js-ac-content').slideToggle();
    $(this).toggleClass('is-open');
  });
});