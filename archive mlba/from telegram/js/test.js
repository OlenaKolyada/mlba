document.addEventListener('DOMContentLoaded', function () {
    const ageRadios = document.querySelectorAll('input[name="age-eleve"]');

    const ageSections = {
        '6-7': document.getElementById('initiation-section'),
        '8-9': document.getElementById('elem-1-section'),
        '10-12': document.getElementById('elem-2-section'),
        '13-14': document.getElementById('elem-3-section'),
        '15-17': document.getElementById('ado-section'),
        '18+': document.getElementById('adult-section'),
    };

    let lastAge = null;

    function animateToggle(section, show) {
        if (show) {
            section.classList.add('showing');
            section.style.maxHeight = section.scrollHeight + 'px';
            const onTransitionEnd = () => {
                if (section.classList.contains('showing')) {
                    section.style.maxHeight = 'none';
                }
                section.removeEventListener('transitionend', onTransitionEnd);
            };
            section.addEventListener('transitionend', onTransitionEnd);
        } else {
            section.style.maxHeight = section.scrollHeight + 'px';
            section.offsetHeight;
            section.style.maxHeight = '0px';
            section.classList.remove('showing');
        }
    }

    function closeAllAgeSections() {
        Object.values(ageSections).forEach(section => {
            animateToggle(section, false);
            const checkboxes = section.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(cb => cb.checked = false);
        });
        // Здесь была проблема - сбрасывались все кнопки
        // ageRadios.forEach(r => r.checked = false);
        // Убираем сброс выбранной кнопки
        lastAge = null;
    }

    function updateRadioButtonStyle(radio) {
        // Добавляем класс к выбранной кнопке для стилизации
        ageRadios.forEach(r => {
            const span = r.nextElementSibling;
            if (r.checked) {
                span.classList.add('selected-radio');
            } else {
                span.classList.remove('selected-radio');
            }
        });
    }

    ageRadios.forEach(radio => {
        radio.addEventListener('click', () => {
            const selected = radio.value;
            const isSame = lastAge === selected;

            closeAllAgeSections();

            if (!isSame) {
                lastAge = selected;
                // Делаем выбранную кнопку выбранной
                radio.checked = true;
                // Обновляем стили
                updateRadioButtonStyle(radio);

                setTimeout(() => {
                    animateToggle(ageSections[selected], true);
                }, 10);
            }
        });
    });

    // Инициализируем стили при загрузке
    updateRadioButtonStyle();
});