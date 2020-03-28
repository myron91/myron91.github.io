$('.popup-btn').on('click', function(event){
  event.preventDefault();
  $('.popup').fadeIn();
});
$('.popup-close').on('click', function(event){
  event.preventDefault();
  $('.popup').fadeOut();
});
/*слайдер з коментарями*/

$('.feedback-slider').slick({
prevArrow: '<button type="button" class="feedback-slider-btn feedback-prev-btn"><img src="img/left-arrow.svg" alt=""></button>',
nextArrow: '<button type="button" class="feedback-slider-btn feedback-next-btn"><img src="img/right-arrow.svg" alt=""></button>',

});

$('.features-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 1900,
          settings: {
            slidesToShow: 4,
            prevArrow:'<button class="prev"></button>',
            nextArrow:'<button class="next"></button>',
            slidesToScroll: 1,
          }
        },
        {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          prevArrow:'<button class="prev"></button>',
          nextArrow:'<button class="next"></button>',
          slidesToScroll: 1,
        }
      },
        {
          breakpoint: 780,
          settings: {
            slidesToShow: 1,
            prevArrow:'<button class="prev"></button>',
            nextArrow:'<button class="next"></button>',
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 535,
          settings: {
            slidesToShow: 1,
            prevArrow:'<button class="prev"></button>',
            nextArrow:'<button class="next"></button>',
            slidesToScroll: 1,
          }
        }







        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });