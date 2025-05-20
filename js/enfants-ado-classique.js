

document.addEventListener('DOMContentLoaded', function () {


    // Scroll Buttons on Page

    function setupSectionScroll(buttonId, sectionId, offset = 120, duration = 1200) {
        document.querySelector(buttonId).addEventListener('click', function (event) {
            event.preventDefault();
            const section = document.querySelector(sectionId);
            const sectionPosition = section.getBoundingClientRect().top + window.scrollY;

            smoothScrollTo(sectionPosition - offset, duration);
        });
    }

    // Enfants-Ado Classique
    setupSectionScroll('#card-init-class', '#init-class', 130);
    setupSectionScroll('#card-elem-1', '#elem-1', 130);
    setupSectionScroll('#card-elem-2', '#elem-2', 140);
    setupSectionScroll('#card-elem-3', '#elem-3', 130);
    setupSectionScroll('#card-avance-class', '#avance-class', 150);

}, false);
