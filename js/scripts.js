'use sctict';

const menuButton = document.querySelector('.menu-button'),
      inputSearch = document.querySelector('.search__input'),
      modal = document.querySelector('.modal'),
      modalOverlay = modal.querySelector('.modal__overlay'),
      modalBtn = document.querySelectorAll('[data-toggle="modal"]'),
      popupAnimate = {
        count: -1200,
        speed: 12,
        startPos: -1200,
        endPos: 0
      };

modalBtn.forEach(function(elem) {
  elem.addEventListener('click', function() {
    modal.classList.toggle('modal--active');
  });
});

modalOverlay.addEventListener('click', function(event) {
  
  let target = event.target;

  if (target.closest('.modal__close')) {
      event.preventDefault();
      modal.classList.remove('modal--active');
  } else {
      target = target.closest('.modal__content');

      if (!target) {
        modal.classList.remove('modal--active');
      }
    }
  }
);

modal.addEventListener('keypress', function (e) {
    if(e.code === 'Escape') modal.classList.toggle('modal--active');
  }); 



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

document.body.addEventListener('input', function (event) {

  let target = event.target;

  if (target.name === 'email') {
    target.value = target.value.replace(/[^A-Za-z ,.@]/gi, '');
    target.setAttribute('pattern', '[A-Za-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$');
  }

  if (target.name === 'name') {
    target.setAttribute('pattern', '^[a-zA-Zа-яёА-ЯЁ ]{3,20}$');
    target.setAttribute('maxlength', 50);
    target.value = target.value.replace(/[^A-Za-zА-Яа-яЁё ]/gi, '');
  }

  if (target.name === 'message') {
    target.value = target.value.replace(/[^А-ЯЁа-яё ,.?!]/gi, '');
  }
});

inputSearch.addEventListener('input', function() {
  if(inputSearch.value) {
    inputSearch.classList.remove('search__input--blink');
  } else {
    inputSearch.classList.add('search__input--blink');
  }
});

menuButton.addEventListener('click', function() {
  const navbarBottom = document.querySelector('.navbar-bottom');

  navbarBottom.classList.toggle('navbar-bottom--visible');
  document.body.classList.toggle('overlay--hidden');
});

function maskPhone(selector, masked = '+7 (___) -___-__-__') {
  const elems = document.querySelectorAll(selector);

  function mask(event) {
    const keyCode = event.keyCode;
    const template = masked,
      def = template.replace(/\D/g, ""),
      val = this.value.replace(/\D/g, "");
    let i = 0,
      newValue = template.replace(/[_\d]/g, function(a) {(i < val.length ? val.charAt(i++) || def.charAt(i) : a)});
    i = newValue.indexOf("_");
    if (i !== -1) {
      newValue = newValue.slice(0, i);
    }
    let reg = template.substr(0, this.value.length).replace(/_+/g,
      function(a) {"\\d{1," + a.length + "}"}).replace(/[+()]/g, "\\$&");
    reg = new RegExp("^" + reg + "$");
    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) {
      this.value = newValue;
    }
    if (event.type === "blur" && this.value.length < 5) {
      this.value = "";
    }

  }

  for (const elem of elems) {
    elem.addEventListener("input", mask);
    elem.addEventListener("focus", mask);
    elem.addEventListener("blur", mask);
  }
}

maskPhone('[name="phone"]');





