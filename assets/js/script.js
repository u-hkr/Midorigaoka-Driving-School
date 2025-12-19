

// ローディング
$(window).on('load', function() {
  var $loading = $("#loading");
  const is_firstload = sessionStorage.getItem('is-first-load');
  if (!is_firstload) {
    sessionStorage.setItem('is-first-load', true);
    setTimeout(function(){
      $loading.fadeOut();
    },3000);
  } else {
    $loading.hide();
  }
  $("#mv .sec-line object").attr("data", "./assets/img/index/mv-line.svg");

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
	      end: "bottom 50%",
	      toggleClass: {
	          targets: $(this),
	          className: "inview",
	      },
	      once: true,
	  });
	});

  const $navbtn = $("#navBtn");
  const $menu = $("#menu")
  $navbtn.on("click", function(){
    if($(this).hasClass("active")){
      $(this).removeClass("active");
      $menu.fadeOut();
    }else{
      $(this).addClass("active");
      $menu.fadeIn();
    }
  });
});
