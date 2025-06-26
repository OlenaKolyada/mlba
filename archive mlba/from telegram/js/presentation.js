

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
    setupSectionScroll('#card-init-contemp', '#init-contemp', 130);
    setupSectionScroll('#card-contemp', '#contemp', 130);

}, false);
