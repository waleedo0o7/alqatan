$(function () {
    initVisualsSlider();
    initMostReadsSlider();
    initExplanationsSlider();
    initPartnersSlider();
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
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

function initPartnersSlider() {
    const swiper = new Swiper('.partners-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}
