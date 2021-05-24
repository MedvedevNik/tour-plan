'use sctict';

const menuButton = document.querySelector('.menu-button'),
      inputSearch = document.querySelector('.search__input'),
      modal = document.querySelector('.modal'),
      modalOverlay = modal.querySelector('.modal__overlay'),
      modalBtn = document.querySelectorAll('[data-toggle="modal"]');



const overlayHidden = () => {
  document.body.style.overflowY = 'hidden';
  document.ontouchmove = function (event) {
    event.preventDefault();
  };
}

const toggleModal = () => {
  modal.classList.toggle('modal--active');
}

const overlayAuto = () => {
  document.body.style.overflowY = 'auto';
  document.ontouchmove = function (e) {
    return true;
  };
}

modalBtn.forEach(function(elem) {
  elem.addEventListener('click', function() {
    toggleModal();
    overlayHidden();
  });
});

window.addEventListener('keydown', function (e) {
  if (modal.classList.contains('modal--active')) {
    if(e.code == "Escape"){
      e.preventDefault();
      toggleModal();
      overlayAuto();
    }
  }
}); 

modal.addEventListener('click', function(event) {
  console.log(modal);
  let target = event.target;

  if (target.closest('.modal__close')) {
      event.preventDefault();
      toggleModal();
      overlayAuto();
  } else {
      target = target.closest('.modal__content');
      if (!target) {
        toggleModal();
        overlayAuto();
      }
    }
  }
);

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

document.body.addEventListener('input', function(event) {

  let target = event.target;

  if (target.name === 'email') {
    target.value = target.value.replace(/[^A-Za-z0-9 ,.@]/gi, '');
    target.setAttribute('pattern', '[A-Za-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$');
  }

  if (target.name === 'phone') {
    target.setAttribute('minlength', 19);
  }

  if (target.name === 'name') {
    target.setAttribute('pattern', '^[a-zA-Zа-яёА-ЯЁ0-9 ]{3,20}$');
    target.setAttribute('maxlength', 50);
    target.value = target.value.replace(/[^A-Za-zА-Яа-яЁё0-9 ]/gi, '');
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
      newValue = template.replace(/[_\d]/g, a => (i < val.length ? val.charAt(i++) || def.charAt(i) : a));
    i = newValue.indexOf("_");
    if (i !== -1) {
      newValue = newValue.slice(0, i);
    }
    let reg = template.substr(0, this.value.length).replace(/_+/g,
      a => "\\d{1," + a.length + "}").replace(/[+()]/g, "\\$&");
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


$(document).ready(function(){
  $(".form").each(function () {
    $(this).validate({
      errorClass: 'invalid',
      messages: {
        name: {
          required: "Please specify your name",
          minlength: "Name must be at least 2 letters long",
          name: "Please specify your name"
        },
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        },
        phone: {
          required: "We need your phone number to contact you",
          minlength: "Please enter your phone number",
        },
      },
    });
    $(".newsletter__subscribe").validate({
      errorClass: "invalid",
      messages: {        
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com",
        },       
      },
    });
  });
});


