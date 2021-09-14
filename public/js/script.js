$(document).ready(function(){
    var swiper = new Swiper(".mySwiper", {
        direction: 'horizontal',
        loop: true,
        speed: 600,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});