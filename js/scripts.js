const hotelSwiper = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,
  speed: 1000,

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

//init map
ymaps.ready(init);
function init(){
  var myMap = new ymaps.Map('map', {
      center: [7.838178344448822,98.29888316061488],
      zoom: 15,
      controls: []
  });

  var myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            iconCaption: 'Grand Hilton Hotel',
            hintContent: 'click me',
            balloonContentBody: [
            '<address>',
            '<strong>Hilton Phuket Arcadia Resort & SPA</strong>',
            '<br/>',
            '333 Patak Rd, Karon, Mueang Phuket District, Phuket 83100',
            '<br/>',
            'Website: <a href="https://www3.hilton.com/en/hotels/thailand/hilton-phuket-arcadia-resort-and-spa-HKTHIHI/index.html?WT.mc_id=zELWAKN0APAC1HI2DMH3LocalSearch4DGGenericx6HKTHIHI">hilton.com</a>',
            '</address>'
        ].join('')
        }, {
            preset: 'islands#icon',
            iconColor: 'rgba(10, 34, 61, 0.9)'
        })
  myMap.geoObjects.add(myPlacemark);
}