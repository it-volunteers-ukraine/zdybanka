new Swiper(".gallery-slider",{direction:"horizontal",slidesPerView:3,spaceBetween:30,dynamicBullets:!0,dynamicMainBullets:3,navigation:{nextEl:".gallery__arrow-next",prevEl:".gallery__arrow-prev"},loop:!0,watchOverflow:!0,pagination:{el:".gallery__pagination",clickable:!0},autoHeight:!1,breakpoints:{0:{slidesPerView:1,dynamicBullets:!0,dynamicMainBullets:3},768:{slidesPerView:3,dynamicBullets:!0,dynamicMainBullets:3},1920:{slidesPerView:5}}});