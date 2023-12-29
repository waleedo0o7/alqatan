$(function () {
    initVisualsSlider();
    initMostReadsSlider();
    initExplanationsSlider();
    initPartnersSlider();
    initGallerySlider();
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