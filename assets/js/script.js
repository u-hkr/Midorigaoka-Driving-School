

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

$(function(){

});
$('.js-pagetop').on('click', function () {
  $('html, body').animate(
    { scrollTop: 0 },
    500,
    'swing'
  );
});