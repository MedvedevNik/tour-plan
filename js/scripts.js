const hotelSwiper = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,
  speed: 1000,
  effect: 'coverflow',
  // Autoplay
  autoplay: {
    delay: 2000,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },

  // Keyboard swipe
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

const reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,
  speed: 1000,

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },

  // Keyboard swipe
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});


