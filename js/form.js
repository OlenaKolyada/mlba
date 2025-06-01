document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.querySelector('.form-wrap');
    const ageRadios = document.querySelectorAll('input[name="participant-age"]');
    const sectionsContainer = document.querySelector('.age-sections-container');

    sectionsContainer.style.height = '0';
    sectionsContainer.style.overflow = 'hidden';
    sectionsContainer.style.transition = 'height 0.3s ease';

    const ageSections = {
        '6-7': document.getElementById('initiation-section'),
        '8-9': document.getElementById('elem-1-section'),
        '10-11': document.getElementById('elem-2-section'),
        '12-14': document.getElementById('elem-3-section'),
        '15-17': document.getElementById('ado-section'),
        '18+': document.getElementById('adult-section'),
    };

    let lastAge = null;

    function animateToggle(section, show) {
        if (show) {
            section.style.display = 'flex';
            sectionsContainer.style.height = '200px';
            section.style.maxHeight = section.scrollHeight + 'px';
            section.classList.add('showing');
            section.addEventListener('transitionend', function handler() {
                section.style.maxHeight = 'none';
                section.removeEventListener('transitionend', handler);
            });
        } else {
            section.style.maxHeight = section.scrollHeight + 'px';
            section.offsetHeight;
            section.style.maxHeight = '0';
            section.classList.remove('showing');
        }
    }

    function closeAllAgeSections() {
        Object.values(ageSections).forEach(section => {
            animateToggle(section, false);
            section.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
        });

        sectionsContainer.style.overflow = 'hidden';
        sectionsContainer.style.height = '0';
        lastAge = null;
    }

    ageRadios.forEach(radio => {
        radio.addEventListener('click', () => {
            const selected = radio.value;
            const isSame = lastAge === selected;

            if (isSame) {
                radio.checked = false;
                closeAllAgeSections();
            } else {
                if (lastAge) animateToggle(ageSections[lastAge], false);
                Object.entries(ageSections).forEach(([key, section]) => {
                    if (key !== selected) section.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
                });

                lastAge = selected;
                setTimeout(() => animateToggle(ageSections[selected], true), 10);
            }
        });
    });

    function setupSameNameCheckbox(participant, checkboxName) {
        const checkbox = participant.querySelector(`input[name="${checkboxName}"]`);
        if (!checkbox) return;

        checkbox.addEventListener('change', function () {
            const firstName = participant.querySelector('input[id^="first_name-participant"]');
            const lastName = participant.querySelector('input[id^="last_name-participant"]');

            if (this.checked) {
                firstName.value = document.getElementById('first_name').value;
                lastName.value = document.getElementById('last_name').value;
                firstName.disabled = true;
                lastName.disabled = true;
            } else {
                firstName.disabled = false;
                lastName.disabled = false;
            }
        });
    }

    setupSameNameCheckbox(document.querySelector('.participant'), 'same-name-checkbox');

    let participantCount = 1;
    const maxParticipants = 3;
    const firstParticipant = document.querySelector('.participant-identity');
    const firstHeading = firstParticipant.querySelector('h3');
    const originalHeadingText = firstHeading.textContent;

    document.querySelector('.add-participant').addEventListener('click', function () {
        if (participantCount === 1) {
            firstHeading.textContent = originalHeadingText + ' №1';
        }

        if (participantCount >= maxParticipants) {
            this.style.display = 'none';
            this.style.pointerEvents = 'none';
            return;
        }

        participantCount++;
        if (participantCount >= maxParticipants) {
            this.style.display = 'none';
            this.style.pointerEvents = 'none';
        }

        const removeBtn = document.querySelector('.remove-participant');
        removeBtn.style.display = 'flex';
        removeBtn.style.pointerEvents = 'auto';

        const initialHeight = wrapper.offsetHeight;

        const template = document.querySelector('.participant-template');
        const newParticipant = template.cloneNode(true);

        newParticipant.classList.remove('participant-template');
        newParticipant.classList.add('participant', 'animating-add');
        document.querySelector('.add-remove-participant').before(newParticipant);

        setTimeout(() => {
            newParticipant.classList.add('added');
            newParticipant.classList.remove('animating-add');
        }, 10);

        newParticipant.querySelector('h3').textContent = 'Information d\'élève №' + participantCount;
        newParticipant.querySelectorAll('[id$="-"]').forEach(el => el.id = el.id + participantCount);
        newParticipant.querySelectorAll('input[type="radio"]').forEach(radio => radio.name = 'participant-age-' + participantCount);

        const sameNameCheckbox = newParticipant.querySelector('input[type="checkbox"]');
        if (sameNameCheckbox) sameNameCheckbox.name = 'same-name-checkbox-' + participantCount;

        setupNewParticipantToggle(newParticipant, participantCount);
        setupSameNameCheckbox(newParticipant, 'same-name-checkbox-' + participantCount);

        animateWrapperHeightChange(initialHeight);
    });

    document.querySelector('.remove-participant').addEventListener('click', function () {
        if (participantCount <= 1) {
            this.classList.add('hiding');
            setTimeout(() => {
                this.classList.add('hiding');
                setTimeout(() => {
                    this.classList.add('hiding');
                    setTimeout(() => {
                        this.style.display = 'none';
                        this.style.pointerEvents = 'none';
                        this.classList.remove('hiding');
                    }, 300);
                    this.classList.remove('hiding');
                }, 300);
                this.classList.remove('hiding');
            }, 300);
            return;
        }

        const participants = document.querySelectorAll('.participant');
        const lastParticipant = participants[participants.length - 1];

        // Настройка анимации
        lastParticipant.style.maxHeight = lastParticipant.scrollHeight + 'px';
        lastParticipant.style.overflow = 'hidden';
        lastParticipant.offsetHeight; // Форсируем reflow

        // Запуск анимации
        lastParticipant.style.maxHeight = '0';
        lastParticipant.style.opacity = '0';

        // Удаляем после завершения
        lastParticipant.addEventListener('transitionend', function handler(e) {
            if (e.propertyName === 'max-height') {
                lastParticipant.remove();
                lastParticipant.removeEventListener('transitionend', handler);

                if (participantCount === 1) firstHeading.textContent = originalHeadingText;
                if (participantCount < maxParticipants) {
                    const addBtn = document.querySelector('.add-participant');
                    addBtn.style.display = 'flex';
                    addBtn.style.pointerEvents = 'auto';
                    addBtn.classList.add('showing');
                    addBtn.offsetHeight; // Форсируем reflow
                    setTimeout(() => {
                        addBtn.classList.remove('showing');
                    }, 10);
                }
                if (participantCount <= 1) {
                    const removeBtn = document.querySelector('.remove-participant');
                    removeBtn.style.display = 'none';
                    removeBtn.style.pointerEvents = 'none';
                }
            }
        });

        participantCount--;
    });

    // Инициализация кнопки Remove при загрузке
    if (participantCount <= 1) {
        const removeBtn = document.querySelector('.remove-participant');
        removeBtn.style.display = 'none';
        removeBtn.style.pointerEvents = 'none';
    }

    function setupNewParticipantToggle(block, index) {
        const radios = block.querySelectorAll('input[name="participant-age-' + index + '"]');
        const container = block.querySelector('.age-sections-container');

        // Делаем уникальный id для контейнера
        container.id = 'age-container-' + index;

        container.style.height = '0';
        container.style.overflow = 'hidden';
        container.style.transition = 'height 0.3s ease';

        // Создаем уникальный объект секций для ЭТОГО участника
        const sections = {
            '6-7': block.querySelector('#initiation-section-' + index),
            '8-9': block.querySelector('#elem-1-section-' + index),
            '10-11': block.querySelector('#elem-2-section-' + index),
            '12-14': block.querySelector('#elem-3-section-' + index),
            '15-17': block.querySelector('#ado-section-' + index),
            '18+': block.querySelector('#adult-section-' + index),
        };

        let last = null;

        // Функция анимации для ЭТОГО участника
        function toggleAnimation(section, show) {
            if (show) {
                section.style.display = 'flex';
                container.style.height = '200px';
                section.style.maxHeight = section.scrollHeight + 'px';
                section.classList.add('showing');
                section.addEventListener('transitionend', function handler() {
                    section.style.maxHeight = 'none';
                    section.removeEventListener('transitionend', handler);
                });
            } else {
                section.style.maxHeight = section.scrollHeight + 'px';
                section.offsetHeight;
                section.style.maxHeight = '0';
                section.classList.remove('showing');
            }
        }

        function closeAll() {
            Object.values(sections).forEach(s => {
                toggleAnimation(s, false);
                s.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
            });
            container.style.overflow = 'hidden';
            container.style.height = '0';
            last = null;
        }

        radios.forEach(radio => {
            radio.addEventListener('click', () => {
                const selected = radio.value;
                const isSame = last === selected;

                if (isSame) {
                    radio.checked = false;
                    closeAll();
                } else {
                    if (last) toggleAnimation(sections[last], false);
                    Object.entries(sections).forEach(([key, s]) => {
                        if (key !== selected) s.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
                    });

                    last = selected;
                    setTimeout(() => toggleAnimation(sections[selected], true), 10);
                }
            });
        });
    }

    function animateWrapperHeightChange(prevHeight) {
        const newHeight = wrapper.scrollHeight;
        wrapper.style.height = prevHeight + 'px';
        requestAnimationFrame(() => {
            wrapper.style.height = newHeight + 'px';
        });

        wrapper.addEventListener('transitionend', function handler(e) {
            if (e.propertyName === 'height') {
                wrapper.style.height = 'auto';
                wrapper.removeEventListener('transitionend', handler);
            }
        });
    }

    document.getElementById('first_name').addEventListener('input', updateParticipantNames);
    document.getElementById('last_name').addEventListener('input', updateParticipantNames);

    function updateParticipantNames() {
        document.querySelectorAll('.participant').forEach((participant, i) => {
            const checkbox = participant.querySelector(`input[name="same-name-checkbox${i ? '-' + (i + 1) : ''}"]`);
            if (checkbox && checkbox.checked) {
                const first = participant.querySelector('input[id^="first_name-participant"]');
                const last = participant.querySelector('input[id^="last_name-participant"]');
                first.value = document.getElementById('first_name').value;
                last.value = document.getElementById('last_name').value;
            }
        });
    }
});