var swiper = new Swiper(".tripleSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
},

    breakpoints: {
        "@0.50": {
            slidesPerView: 1,
            spaceBetween: 10,
        },

        "@0.90": {
            slidesPerView: 2,
            spaceBetween: 10,
        },

        "@1.3475": {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

var swiper = new Swiper(".doubleSwiper", {
    slidesPerView: 2,
    spaceBetween: 10,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
},

    breakpoints: {
        "@0.0": {
            slidesPerView: 1,
            spaceBetween: 10,
        },

        "@0.90": {
            slidesPerView: 2,
            spaceBetween: 10,
        },

        "@1.3475": {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },
});