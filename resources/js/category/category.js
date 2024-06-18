const { windowSize } = require('../variable.js');
const { initializeOwlCarousel } = require('../functions/initializeOwlCarousel.js');
if (windowSize > 768) {
    $('.outstan-brand-category').removeClass('outstan-brand-category-owl-carousel owl-carousel owl-theme');
    $('.list-category-page').removeClass('list-category-page-owl-carousel owl-carousel owl-theme');
} else {
    $('.category-item-page').removeClass('col col-xs-2 category-item')
    $('.list-category-page').addClass('list-category-page-owl-carousel owl-carousel owl-theme');
    initializeOwlCarousel('.list-category-page-owl-carousel', {
        loop: true,
        items: 4,
        margin: 15,
        nav: false,
        dots: false,
    });
    $('.outstan-brand-category').addClass('outstan-brand-category-owl-carousel owl-carousel owl-theme');
    initializeOwlCarousel('.outstan-brand-category-owl-carousel', {
        loop: true,
        items: 5,
        margin: 35,
        nav: false,
        dots: false,
    });
}


