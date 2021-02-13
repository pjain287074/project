$(document).ready(function(){
  $('.carousel-container').slick({
    dots: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000 
  });

  $('.client-review-slider-container').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true
  });
		
});