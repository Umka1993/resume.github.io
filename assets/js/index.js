// Скрипт slick (слайдер)
$(".slider-block").slick({
  dots: true,
	autoplay: false,
	infinite : false,
	arrows   : false,
	slidesToShow : 3,
	slidesToScroll : 3,
	responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        vertical: true,
        verticalSwiping: true,
        slidesToScroll: 3
      }
    }]
});