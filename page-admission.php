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
                <div class="section-content-center">
                    <div class="form-container">
                        <h2>Modalités d'audition</h2>
                        <p>Nous vous invitons à nous contacter pour connaître les modalités d’audition. Les champs indiqués par un astérisque (*) sont obligatoires et doivent être renseignés.</p>
                        <?php echo do_shortcode($mlba_options['admission-form-shortcode']) ?>
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
