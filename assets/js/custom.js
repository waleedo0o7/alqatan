$(function () {
    initVisualsSlider();
    initMostReadsSlider();
    initExplanationsSlider();
    initPartnersSlider();
    initGallerySlider();
    NewsSlider();
    initTestimonialsSlider();
    initAchievementsSlider();
});

function initVisualsSlider() {
    const swiper = new Swiper('.visuals-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: '.visuals-button-next',
            prevEl: '.visuals-button-prev',
        },
    });
}

function initMostReadsSlider() {
    const swiper = new Swiper('.most-reads-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: '.most-reads-button-next',
            prevEl: '.most-reads-button-prev',
        },
    });
}

function initExplanationsSlider() {
    const swiper = new Swiper('.explanations-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: '.explanations-button-next',
            prevEl: '.explanations-button-prev',
        },
    });
}

function initPartnersSlider() {
    const swiper = new Swiper('.partners-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 5,
        spaceBetween: 50,
        navigation: {
            nextEl: '.partners-button-next',
            prevEl: '.partners-button-prev',
        },
    });
}

function initGallerySlider() {
    const swiper = new Swiper('.gallery-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 50,
        pagination: {
            el: '.gallery-pagination',
            type: 'bullets',
            clickable: true
        },
        navigation: {
            nextEl: '.gallery-button-next',
            prevEl: '.gallery-button-prev',
        },
    });
}

function NewsSlider() {

    let sliderDirection;
    let slidesNumView;

    let swiperNewsSlider;
    let swiperNewsThumbsSlider;

    if ($(window).width() <= 1024) {
        sliderDirection = 'horizontal'
        slidesNumView = 3
    } else {
        sliderDirection = 'vertical'
        slidesNumView = 3
    }

    swiperNewsThumbsSlider = new Swiper(".swiper-news-thumbs-slider", {
        loop: true,
        spaceBetween: 0,
        slidesPerView: slidesNumView,
        freeMode: true,
        watchSlidesProgress: true,
        direction: sliderDirection

    });

    swiperNewsSlider = new Swiper(".swiper-news-slider", {
        loop: true,
        pagination: {
            el: '.news-pagination',
            type: 'bullets',
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiperNewsThumbsSlider,
        },
    });

}

function initTestimonialsSlider() {
    const swiper = new Swiper('.testimonials-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.testimonials-button-next',
            prevEl: '.testimonials-button-prev',
        },
    });
}

function initAchievementsSlider() {
    const swiper = new Swiper('.achievements-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: '.achievements-button-next',
            prevEl: '.achievements-button-prev',
        },
    });
}
