const galleryWrapperRef=document.querySelector("#gallery-wrapper"),isOnePhoto=galleryWrapperRef.classList.contains("one-photo"),isThreePhoto=galleryWrapperRef.classList.contains("three-photo"),isFullPhoto=galleryWrapperRef.classList.contains("full-photo"),swiper1Ref=document.getElementsByClassName(".image-slider0"),isDesktop=window.innerWidth>1199&&isFullPhoto?1:0,initialSlideForSlider1=1+isDesktop,intervalDebounce=300;let debounceTimer;const debounce=(e,i)=>{window.clearTimeout(debounceTimer),debounceTimer=window.setTimeout(e,i)},slideParamsSmall={loop:!0,slidesPerView:1+isDesktop,initialSlide:0,spaceBetween:20,calculateHeight:!1,allowTouchMove:!1,keyboard:{enabled:!1,pageUpDown:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}},swiper1=new Swiper(".slider1",{...slideParamsSmall,initialSlide:initialSlideForSlider1,slidesPerView:1}),swiper0=new Swiper(".slider0",{...slideParamsSmall,initialSlide:0}),swiper2=new Swiper(".slider2",{...slideParamsSmall,initialSlide:initialSlideForSlider1+1}),adaptiveSlider=e=>{if(window.innerWidth>1199&&isFullPhoto){if(2==swiper0.params.slidesPerView)return;swiper0.params.slidesPerView=2,swiper0.slidePrev(0),swiper2.params.slidesPerView=2,swiper0.update(),swiper2.update()}else{if(1==swiper0.params.slidesPerView)return;swiper0.params.slidesPerView=1,swiper0.slideNext(0),swiper2.params.slidesPerView=1,swiper0.update(),swiper2.update()}};window.addEventListener("resize",(e=>{var i,r;i=adaptiveSlider,r=300,window.clearTimeout(debounceTimer),debounceTimer=window.setTimeout(i,r)}));