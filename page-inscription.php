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

<main class="main" id="inscription">

    <!--	Inscription START-->
    <section class="section-wrap section-first no-padding-top">
        <div class="container">
            <h1>Formulaire d'inscription</h1>
            <div class="section-row">
                <div class="section-center">
                    <div class="section-text">
                        <div id="inscription-form-message" class="form-message" aria-live="polite"></div>
                        <div class="form-wrap">
                            <form class="form-container" action="" method="post" id="inscription-form">
                                <!--                                Info Contact START-->
                                <div class="info-contact">
                                    <h3>Informations de contact</h3>
                                    <fieldset class="form-group">
                                        <label>
                                            <input class="half-width" type="text" id="first_name" placeholder="Votre prénom *" name="first_name" required>
                                        </label>
                                        <label>
                                            <input class="half-width" type="text" id="last_name" placeholder="Votre nom *" name="last_name" required>
                                        </label>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label>
                                            <input class="half-width" type="tel" id="phone" placeholder="Numéro de téléphone *" name="phone" required>
                                        </label>
                                        <label>
                                            <input class="half-width" type="email" id="email" placeholder="Email" name="email">
                                        </label>
                                    </fieldset>
                                </div>
                                <!--                                Info Contact END-->

                                <!--Participant START-->
                                <div class="participant first-participant">
                                    <div class="participant-identity">
                                        <h3>Information d'élève</h3>
                                        <fieldset class="form-group">
                                            <label>
                                                <input class="half-width" type="text" id="first_name-participant"
                                                placeholder="Prénom d'élève *" name="first_name_participant" required>
                                            </label>
                                            <label>
                                                <input class="half-width" type="text" id="last_name-participant"
                                                placeholder="Nom d'élève *" name="last_name_participant" required>
                                            </label>
                                        </fieldset>
                                        <fieldset class="same-name">
                                            <label class="same-name-checkbox-label">
                                                <input class="" type="checkbox" name="same-name-checkbox">
                                                Utiliser les mêmes nom et prénom
                                            </label>
                                        </fieldset>
                                    </div>

                                    <div class="participant-age">
                                        <fieldset class="form-single-input radio-buttons age-buttons">
                                            <label>
                                                <input type="radio" name="participant-age" value="6-7 ans" required>
                                                <span>6-7 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age" value="8-9 ans">
                                                <span>8-9 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age" value="10-11 ans">
                                                <span>10-11 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age" value="12-14 ans">
                                                <span>12-14 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age" value="15-17 ans">
                                                <span>15-17 ans</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="participant-age" value="18+ ans">
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
                                                        <input type="checkbox" name="schedule[]" value="Initiation classique : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Initiation classique : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
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
                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 1 : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 1 : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
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
                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 2 : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 2 : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
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
                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 3 : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 3 : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Ado Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Ado Contemporain : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Ado Contemporain : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
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
                                                        <input type="checkbox" name="schedule[]" value="Ado Classique Avancé : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Ado Classique Avancé : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Ado Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Ado Contemporain : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Ado Contemporain : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
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
                                                        <input type="checkbox" name="schedule[]" value="Classique Intermediaire-Avancé : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Classique Intermediaire-Avancé : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
                                                    </label>
                                                </fieldset>
                                            </div>

                                            <div class="class-option">
                                                <h4>Adultes Contemporain</h4>
                                                <fieldset class="form-single-input checkboxes">
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Adultes Contemporain : Jeudi 15h Studio Noureev">
                                                        <span>Jeudi 15h<br>Studio Noureev</span>
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="schedule[]" value="Adultes Contemporain : Samedi 12h Studio Lifar">
                                                        <span>Samedi 12h<br>Studio Lifar</span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Participant END-->

                                <!--                                Add-Remove START-->
                                <div class="add-remove-participant">
                                    <div class="add-participant">
                                        <span class="plus">+</span> Ajouter un élève
                                    </div>
                                    <div class="remove-participant">
                                        <span class="plus">–</span> Suprimer un élève
                                    </div>
                                </div>
                                <!--                                Add-Remove END-->

                                <!--                                Button START-->
                                <div class="form-action">
                                    <fieldset class="action-checkbox">
                                        <label class="action-checkbox-label">
                                            <input class="" type="checkbox" name="consent" required>
                                            J’accepte la&nbsp;<a href="<?php echo get_permalink(143); ?>" target="_blank">politique de confidentialité</a>
                                        </label>
                                    </fieldset>
                                    <fieldset class="form-btn">
                                        <button class="btn btn-primary-color" type="submit">Envoyer</button>
                                    </fieldset>
                                </div>
                                <!--                                Button END-->

                                <!--                                Participant Template START-->
<!--                                <div class="participant-template">-->
<!--                                    <div class="participant-identity">-->
<!--                                        <h3>Information d'élève</h3>-->
<!--                                        <fieldset class="form-group">-->
<!--                                            <label>-->
<!--                                                <input class="half-width" type="text" id="first_name-participant-"
                                                     placeholder="Prénom d'élève *" name="first_name_participant">-->
