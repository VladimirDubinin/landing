$(document).ready(function () {
    $('.burger').on('click', (e) => {
        $(e.target).closest('header').toggleClass('active');
    })

    $('.nav-pills .nav-link').on('click', (e) => {
        $(e.target).closest('header').removeClass('active');
    })

    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    const mouse = $('.mouse');
    const previewHeight = $('section#preview').height();

    if (scroll > 0) {
        mouse.hide();
    }

    checkHeader(previewHeight, scroll);
    checkFooter(scroll);

    $(window).scroll(() => {
        const scroll = $(window).scrollTop();
        if (scroll > 0) {
            mouse.fadeOut();
        } else {
            mouse.fadeIn("slow");
        }

        checkHeader(previewHeight, scroll);
        checkFooter(windowHeight, previewHeight, scroll);
    });

    const preloader = $('.preloader');
    if (preloader.length > 0) {
        const url = '/ajax/cookies.php';
        $.ajax({
            method: 'POST',
            url: url
        })

        preloader.on('click', () => {
            preloader.remove();
        })
    }

    setTimeout(() => {
        preloader.remove();
    }, 2650);

    setTimeout(function () {
        $('h1.name.hero.layers').addClass('glitch');
    }, preloader.length > 0 ? 4000 : 2000);

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
        //shortSwipes: false,
        followFinger: false,
        navigation: {
            nextEl: '.portfolio-slider .swiper-button-next',
            prevEl: '.portfolio-slider .swiper-button-prev',
        }
    });


})

function checkHeader(previewHeight, scroll) {
    if (typeof previewHeight !== 'undefined' && scroll > previewHeight) {
        $('header.with-bg').addClass('show');
    } else {
        $('header.with-bg').removeClass('show');
    }
}

function checkFooter(windowHeight, previewHeight, scroll) {
    if ((previewHeight - windowHeight) < scroll) {
        $('footer').addClass('with-bg');
    } else {
        $('footer').removeClass('with-bg');
    }
}
