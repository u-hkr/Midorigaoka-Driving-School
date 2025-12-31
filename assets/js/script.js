

// ローディング
$(window).on('load', function() {
  const $loading = $("#loading");
  const $mv = $("#mv");
  const $mv_line = $("#mv .sec-line");
  const $mv_slide = $('.js-slide-mv');

  if($mv_slide.length){
    $mv_slide.slick({
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
  }

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
    
    if($mv_slide.length) $mv_slide.slick("slickPause");

    setTimeout(function(){
      $loading.addClass("hide");
      $mv.removeClass("hide");
    },1800);
    setTimeout(function(){
      $loading.fadeOut();
      if($mv_slide.length) $mv_slide.slick("slickPlay");
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

// simulation
$(function(){
  const $options = $(".js-simulation-option");
  if(!$options.length) return;

  const $option_result = $("#result-option");
  const $licence1 = $("#licence-1");
  const $licence1_result = $("#result-licence-1");
  const $price_result = $("#result-price");
  const $price_result_sp = $("#sp-price");
  var price_result_sp = false;
  var option_price = 0;
  var licence1_price = 0;

  check_licence1();
  $options.click(function(){ check_options(); });
  $licence1.change(function(){ check_licence1(); });

  $(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() < $price_result.offset().top) {
      if(!price_result_sp){
        $price_result_sp.fadeIn();
        price_result_sp = true;
      }
    } else {
      if(price_result_sp){
        $price_result_sp.fadeOut();
        price_result_sp = false;
      }
    }
  });

  function check_licence1(){
    var val = $licence1.val();
    if(!val){
      licence1_price = 0;
      $licence1_result.html(val);
    }else{
      var $option = $licence1.find("option[value='"+val+"']");
      licence1_price = $option.data("price");
      var price_text = String(licence1_price).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
      $licence1_result.html('<div class="left"><p class="small">免許種類</p><p class="text">'+val+'</p></div><p class="price">￥'+price_text+'</p>');
    }
    set_price();
  }
  function check_options(){
    var html = "";
    var price_total = 0;
    var price_text = "";
    $options.each(function(){
      if($(this).prop('checked')){
        var val = $(this).val();
        var price = $(this).closest(".js-data").data("price");
        price_total += price;
        price_text = String(price).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
        html += '<div class="item"><div class="left"><p class="text">'+val+'</p></div><p class="price">+￥'+price_text+'</p></div>';
      }
    });
    $option_result.html(html);
    option_price = price_total;
    set_price();
  }
  function set_price(){
    var price = option_price + licence1_price;
    var price_text = String(price).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    $(".js-simulation-price").text("￥"+price_text);
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

	$(".js-inview, .js-line").each(function(){
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


  // reason
  var road_index = 1;
  $(".js-road").each(function(){
    $(this).children("path").addClass("road-path-"+road_index);
    $(this).children("mask").attr("id", "road-mask-"+road_index);
    $(this).append('<defs><style>.road-path-'+road_index+'{mask: url(#road-mask-'+road_index+');}</style></defs>');
    road_index++;
  });

  // youtube
  const $modal = $("#youtube");
  if($modal.length){
    $(".js-youtube").click(function(){
      var data = $(this).data("youtube");
      var text = $(this).text();
      if(!data) return;
      data = data.substr(data.indexOf('youtu.be') + 9);
      var html = '<iframe width="800" height="450" src="https://www.youtube.com/embed/'+data+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      $modal.find(".youtube").html(html);
      $modal.find(".text").text(text);
      $modal.fadeIn();
    });
    $modal.click(function(e){
      if(!$(e.target).closest(".inner").length){
        $modal.fadeOut();
      }
    });
    // $modal.find(".close").click(function(){
    //   $modal.fadeOut();
    // });
  }



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
    $(this).toggleClass('active');
  });
});