<!--                                            </label>-->
<!--                                            <label>-->
<!--                                                <input class="half-width" type="text" id="last_name-participant-"
                                                    placeholder="Nom d'élève *" name="last_name_participant">-->
<!--                                            </label>-->
<!--                                        </fieldset>-->
<!--                                    </div>-->

<!--                                    <div class="participant-age">-->
<!--                                        <fieldset class="form-single-input radio-buttons age-buttons">-->
<!--                                            <label>-->
<!--                                                <input type="radio" name="participant-age" value="6-7 and">-->
<!--                                                <span>6-7 ans</span>-->
<!--                                            </label>-->
<!--                                            <label>-->
<!--                                                <input type="radio" name="participant-age" value="8-9 ans">-->
<!--                                                <span>8-9 ans</span>-->
<!--                                            </label>-->
<!--                                            <label>-->
<!--                                                <input type="radio" name="participant-age" value="10-11 ans">-->
<!--                                                <span>10-11 ans</span>-->
<!--                                            </label>-->
<!--                                            <label>-->
<!--                                                <input type="radio" name="participant-age" value="12-14 ans">-->
<!--                                                <span>12-14 ans</span>-->
<!--                                            </label>-->
<!--                                            <label>-->
<!--                                                <input type="radio" name="participant-age" value="15-17 ans">-->
<!--                                                <span>15-17 ans</span>-->
<!--                                            </label>-->
<!--                                            <label>-->
<!--                                                <input type="radio" name="participant-age" value="18+ ans">-->
<!--                                                <span>18+ ans</span>-->
<!--                                            </label>-->
<!--                                        </fieldset>-->
<!--                                    </div>-->
<!--                                    <div class="age-sections-container">-->
<!--                                        &lt;!&ndash; Initiation&ndash;&gt;-->
<!--                                        <div class="initiation-section toggle-section" id="initiation-section-">-->
<!--                                            <div class="class-option">-->
<!--                                                <h4>Initiation à la danse classique</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Initiation classique : Jeudi 15h Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Initiation classique : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->

<!--                                        </div>-->

<!--                                        &lt;!&ndash;Elementaire 1&ndash;&gt;-->
<!--                                        <div class="elem-1-section toggle-section" id="elem-1-section-">-->
<!--                                            <div class="class-option">-->
<!--                                                <h4>Classique Elémentaire Niveau 1</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 1 : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 1 : Jeudi 15h Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        &lt;!&ndash;Elementaire 2&ndash;&gt;-->
<!--                                        <div class="elem-2-section toggle-section" id="elem-2-section-">-->
<!--                                            <div class="class-option">-->
<!--                                                <h4>Classique Elémentaire Niveau 2</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 2 : Jeudi 15h Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 2 : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        &lt;!&ndash;Elementaire 3&ndash;&gt;-->
<!--                                        <div class="elem-3-section toggle-section" id="elem-3-section-">-->
<!--                                            <div class="class-option">-->
<!--                                                <h4>Classique Elémentaire Niveau 3</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 3 : Jeudi 15h Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Elémentaire 3 : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->

<!--                                            <div class="class-option">-->
<!--                                                <h4>Ado Contemporain</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Ado Contemporain : Jeudi 15h >Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Ado Contemporain : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        &lt;!&ndash;Ado&ndash;&gt;-->
<!--                                        <div class="ado-section toggle-section" id="ado-section-">-->
<!--                                            <div class="class-option">-->
<!--                                                <h4>Ado Classique Avancé</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Ado Classique Avancé : Jeudi 15h Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Ado Classique Avancé : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->

<!--                                            <div class="class-option">-->
<!--                                                <h4>Ado Contemporain</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Ado Contemporain : Jeudi 15h Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Ado Contemporain : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        &lt;!&ndash;Adult&ndash;&gt;-->
<!--                                        <div class="adult-section toggle-section" id="adult-section-">-->
<!--                                            <div class="class-option">-->
<!--                                                <h4>Classique Intermediaire-Avancé</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Classique Intermediaire-Avancé : Jeudi 15h Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Classique Intermediaire-Avancé : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->

<!--                                            <div class="class-option">-->
<!--                                                <h4>Adultes Contemporain</h4>-->
<!--                                                <fieldset class="form-single-input checkboxes">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Adultes Contemporain : Jeudi 15h Studio Noureev">-->
<!--                                                        <span>Jeudi 15h<br>Studio Noureev</span>-->
<!--                                                    </label>-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" name="schedule[]" value="Adultes Contemporain : Samedi 12h Studio Lifar">-->
<!--                                                        <span>Samedi 12h<br>Studio Lifar</span>-->
<!--                                                    </label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!--                        Participant Template END-->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    Inscription END-->
</main>

<?php
// get_sidebar();
get_footer();
