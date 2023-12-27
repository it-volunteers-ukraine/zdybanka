// import '../vendors/lightbox';
// import '../vendors/lightbox-plus-jquery';
console.log('parts-script/gallery.js');

const galleryWrapperRef = document.querySelector('#gallery-wrapper');

const isOnePhoto = galleryWrapperRef.classList.contains('one-photo');
const isThreePhoto = galleryWrapperRef.classList.contains('three-photo');
const isFullPhoto = galleryWrapperRef.classList.contains('full-photo');
const swiper1Ref = document.getElementsByClassName(".image-slider0");

const isDesktop = window.innerWidth > 1199 && isFullPhoto ? 1 : 0;
const initialSlideForSlider1 = 1 + isDesktop;

const intervalDebounce = 300;
let debounceTimer;

const debounce = (callback, time) => {
  window.clearTimeout(debounceTimer);
  debounceTimer = window.setTimeout(callback, time);
};

const slideParamsSmall = {
  loop: true,
  
  // keyboard:{
  //   enabled: true,
  //   onlyInViewport: true,
  //   pageUpDown: true
  // },

  slidesPerView: 1 + isDesktop,
  initialSlide: 0,
  spaceBetween: 20,
  calculateHeight: false,
  allowTouchMove: false,
  // rewind: true,
  keyboard: {
    enabled: false,
    pageUpDown: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
};

const swiper1 = new Swiper(".slider1", {
  ...slideParamsSmall,
  initialSlide: initialSlideForSlider1,
  slidesPerView: 1,
});

const swiper0 = new Swiper(".slider0", {
  ...slideParamsSmall,
  initialSlide: 0,
});

const swiper2 = new Swiper(".slider2", {
  ...slideParamsSmall,
  initialSlide: initialSlideForSlider1 + 1,
});

const adaptiveSlider = (e) => {
  const widtWin = window.innerWidth;
  if (widtWin > 1199 && isFullPhoto) {
    console.log('full-photo')

    console.log(swiper2);
    if (swiper0.params.slidesPerView == 2) {
      return;
    } else {
      console.log("change params to 2");
      swiper0.params.slidesPerView = 2;
      swiper0.slidePrev(0);
      swiper2.params.slidesPerView = 2;
      swiper0.update();
      swiper2.update();
    }
    
  }else {
    console.log('not-full-photo')
    if (swiper0.params.slidesPerView == 1) {
      return;
    } else {
      console.log("change params to 1");
      swiper0.params.slidesPerView = 1;
      swiper0.slideNext(0);
      swiper2.params.slidesPerView = 1;
      swiper0.update();
      swiper2.update();
    }
  }
};

window.addEventListener("resize", (e) => {
  debounce(adaptiveSlider, intervalDebounce);
});




