$(document).ready(function () {
    $('.burger').on('click', (e) => {
        $(e.target).closest('header').toggleClass('active');
    })

    $('.nav-pills .nav-link').on('click', (e) => {
        $(e.target).closest('header').removeClass('active');
    })

    const scroll = $(window).scrollTop();
    const mouse = $('.mouse');

    if (scroll > 0) {
        mouse.hide();
    }

    $(window).scroll(() => {
        const scroll = $(window).scrollTop();
        if (scroll > 0) {
            mouse.fadeOut();
        } else {
            mouse.fadeIn("slow");
        }
    });

    $('.preloader').on('click', function () {
        $('.preloader').remove();
    })

    setTimeout(function () {
        $('.preloader').remove();
    }, 2650);

    const swiperProject = new Swiper('.project-slider', {
        spaceBetween: 20,
        slidesPerView: 1,
        autoHeight: true,
        //direction: 'vertical',
        effect: 'cards',
        slideShadows: false,
        grabCursor: true,
        //loop: true
    });

    const swiperPortfolio = new Swiper('.portfolio-slider', {
        spaceBetween: 24,
        slidesPerView: 1,
        direction: 'horizontal',
        autoHeight: true,
        allowTouchMove: true,
        shortSwipes: false,
        followFinger: false,
        navigation: {
            nextEl: '.portfolio-slider .swiper-button-next',
            prevEl: '.portfolio-slider .swiper-button-prev',
        }
    });

    setTimeout(function () {
        $('h1.name.hero.layers').addClass('glitch');
    }, 4000);
})
