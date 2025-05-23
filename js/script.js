function smoothScrollTo(targetY, duration = 1200) {
    const startY = window.scrollY;
    const distance = targetY - startY;
    const startTime = performance.now();

    function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
    }

    function scroll(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easedProgress = easeOutCubic(progress);

        window.scrollTo(0, startY + distance * easedProgress);

        if (progress < 1) {
            requestAnimationFrame(scroll);
        }
    }

    requestAnimationFrame(scroll);
}

document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu
    $('.open-submenu').on('click', function () {
        const submenu = $(this).next('.sub-menu');
        if(submenu.hasClass('is-active')) {
            submenu.slideUp();
            submenu.removeClass('is-active');
        } else {
            submenu.slideDown();
            submenu.addClass('is-active');
        }
    });

    const mobilemenu = $('.header-mobile');
    $('.burger').on('click', function () {
        mobilemenu.addClass('is-active');
    });

    $('.header-mobile-close').on('click', function () {
        mobilemenu.removeClass('is-active');
    });

    // Swiper
    const swiperMainGallery = new Swiper('.swiper', {
        speed: 1000,
        spaceBetween: 0,
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper .swiper-button-next',
            prevEl: '.swiper .swiper-button-prev',
        },
    });

    // Scroll to Top
    document.querySelector('.scroll-to-top').addEventListener('click', function (event) {
        event.preventDefault();
        smoothScrollTo(0, 1200);
    });

    window.addEventListener('scroll', function () {
        const scrollToTopButton = document.querySelector('.scroll-to-top');
        if (window.scrollY > 200) {
            scrollToTopButton.classList.add('visible');
        } else {
            scrollToTopButton.classList.remove('visible');
        }
    });


}, false);
