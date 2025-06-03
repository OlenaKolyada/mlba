<?php
/**
 * The template for displaying all pages
 * Template name: Adultes Contemporain
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

    <main class="main" id="adulte-contemporain">
            <section class="section-wrap section-first no-padding-top" id="intro">
                    <div class="container">
                        <h1>Cours Adulte Contemporain</h1>
                            <div class="section-row">
                                <div class="section-content-text">
                                    <div class="section-text">
                                        <p>!!! MANQUE DU TEXTE !!!</p>
                                        <p><strong>Mercredi 19h</strong> et / ou <strong>Jeudi 18h</strong></p>
                                        <div class="niveau-button">
                                            <a href="<?php echo get_permalink(124); ?>" class="btn btn-primary-color">S'inscrire</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-content-image">
                                    <div class="frame">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/images/no-photo.jpg" class="popup-image" title="Mikhalev Lanssens Ballet Academy, Cours Adulte Contemporain">
                                        <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/no-photo.jpg"
                                             alt="Mikhalev Lanssens Ballet Academy, Cours Adulte Contemporainn"
                                             title="Mikhalev Lanssens Ballet Academy, Cours Adulte Contemporain" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section>
    </main>

<?php
// get_sidebar();
get_footer();
