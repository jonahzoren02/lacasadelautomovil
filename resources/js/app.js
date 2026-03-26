import './bootstrap';

// core version + navigation, pagination modules:
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

window.Swiper = Swiper;

var swiperSimpleProducts = new Swiper(".swiper-products", {
    loop: true,
    autoplay: {
        delay: 2500,
    },
    pagination: {
        el: ".carousel-products .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".carousel-products .btn-next",
        prevEl: ".carousel-products .btn-prev",
    },
});

var swiperMultipleCategories = new Swiper(".swiper-categories", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 2,
    autoplay: {
        delay: 2300,
    },
    navigation: {
        nextEl: ".carousel-categories .btn-next",
        prevEl: ".carousel-categories .btn-prev",
    },
    breakpoints: {
        1024: {
            slidesPerView: 8,
        },
        640: {
            slidesPerView: 6,
        },
    },
});

var swiperMultipleOffers = new Swiper(".swiper-offers", {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 7,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: ".carousel-offers .btn-next",
        prevEl: ".carousel-offers .btn-prev",
    },
    breakpoints: {
        1024: {
            slidesPerView: 4
        },
        640: {
            slidesPerView: 3
        }
    }
});

var swiperSimpleBrands = new Swiper(".swiper-brands", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 2,
    autoplay: {
        delay: 2500,
    },
    breakpoints: {
        640: {
            slidesPerView: 4,
        },
        1024: {
            slidesPerView: 5,
        },
    },
});

var swiperSimpleClients = new Swiper(".swiper-clients", {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 1,
    autoplay: {
        delay: 2500,
    },
    breakpoints: {
        640: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 5,
        },
    },
    pagination: {
        el: "carousel-clients .swiper-pagination",
        clickable: true,
    },
});

