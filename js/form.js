document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.querySelector('.form-wrap');

    // Настройка для первого участника
    setupParticipantToggle('.participant-1', 'participant_age', {
        '6-7 ans': '#initiation-section-1',
        '8-9 ans': '#elem-1-section-1',
        '10-11 ans': '#elem-2-section-1',
        '12-14 ans': '#elem-3-section-1',
        '15-17 ans': '#ado-section-1',
        '18+ ans': '#adult-section-1'
    });

    // Настройка для второго участника
    setupParticipantToggle('.participant-2', 'participant_age_2', {
        '6-7 ans': '#initiation-section-2',
        '8-9 ans': '#elem-1-section-2',
        '10-11 ans': '#elem-2-section-2',
        '12-14 ans': '#elem-3-section-2',
        '15-17 ans': '#ado-section-2',
        '18+ ans': '#adult-section-2'
    });

    // Настройка для третьего участника
    setupParticipantToggle('.participant-3', 'participant_age_3', {
        '6-7 ans': '#initiation-section-3',
        '8-9 ans': '#elem-1-section-3',
        '10-11 ans': '#elem-2-section-3',
        '12-14 ans': '#elem-3-section-3',
        '15-17 ans': '#ado-section-3',
        '18+ ans': '#adult-section-3'
    });

    // Функция настройки переключения секций для участника
    function setupParticipantToggle(participantSelector, radioName, sections) {
        const participant = document.querySelector(participantSelector);
        if (!participant) return;

        const radios = participant.querySelectorAll(`input[name="${radioName}"]`);
        const container = participant.querySelector('.age-sections-container');

        if (!container) return;

        container.style.height = '0';
        container.style.overflow = 'hidden';
        container.style.transition = 'height 0.3s ease';

        let lastAge = null;

        function animateToggle(sectionSelector, show) {
            const section = participant.querySelector(sectionSelector);
            if (!section) return;

            if (show) {
                section.style.display = 'flex';
                section.style.flexDirection = window.innerWidth <= 624 ? 'column' : 'row';
                requestAnimationFrame(() => {
                    const fullHeight = section.scrollHeight;
                    container.style.height = fullHeight + 'px';
                    section.style.maxHeight = fullHeight + 'px';
                    section.classList.add('showing');
                });
            } else {
                section.style.maxHeight = section.scrollHeight + 'px';
                section.offsetHeight;
                section.style.maxHeight = '0';
                section.classList.remove('showing');
            }
        }

        function closeAllSections() {
            Object.values(sections).forEach(sectionSelector => {
                const section = participant.querySelector(sectionSelector);
                if (section) {
                    animateToggle(sectionSelector, false);
                    section.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
                }
            });
            container.style.overflow = 'hidden';
            container.style.height = '0';
            lastAge = null;
        }

        radios.forEach(radio => {
            radio.addEventListener('click', () => {
                const selected = radio.value;
                const isSame = lastAge === selected;

                if (isSame) {
                    radio.checked = false;
                    closeAllSections();
                } else {
                    if (lastAge && sections[lastAge]) {
                        animateToggle(sections[lastAge], false);
                    }

                    // Очищаем чекбоксы в других секциях
                    Object.entries(sections).forEach(([key, sectionSelector]) => {
                        if (key !== selected) {
                            const section = participant.querySelector(sectionSelector);
                            if (section) {
                                section.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
                            }
                        }
                    });

                    lastAge = selected;
                    if (sections[selected]) {
                        setTimeout(() => animateToggle(sections[selected], true), 10);
                    }
                }
            });
        });
    }

    // Настройка чекбокса "использовать то же имя"
    setupSameNameCheckbox();

    function setupSameNameCheckbox() {
        const firstParticipant = document.querySelector('.participant-1');
        const checkbox = firstParticipant?.querySelector('input[name="same-name-checkbox"]');
        if (!checkbox) return;

        checkbox.addEventListener('change', function () {
            const firstName = firstParticipant.querySelector('input[name="first_name_participant_1"]');
            const lastName = firstParticipant.querySelector('input[name="last_name_participant_1"]');

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

    // Обновление имен при изменении контактных данных
    document.getElementById('first_name').addEventListener('input', updateParticipantNames);
    document.getElementById('last_name').addEventListener('input', updateParticipantNames);

    function updateParticipantNames() {
        const firstParticipant = document.querySelector('.participant-1');
        const checkbox = firstParticipant?.querySelector('input[name="same-name-checkbox"]');
        if (checkbox && checkbox.checked) {
            const first = firstParticipant.querySelector('input[name="first_name_participant_1"]');
            const last = firstParticipant.querySelector('input[name="last_name_participant_1"]');
            first.value = document.getElementById('first_name').value;
            last.value = document.getElementById('last_name').value;
        }
    }

    // Управление показом/скрытием участников
    let participantCount = 1;
    const maxParticipants = 3;
    const firstHeading = document.querySelector('.participant-1 .participant-identity-1 h3');
    const originalHeadingText = firstHeading.textContent;

    // Кнопки добавления
    document.querySelector('.add-participant-1').addEventListener('click', function () {
        if (participantCount >= maxParticipants) return;

        participantCount++;

        // Обновляем заголовок первого участника
        if (participantCount === 2) {
            firstHeading.textContent = originalHeadingText + ' №1';
            $('.participant-2').slideDown(400);
        }
    });

    document.querySelector('.add-participant-2').addEventListener('click', function () {
        if (participantCount >= maxParticipants) return;

        participantCount++;
        $('.participant-3').slideDown(400);
    });

    // Кнопки удаления
    document.querySelector('.remove-participant-2').addEventListener('click', function () {
        $('.participant-2').slideUp(300, function() {
            clearParticipantFields(document.querySelector('.participant-2'));
        });

        participantCount--;

        // Возвращаем оригинальный заголовок если остался только один участник
        if (participantCount === 1) {
            firstHeading.textContent = originalHeadingText;
        }
    });

    document.querySelector('.remove-participant-3').addEventListener('click', function () {
        $('.participant-3').slideUp(300, function() {
            clearParticipantFields(document.querySelector('.participant-3'));
        });

        participantCount--;
    });

    // Функция очистки полей участника
    function clearParticipantFields(participant) {
        participant.querySelectorAll('input').forEach(input => {
            if (input.type === 'radio' || input.type === 'checkbox') {
                input.checked = false;
            } else {
                input.value = '';
            }
        });

        // Сбрасываем высоту контейнера секций
        const container = participant.querySelector('.age-sections-container');
        if (container) {
            container.style.height = '0';
            container.style.overflow = 'hidden';
        }
    }

    // Кнопки уже настроены в HTML - не управляем их видимостью

    // Обработка отправки формы
    const inscriptionForm = document.getElementById('inscription-form');
    if (inscriptionForm) {
        inscriptionForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Временно включаем disabled поля перед отправкой
            const disabledInputs = this.querySelectorAll('input:disabled');
            disabledInputs.forEach(input => input.disabled = false);

            const formData = new FormData(this);
            formData.append('action', 'inscription_form');
            formData.append('inscription_nonce', ajax_object.inscription_nonce);

            // Возвращаем disabled состояние
            disabledInputs.forEach(input => input.disabled = true);

            fetch(ajax_object.ajax_url, {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('inscription-form').style.display = 'none';
                    document.getElementById('inscription-form-message').innerHTML = '<p class="success">Demande d\'inscription envoyée avec succès !</p>';
                })
                .catch(error => {
                    document.getElementById('inscription-form-message').innerHTML = '<p class="error">Erreur lors de l\'envoi</p>';
                });
        });
    }
});