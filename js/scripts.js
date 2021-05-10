const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,
  speed: 1000,

  // Autoplay

  autoplay: {
    delay: 2000,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },

  // Keyboard swipe
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});