document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu
    $('.open-submenu').click(function(e) {
        e.preventDefault();
        let submenu = $(this).next('.sub-menu');
        if (submenu.hasClass('is-active')) {
            submenu.slideUp();
            submenu.removeClass('is-active');
        } else {
            submenu.slideDown();
            submenu.addClass('is-active');
        }
    });

    let mobilemenu = $('.header-mobile');

    $('.hamburger').click(function(e) {
        e.preventDefault();
        mobilemenu.addClass('is-active');
    });

    $('.mobile-menu-close').click(function(e) {
        e.preventDefault();
        mobilemenu.removeClass('is-active');
    });

}, false);
