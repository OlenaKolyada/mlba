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
    // Modal Window
    $('.open-modal-form-btn').magnificPopup({
        type: 'inline',
        showCloseBtn: false,
        removalDelay: 700,
        midClick: true,
        mainClass: 'mfp-with-zoom',

        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',

            opener: function(openerElement) {
                return $('#modal-form');
            }
        }
    });


    $('.modal-close').on('click', function () {
        $.magnificPopup.close();
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

    // Dots Navigation
    document.querySelectorAll('.scroll-dots-nav a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const offset = parseInt(this.getAttribute('data-offset'), 10) || 0;
            const target = document.getElementById(targetId);

            const top = target.getBoundingClientRect().top + window.scrollY - offset;
            smoothScrollTo(top, 1200);
        });
    });

    const sections = document.querySelectorAll('section');
    const navDots = document.querySelectorAll('.scroll-dots-nav a');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            const dot = document.querySelector(`.scroll-dots-nav a[data-target="${id}"]`);
            if (entry.isIntersecting) {
                navDots.forEach(link => link.classList.remove('active'));
                if (dot) {
                    dot.classList.add('active');
                }
            }
        });
    }, {
        threshold: 0.6
    });

    sections.forEach(section => observer.observe(section));

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


    // Hidden Text and Read More Link
    document.querySelectorAll('.read-more-link').forEach(function (readMoreLink) {
        const hiddenText = readMoreLink.previousElementSibling;

        readMoreLink.addEventListener('click', function (e) {
            e.preventDefault();

            const isExpanded = hiddenText.classList.contains('expanded');

            if (isExpanded) {
                hiddenText.style.maxHeight = hiddenText.scrollHeight + 'px';
                void hiddenText.offsetHeight;
                hiddenText.style.maxHeight = '0px';
                hiddenText.classList.remove('expanded');
                readMoreLink.classList.remove('active');
            } else {
                hiddenText.style.maxHeight = hiddenText.scrollHeight + 'px';
                hiddenText.classList.add('expanded');
                readMoreLink.classList.add('active');

                hiddenText.addEventListener('transitionend', function handler() {
                    if (hiddenText.classList.contains('expanded')) {
                        hiddenText.style.maxHeight = 'none';
                    }
                    hiddenText.removeEventListener('transitionend', handler);
                });
            }
        });
    });

    // Scroll Buttons on Page

    function setupSectionScroll(buttonId, sectionId, offset = 120, duration = 1200) {
        document.querySelector(buttonId).addEventListener('click', function (event) {
            event.preventDefault();
            const section = document.querySelector(sectionId);
            const sectionPosition = section.getBoundingClientRect().top + window.scrollY;

            smoothScrollTo(sectionPosition - offset, duration);
        });
    }

    setupSectionScroll('#hero-btn-loisir', '#loisir', 80);
    setupSectionScroll('#hero-btn-pro', '#pro', 90);


}, false);
