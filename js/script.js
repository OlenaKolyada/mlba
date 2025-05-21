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

}, false);
