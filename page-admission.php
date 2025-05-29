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

    <main id="admission" >

        <?php get_template_part( 'template-parts/breadcrumbs' );?>

        <section class="section our-story section-second bg-white" id="our-story-1">
            <div class="section-wrap">
                <h1>Admission</h1>
                <div class="section-container">
                    <div class="section-row last-of-type">
                        <div class="section-content">
                            <form class="form-container" action="" method="post">

                                <fieldset class="form-group">
                                    <input type="text" id="first_name" placeholder="Prénom *" name="first_name" required>
                                    <input type="text" id="last_name" placeholder="Nom *" name="last_name" required>
                                </fieldset>

                                <fieldset class="form-group">
                                    <input type="tel" id="phone" placeholder="Numéro de téléphone *" name="phone" required>
                                    <input type="email" id="email" placeholder="Email" name="email">
                                </fieldset>

                                <fieldset class="form-single-input full-width">
                                    <textarea id="comment" placeholder="Votre question" name="comment" rows="4"></textarea>
                                </fieldset>

                                <fieldset class="form-single-input">
                                    <label class="checkbox-label">
                                        <input class="checkbox" type="checkbox" name="consent" required>
                                        J’accepte la&nbsp;<a href="politique-confidentialite.html" target="_blank">politique de confidentialité</a>
                                    </label>
                                </fieldset>

                                <fieldset class="form-btn">
                                    <button class="btn btn-blue" type="submit">Envoyer</button>
                                </fieldset>
                            </form>
                        </div>

                        <div class="section-content">
                            <div class="section-content">
                                <h4>Nous vous invitons à nous contacter pour connaître les modalités d’admission</h4>
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
