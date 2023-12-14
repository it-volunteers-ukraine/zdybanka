const swiperSuccessfulProjects = new Swiper('.successful-projects-swiper', {
    loop: true,

    pagination: {
        el: '.successful-projects-swiper-pagination',
    },

    navigation: {
        nextEl: '.successful-projects-swiper-btn-next',
        prevEl: '.successful-projects-swiper-btn-prev',
    },

});
