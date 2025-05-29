<?php
/**
 * The template for displaying all pages
 * Template name: Inscription
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

    <main class="registration-form">

        <?php get_template_part( 'template-parts/breadcrumbs' );?>

        <section class="section registration-form" id="registration-form">
                    <div class="section-wrap">
                        <h1>Formulaire d'inscription</h1>
                        <div class="section-container">
                            <div class="section-row last-of-type">
                                <div class="section-content">
                                    <div class="form-wrapper">
                                        <form class="form-container" action="" method="post">
                                            <h3>Informations de contact</h3>
                                            <fieldset class="form-group">
                                                <label>
                                                    <input class="large" type="text" id="first_name" placeholder="Votre prénom *" name="first_name" required>
                                                </label>
                                                <label>
                                                    <input class="large" type="text" id="last_name" placeholder="Votre nom *" name="last_name" required>
                                                </label>
                                            </fieldset>

                                            <fieldset class="form-group">
                                                <label>
                                                    <input class="large" type="tel" id="phone" placeholder="Numéro de téléphone *" name="phone" required>
                                                </label>
                                                <label>
                                                    <input class="large" type="email" id="email" placeholder="Email" name="email">
                                                </label>
                                            </fieldset>
                                            <!--Participant START-->
                                            <div class="participant">
                                                <hr>
                                                <div class="participant-identity-block">
                                                    <h3>Information d'élève</h3>
                                                    <fieldset class="form-group">
                                                        <label>
                                                            <input class="large" type="text" id="first_name-participant" placeholder="Prénom d'élève *" name="first_name_participant" required>
                                                        </label>
                                                        <label>
                                                            <input class="large" type="text" id="last_name-participant" placeholder="Nom d'élève *" name="last_name_participant" required>
                                                        </label>
                                                    </fieldset>
                                                    <fieldset class="custom-checkbox">
                                                        <label class="custom-checkbox-label">
                                                            <input class="" type="checkbox" name="same-name-checkbox">
                                                            Utiliser les mêmes nom et prénom
                                                        </label>
                                                    </fieldset>
                                                </div>

                                                <div class="age-participant">
                                                    <fieldset class="form-single-input radio-buttons age-category">
                                                        <label>
                                                            <input type="radio" name="age-participant" value="6-7" required>
                                                            <span>6-7 ans</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="age-participant" value="8-9">
                                                            <span>8-9 ans</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="age-participant" value="10-11">
                                                            <span>10-11 ans</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="age-participant" value="12-14">
                                                            <span>12-14 ans</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="age-participant" value="15-17">
                                                            <span>15-17 ans</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="age-participant" value="18+">
                                                            <span>18+ ans</span>
                                                        </label>
                                                    </fieldset>
                                                </div>
                                                <div class="age-sections-container">
                                                    <!-- Initiation-->
                                                    <div class="initiation-section toggle-section" id="initiation-section">
                                                        <div class="class-option">
                                                            <h4>Initiation à la danse classique</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>

                                                    </div>

                                                    <!--Elementaire 1-->
                                                    <div class="elem-1-section toggle-section" id="elem-1-section">
                                                        <div class="class-option">
                                                            <h4>Classique Elémentaire Niveau 1</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>
                                                    </div>

                                                    <!--Elementaire 2-->
                                                    <div class="elem-2-section toggle-section" id="elem-2-section">
                                                        <div class="class-option">
                                                            <h4>Classique Elémentaire Niveau 2</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>
                                                    </div>

                                                    <!--Elementaire 3-->
                                                    <div class="elem-3-section toggle-section" id="elem-3-section">
                                                        <div class="class-option">
                                                            <h4>Classique Elémentaire Niveau 3</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="class-option">
                                                            <h4>Ado Contemporain</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>
                                                    </div>

                                                    <!--Ado-->
                                                    <div class="ado-section toggle-section" id="ado-section">
                                                        <div class="class-option">
                                                            <h4>Ado Classique Avancé</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="class-option">
                                                            <h4>Ado Contemporain</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>
                                                    </div>

                                                    <!--Adult-->
                                                    <div class="adult-section toggle-section" id="adult-section">
                                                        <div class="class-option">
                                                            <h4>Classique Intermediaire-Avancé</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="class-option">
                                                            <h4>Adultes Contemporain</h4>
                                                            <fieldset class="form-single-input checkboxes">
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-1">
                                                                    <span>Jeudi 15H<br>Studio Noureev</span>
                                                                </label>
                                                                <label>
                                                                    <input type="checkbox" name="schedule[]" value="option-2">
                                                                    <span>Samedi 12H<br>Studio Lifar</span>
                                                                </label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="add-remove-participant">
                                                <div class="add-participant">
                                                    <img class="add-remove-icon" src="icons/plus-icon.svg" alt="">Ajouter un élève
                                                </div>
                                                <div class="remove-participant">
                                                    <img class="add-remove-icon" src="icons/minus_icon.svg" alt="">Suprimer un élève
                                                </div>
                                            </div>

                                            <div class="form-button center">
                                                <div>
                                                    <fieldset class="custom-checkbox">
                                                        <label class="custom-checkbox-label">
                                                            <input class="" type="checkbox" name="consent" required>
                                                            J’accepte la&nbsp;<a href="politique-confidentialite.html" target="_blank">politique de confidentialité</a>
                                                        </label>
                                                    </fieldset>
                                                    <fieldset class="form-btn">
                                                        <button class="btn btn-blue" type="submit">Envoyer</button>
                                                    </fieldset>
                                                </div>
                                                <!--Participant END-->
                                                <!--Participant Template START-->
                                                <div class="participant-template">
                                                    <hr>
                                                    <div class="participant-identity-block">
                                                        <h3>Information d'élève</h3>
                                                        <fieldset class="form-group">
                                                            <label>
                                                                <input class="large" type="text" id="first_name-participant-" placeholder="Prénom d'élève *" name="first_name_participant" required>
                                                            </label>
                                                            <label>
                                                                <input class="large" type="text" id="last_name-participant-" placeholder="Nom d'élève *" name="last_name_participant" required>
                                                            </label>
                                                        </fieldset>
                                                    </div>

                                                    <div class="age-participant">
                                                        <fieldset class="form-single-input radio-buttons age-category">
                                                            <label>
                                                                <input type="radio" name="age-participant" value="6-7" required>
                                                                <span>6-7 ans</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="age-participant" value="8-9">
                                                                <span>8-9 ans</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="age-participant" value="10-11">
                                                                <span>10-11 ans</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="age-participant" value="12-14">
                                                                <span>12-14 ans</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="age-participant" value="15-17">
                                                                <span>15-17 ans</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="age-participant" value="18+">
                                                                <span>18+ ans</span>
                                                            </label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="age-sections-container">
                                                        <!-- Initiation-->
                                                        <div class="initiation-section toggle-section" id="initiation-section-">
                                                            <div class="class-option">
                                                                <h4>Initiation à la danse classique</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>

                                                        </div>

                                                        <!--Elementaire 1-->
                                                        <div class="elem-1-section toggle-section" id="elem-1-section-">
                                                            <div class="class-option">
                                                                <h4>Classique Elémentaire Niveau 1</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>
                                                        </div>

                                                        <!--Elementaire 2-->
                                                        <div class="elem-2-section toggle-section" id="elem-2-section-">
                                                            <div class="class-option">
                                                                <h4>Classique Elémentaire Niveau 2</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>
                                                        </div>

                                                        <!--Elementaire 3-->
                                                        <div class="elem-3-section toggle-section" id="elem-3-section-">
                                                            <div class="class-option">
                                                                <h4>Classique Elémentaire Niveau 3</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>

                                                            <div class="class-option">
                                                                <h4>Ado Contemporain</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>
                                                        </div>

                                                        <!--Ado-->
                                                        <div class="ado-section toggle-section" id="ado-section-">
                                                            <div class="class-option">
                                                                <h4>Ado Classique Avancé</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>

                                                            <div class="class-option">
                                                                <h4>Ado Contemporain</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>
                                                        </div>

                                                        <!--Adult-->
                                                        <div class="adult-section toggle-section" id="adult-section-">
                                                            <div class="class-option">
                                                                <h4>Classique Intermediaire-Avancé</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>

                                                            <div class="class-option">
                                                                <h4>Adultes Contemporain</h4>
                                                                <fieldset class="form-single-input checkboxes">
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-1">
                                                                        <span>Jeudi 15H<br>Studio Noureev</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="checkbox" name="schedule[]" value="option-2">
                                                                        <span>Samedi 12H<br>Studio Lifar</span>
                                                                    </label>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Participant Template END-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    </main>
    <!--Side Dot Nav-->

<?php
// get_sidebar();
get_footer();
