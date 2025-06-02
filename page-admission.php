<?php
/**
 * The template for displaying all pages
 * Template name: Admission
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

<main class="main" id="admission">
    <!--	Admission START-->
    <section class="section-wrap section-first no-padding-top">
        <div class="container">
            <div class="section-row">
                <div class="section-center">
                    <div class="section-text">
                        <h2 id="admission-page-form-title">Modalités d'admission</h2>
                        <p id="admission-page-form-text">Nous vous invitons à nous contacter pour connaître les modalités d’admission.</p>
                        <form class="form-container" action="" method="post"  id="admission-page-form">
                            <fieldset class="form-group">
                                <label for="first_name" class="sr-only"></label>
                                <input type="text" class="half-width" id="first_name"
                                       placeholder="Prénom *" name="first_name" required>
                                <label for="last_name" class="sr-only"></label>
                                <input type="text" class="half-width" id="last_name"
                                       placeholder="Nom *" name="last_name" required>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="phone"  class="sr-only"></label>
                                <input type="tel" class="half-width" id="phone"
                                       placeholder="Numéro de téléphone *" name="phone" required>
                                <label for="email"  class="sr-only"></label>
                                <input type="email" class="half-width" id="email"
                                       placeholder="Email" name="email">
                            </fieldset>
                            <fieldset class="form-single-input full-width">
                                <label for="comment"  class="sr-only"></label>
                                <textarea id="comment" placeholder="Commentaire" name="comment" rows="4"></textarea>
                            </fieldset>
                            <fieldset class="form-single-input">
                                <label class="checkbox-label">
                                    <input class="checkbox" type="checkbox" name="consent" required>
                                    J’accepte la&nbsp;<a href="<?php echo get_permalink(143); ?>" target="_blank">politique de confidentialité</a>
                                </label>
                            </fieldset>
                            <fieldset class="form-btn">
                                <button class="btn btn-primary-color" type="submit">Envoyer</button>
                            </fieldset>
                        </form>
                        <div id="admission-page-message" class="form-message" aria-live="polite"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    Admission END-->
    </main>

<?php
// get_sidebar();
get_footer();
