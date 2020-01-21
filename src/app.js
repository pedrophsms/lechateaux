import Swiper from 'swiper';
import '../js/fontawesome';
import './custom/custom.js';


var HomeBanner = new Swiper('.swiper-container.home-banner', { 
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
});

var AboutBanner = new Swiper('#about .swiper-container', { 
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.fa-chevron-right',
        prevEl: '.fa-chevron-left',
    },
});

var ConfortoBanner = new Swiper('#conforto .swiper-container', { 
    direction: 'horizontal',
    loop: true,
    type: 'progressbar',
    navigation: {
        nextEl: '.fa-chevron-right',
        prevEl: '.fa-chevron-left',
    },
});
