<?php
/**
 * The template for displaying all pages
 * Template name: Pre-Inscription
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mlba
 */

get_header();
?>

<main class="main" id="inscription">
    <section class="section-wrap section-first no-padding-top">
        <div class="container">
            <h1>Pré-Inscription</h1>
            <div class="section-row">
                <div class="section-content-center">
                        <p>La pré-inscription vous permet, dès à présent, de réserver une place sur le cours choisit. Les inscriptions se finalisent EN PRÉSENTIEL en ayant au préalable télécharger et rempli la <a href="<?php echo get_template_directory_uri();?>/assets/pdf/inscription.pdf">fiche de renseignement</a> et celle des <a href="<?php echo get_template_directory_uri();?>/assets/pdf/authorisation.pdf">autorisations parentales</a>.<br>
                            Les champs indiqués par un astérisque (*) sont obligatoires et doivent être renseignés.</p>
                    <div class="inscription-dates">
                        <h2><span>Dates d’inscriptions en présentiel&nbsp;:</span></h2>
                        <ul>
                            <li>Samedi 30 août 10h-13h</li>
                            <li>Mercredi 3 septembre 18h-20h</li>
                            <li>Samedi 6 septembre 10h-13h</li>
                        </ul>
                        <p class="cursive">Reprise des cours lundi&nbsp;8&nbsp;septembre&nbsp;!</p>
                    </div>
                </div>
            </div>
            <div class="section-row">
                <div class="section-content-center">
                    <div class="section-text">
                        <div id="inscription-form-message" class="form-message" aria-live="polite">
                            <div class="success">
                                Demande d'inscription envoyée avec succès !
                            </div>
                            <div class="error">
                                Erreur lors de l'envoi
                            </div>
                        </div>

                        <div class="form-wrap">
                            <form class="inscription-form-container" action="" method="post" id="inscription-form">

                                <!--Info Contact START-->
                                <div class="info-contact">
                                    <h3>Informations de contact</h3>
                                    <fieldset class="form-group">
                                        <label>
                                            <input class="half-width" type="text" id="first-name" placeholder="Votre prénom *" name="first-name" required>
                                            <div id="error-contact-first-name" class="error">Le prénom n’est pas valide</div>
                                        </label>
                                        <label>
                                            <input class="half-width" type="text" id="last-name" placeholder="Votre nom *" name="last-name" required>
                                            <div id="error-contact-last-name" class="error">Le nom n’est pas valide</div>
                                        </label>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label>
                                            <input class="half-width" type="tel" id="phone" placeholder="Numéro de téléphone *" name="phone" required>
                                            <div id="error-phone" class="error">Le numéro de téléphone n’est pas valide</div>
                                        </label>
                                        <label>
                                            <input class="half-width" type="email" id="email" placeholder="Email *" name="email" required>
                                            <div id="error-email" class="error">L'email n’est pas valide</div>
                                        </label>
                                    </fieldset>
                                </div>
                                <!--Info Contact END-->

                                <!--Participant START-->
                                <div class="participant-1">
                                    <div class="participant-identity-1">
                                        <h3>Information d'élève</h3>
                                        <fieldset class="form-group">
                                            <label>
                                                <input class="half-width" type="text" id="first-name-participant-1"
                                                       placeholder="Prénom d'élève *" name="first-name-participant-1" required>
                                                <div id="error-participant-1-first-name" class="error">Le prénom n’est pas valide</div>
                                            </label>
                                            <label>
                                                <input class="half-width" type="text" id="last-name-participant-1"
                                                       placeholder="Nom d'élève *" name="last-name-participant-1" required>
                                                <div id="error-participant-1-last-name" class="error">Le nom n’est pas valide</div>
                                            </label>
                                        </fieldset>
                                        <fieldset class="same-name">
                                            <label class="same-name-checkbox-label">
                                                <input class="" type="checkbox" name="same-name-checkbox">
                                                Utiliser les mêmes nom et prénom
                                            </label>
                                        </fieldset>
                                    </div>

                                    <div class="participant-age-1">
                                        <fieldset class="form-single-input radio-buttons age-buttons">
                                            <label>
                                                <input type="radio" name="participant-age-1" value="5-7 ans" required>
                                                <span>5-7 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-1" value="8-9 ans">
                                                <span>8-9 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-1" value="10-11 ans">
                                                <span>10-11 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-1" value="12-14 ans">
                                                <span>12-14 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-1" value="15-17 ans">
                                                <span>15-17 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-1" value="18+ ans">
                                                <span>18+ ans</span>
                                            </label>
                                        </fieldset>
                                    </div>

                                    <div class="age-sections-container" id="age-sections-container-1">

                                        <!-- Initiation-->
                                        <div class="initiation-section toggle-section" id="initiation-section-1">
                                            <div class="class-option">
                                                <h4>Initiation à la danse classique</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="init">
                                                        <input type="checkbox" name="schedule_1[]" value="Initiation classique : Mercredi 11h-12h">
                                                        <span>Mecredi<br>11h-12h</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Elementaire 1-->
                                        <div class="elem-1-section toggle-section" id="elem-1-section-1">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 1</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-1">
                                                        <input type="checkbox" name="schedule_1[]" value="Elémentaire 1 : Mercredi 16h30-18h">
                                                        <span>Mercredi<br>16h30-18h</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Elementaire 2-->
                                        <div class="elem-2-section toggle-section" id="elem-2-section-1">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 2</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-2">
                                                        <input type="checkbox" name="schedule_1[]" value="Elémentaire 2 : Lundi 18h-19h30">
                                                        <span>Lundi<br>18h-19h30</span>
                                                    </label>
                                                    <label class="elem-2">
                                                        <input type="checkbox" name="schedule_1[]" value="Elémentaire 2 : Jeudi 18h-19h30">
                                                        <span>Jeudi<br>18h-19h30</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Elementaire 3-->
                                        <div class="elem-3-section toggle-section" id="elem-3-section-1">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 3</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-3">
                                                        <input type="checkbox" name="schedule_1[]" value="Elémentaire 3 : Mardi 18h-19h30">
                                                        <span>Mardi<br>18h-19h30</span>
                                                    </label>
                                                    <label class="elem-3">
                                                        <input type="checkbox" name="schedule_1[]" value="Elémentaire 3 : Vendredi 18h-19h30">
                                                        <span>Vendredi<br>18h-19h30</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Ado Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-contempo">
                                                        <input type="checkbox" name="schedule_1[]" value="Ado Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Ado-->
                                        <div class="ado-section toggle-section" id="ado-section-1">
                                            <div class="class-option">
                                                <h4>Classique Avancé</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-avance">
                                                        <input type="checkbox" name="schedule_1[]" value="Classique Avancé : Mercredi 18h45-20h15">
                                                        <span>Mercredi<br>18h45-20h15</span>
                                                    </label>
                                                    <label class="ado-avance">
                                                        <input type="checkbox" name="schedule_1[]" value="Classique Avancé : Vendredi 18h45-20h15">
                                                        <span>Vendredi<br>18h45-20h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Ado Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-contempo">
                                                        <input type="checkbox" name="schedule_1[]" value="Ado Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Barre à terre / Renforcement</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="barre">
                                                        <input type="checkbox" name="schedule_1[]" value="Barre à terre / Renforcement : Mardi 19h30-20h30">
                                                        <span>Mardi<br>19h30-20h30</span>
                                                    </label>

                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Adult-->
                                        <div class="adult-section toggle-section" id="adult-section-1">
                                            <div class="class-option">
                                                <h4>Adultes Classique Inter/Avancé</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="adulte-avance">
                                                        <input type="checkbox" name="schedule_1[]" value="Adultes Classique Intermediaire/Avancé : Lundi 19h30-21h">
                                                        <span>Lundi<br>19h30-21h</span>
                                                    </label>
                                                    <label class="adulte-avance">
                                                        <input type="checkbox" name="schedule_1[]" value="Adultes Classique Intermediaire/Avancé : Jeudi 19h30-21h">
                                                        <span>Jeudi<br>19h30-21h</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Adultes Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="adulte-contempo">
                                                        <input type="checkbox" name="schedule_1[]" value="Adultes Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Barre à terre / Renforcement</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="barre">
                                                        <input type="checkbox" name="schedule_1[]" value="Barre à terre / Renforcement : Mardi 19h30-20h30">
                                                        <span>Mardi<br>19h30-20h30</span>
                                                    </label>

                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Participant END-->

                                <!--Participant 2 START-->
                                <div class="participant-2">
                                    <div class="participant-identity-2">
                                        <h3>Information d'élève №2</h3>
                                        <fieldset class="form-group">
                                            <label>
                                                <input class="half-width" type="text" id="first-name-participant-2"
                                                       placeholder="Prénom d'élève *" name="first-name-participant-2">
                                                <div id="error-participant-2-first-name" class="error">Le prénom n’est pas valide</div>
                                            </label>
                                            <label>
                                                <input class="half-width" type="text" id="last-name-participant-2"
                                                       placeholder="Nom d'élève *" name="last-name-participant-2">
                                                <div id="error-participant-2-last-name" class="error">Le nom n’est pas valide</div>
                                            </label>
                                        </fieldset>
                                    </div>

                                    <div class="participant-age-2">
                                        <fieldset class="form-single-input radio-buttons age-buttons">
                                            <label>
                                                <input type="radio" name="participant-age-2" value="5-7 ans">
                                                <span>5-7 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-2" value="8-9 ans">
                                                <span>8-9 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-2" value="10-11 ans">
                                                <span>10-11 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-2" value="12-14 ans">
                                                <span>12-14 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-2" value="15-17 ans">
                                                <span>15-17 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-2" value="18+ ans">
                                                <span>18+ ans</span>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="age-sections-container"  id="age-sections-container-2">

                                        <!--Initiation-->
                                        <div class="initiation-section toggle-section" id="initiation-section-2">
                                            <div class="class-option">
                                                <h4>Initiation à la danse classique</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="init">
                                                        <input type="checkbox" name="schedule_2[]" value="Initiation classique : Mercredi 11h-12h">
                                                        <span>Mecredi<br>11h-12h</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                        </div>

                                        <!--Elementaire 1-->
                                        <div class="elem-1-section toggle-section" id="elem-1-section-2">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 1</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-1">
                                                        <input type="checkbox" name="schedule_2[]" value="Elémentaire 1 : Mercredi 16h30-18h">
                                                        <span>Mercredi<br>16h30-18h</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Elementaire 2-->
                                        <div class="elem-2-section toggle-section" id="elem-2-section-2">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 2</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-2">
                                                        <input type="checkbox" name="schedule_2[]" value="Elémentaire 2 : Lundi 18h-19h30">
                                                        <span>Lundi<br>18h-19h30</span>
                                                    </label>
                                                    <label class="elem-2">
                                                        <input type="checkbox" name="schedule_2[]" value="Elémentaire 2 : Jeudi 18h-19h30">
                                                        <span>Jeudi<br>18h-19h30</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Elementaire 3-->
                                        <div class="elem-3-section toggle-section" id="elem-3-section-2">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 3</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-3">
                                                        <input type="checkbox" name="schedule_2[]" value="Elémentaire 3 : Mardi 18h-19h30">
                                                        <span>Mardi<br>18h-19h30</span>
                                                    </label>
                                                    <label class="elem-3">
                                                        <input type="checkbox" name="schedule_2[]" value="Elémentaire 3 : Vendredi 18h-19h30">
                                                        <span>Vendredi<br>18h-19h30</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Ado Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-contempo">
                                                        <input type="checkbox" name="schedule_2[]" value="Ado Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Ado-->
                                        <div class="ado-section toggle-section" id="ado-section-2">
                                            <div class="class-option">
                                                <h4>Classique Avancé</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-avance">
                                                        <input type="checkbox" name="schedule_2[]" value="Classique Avancé : Mercredi 18h45-20h15">
                                                        <span>Mercredi<br>18h45-20h15</span>
                                                    </label>
                                                    <label class="ado-avance">
                                                        <input type="checkbox" name="schedule_2[]" value="Classique Avancé : Vendredi 18h45-20h15">
                                                        <span>Vendredi<br>18h45-20h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Ado Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-contempo">
                                                        <input type="checkbox" name="schedule_2[]" value="Ado Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Barre à terre / Renforcement</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="barre">
                                                        <input type="checkbox" name="schedule_2[]" value="Barre à terre / Renforcement : Mardi 19h30-20h30">
                                                        <span>Mardi<br>19h30-20h30</span>
                                                    </label>

                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Adult-->
                                        <div class="adult-section toggle-section" id="adult-section-2">
                                            <div class="class-option">
                                                <h4>Adultes Classique Inter/Avancé</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="adulte-avance">
                                                        <input type="checkbox" name="schedule_2[]" value="Adultes Classique Intermediaire/Avancé : Lundi 19h30-21h">
                                                        <span>Lundi<br>19h30-21h</span>
                                                    </label>
                                                    <label class="adulte-avance">
                                                        <input type="checkbox" name="schedule_2[]" value="Adultes Classique Intermediaire/Avancé : Jeudi 19h30-21h">
                                                        <span>Jeudi<br>19h30-21h</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Adultes Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="adulte-contempo">
                                                        <input type="checkbox" name="schedule_2[]" value="Adultes Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Barre à terre / Renforcement</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="barre">
                                                        <input type="checkbox" name="schedule_2[]" value="Barre à terre / Renforcement : Mardi 19h30-20h30">
                                                        <span>Mardi<br>19h30-20h30</span>
                                                    </label>

                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Participant 2 END-->

                                <!--Participant 3 START-->
                                <div class="participant-3">
                                    <div class="participant-identity-3">
                                        <h3>Information d'élève №3</h3>
                                        <fieldset class="form-group">
                                            <label>
                                                <input class="half-width" type="text" id="first-name-participant-3"
                                                       placeholder="Prénom d'élève *" name="first-name-participant-3">
                                                <div id="error-participant-3-first-name" class="error">Le prénom n’est pas valide</div>
                                            </label>
                                            <label>
                                                <input class="half-width" type="text" id="last-name-participant-3"
                                                       placeholder="Nom d'élève *" name="last-name-participant-3">
                                                <div id="error-participant-3-last-name" class="error">Le nom n’est pas valide</div>
                                            </label>
                                        </fieldset>
                                    </div>

                                    <div class="participant-age-3">
                                        <fieldset class="form-single-input radio-buttons age-buttons">
                                            <label>
                                                <input type="radio" name="participant-age-3" value="5-7 ans">
                                                <span>5-7 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-3" value="8-9 ans">
                                                <span>8-9 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-3" value="10-11 ans">
                                                <span>10-11 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-3" value="12-14 ans">
                                                <span>12-14 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-3" value="15-17 ans">
                                                <span>15-17 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age-3" value="18+ ans">
                                                <span>18+ ans</span>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="age-sections-container"  id="age-sections-container-3">

                                        <!--Initiation-->
                                        <div class="initiation-section toggle-section" id="initiation-section-3">
                                            <div class="class-option">
                                                <h4>Initiation à la danse classique</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="init">
                                                        <input type="checkbox" name="schedule_3[]" value="Initiation classique : Mercredi 11h-12h">
                                                        <span>Mecredi<br>11h-12h</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                        </div>

                                        <!--Elementaire 1-->
                                        <div class="elem-1-section toggle-section" id="elem-1-section-3">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 1</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-1">
                                                        <input type="checkbox" name="schedule_3[]" value="Elémentaire 1 : Mercredi 16h30-18h">
                                                        <span>Mercredi<br>16h30-18h</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Elementaire 2-->
                                        <div class="elem-2-section toggle-section" id="elem-2-section-3">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 2</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-2">
                                                        <input type="checkbox" name="schedule_3[]" value="Elémentaire 2 : Lundi 18h-19h30">
                                                        <span>Lundi<br>18h-19h30</span>
                                                    </label>
                                                    <label class="elem-2">
                                                        <input type="checkbox" name="schedule_3[]" value="Elémentaire 2 : Jeudi 18h-19h30">
                                                        <span>Jeudi<br>18h-19h30</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Elementaire 3-->
                                        <div class="elem-3-section toggle-section" id="elem-3-section-3">
                                            <div class="class-option">
                                                <h4>Classique Elémentaire Niveau 3</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="elem-3">
                                                        <input type="checkbox" name="schedule_3[]" value="Elémentaire 3 : Mardi 18h-19h30">
                                                        <span>Mardi<br>18h-19h30</span>
                                                    </label>
                                                    <label class="elem-3">
                                                        <input type="checkbox" name="schedule_3[]" value="Elémentaire 3 : Vendredi 18h-19h30">
                                                        <span>Vendredi<br>18h-19h30</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Ado Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-contempo">
                                                        <input type="checkbox" name="schedule_3[]" value="Ado Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Ado-->
                                        <div class="ado-section toggle-section" id="ado-section-3">
                                            <div class="class-option">
                                                <h4>Classique Avancé</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-avance">
                                                        <input type="checkbox" name="schedule_3[]" value="Classique Avancé : Mercredi 18h45-20h15">
                                                        <span>Mercredi<br>18h45-20h15</span>
                                                    </label>
                                                    <label class="ado-avance">
                                                        <input type="checkbox" name="schedule_3[]" value="Classique Avancé : Vendredi 18h45-20h15">
                                                        <span>Vendredi<br>18h45-20h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Ado Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="ado-contempo">
                                                        <input type="checkbox" name="schedule_3[]" value="Ado Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Barre à terre / Renforcement</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="barre">
                                                        <input type="checkbox" name="schedule_3[]" value="Barre à terre / Renforcement : Mardi 19h30-20h30">
                                                        <span>Mardi<br>19h30-20h30</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!--Adult-->
                                        <div class="adult-section toggle-section" id="adult-section-3">
                                            <div class="class-option">
                                                <h4>Adultes Classique Inter/Avancé</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="adulte-avance">
                                                        <input type="checkbox" name="schedule_3[]" value="Adultes Classique Intermediaire/Avancé : Lundi 19h30-21h">
                                                        <span>Lundi<br>19h30-21h</span>
                                                    </label>
                                                    <label class="adulte-avance">
                                                        <input type="checkbox" name="schedule_3[]" value="Adultes Classique Intermediaire/Avancé : Jeudi 19h30-21h">
                                                        <span>Jeudi<br>19h30-21h</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Adultes Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="adulte-contempo">
                                                        <input type="checkbox" name="schedule_3[]" value="Adultes Contemporain : Lundi 18h15-19h15">
                                                        <span>Lundi<br>18h15-19h15</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Barre à terre / Renforcement</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label class="barre">
                                                        <input type="checkbox" name="schedule_3[]" value="Barre à terre / Renforcement : Mardi 19h30-20h30">
                                                        <span>Mardi<br>19h30-20h30</span>
                                                    </label>

                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Participant 3 END-->

                                <!--Button START-->
                                <div class="add-remove-participant">
                                    <div class="add-participant">
                                        <span class="plus">+</span> Ajouter un élève
                                    </div>
                                    <div class="remove-participant">
                                        <span class="plus">–</span> Suprimer un élève
                                    </div>
                                </div>

                                <div class="form-action">
                                    <div class="action-checkboxes">
                                        <fieldset class="action-checkbox">
                                            <label class="action-checkbox-label">
                                                <input class="" type="checkbox" name="consent" required>
                                                J’accepte la&nbsp;<a href="<?php echo get_permalink(143); ?>" target="_blank">politique de confidentialité</a>
                                            </label>
                                        </fieldset>
                                        <fieldset class="action-checkbox">
                                            <label class="action-checkbox-label">
                                                <input class="" type="checkbox" name="consent2" required>
                                                Je comprends que la pré-inscription sera prise en compte à réception des 30€ d’adhésion et est non remboursable en cas de désistement.
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div id="validation-message" class="validation-message" aria-live="polite">
                                        <div class="error choose-class">
                                            Veuillez choisir au moins un cours pour chaque élève.
                                        </div>
                                    </div>
                                    <fieldset class="form-btn">
                                        <button class="btn btn-ghost" type="reset">Effacer</button>
                                        <button class="btn btn-primary-color" type="submit">Envoyer</button>
                                    </fieldset>
                                </div>
                                <!--Button END-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// get_sidebar();
get_footer();
