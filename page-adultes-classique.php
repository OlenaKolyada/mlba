<?php
/**
 * The template for displaying all pages
 * Template name: Adultes Classique
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

    <main class="main" id="adulte-classique">
            <section class="section-wrap section-first no-padding-top" id="intro">
                    <div class="container">
                        <h1>Danse classique pour adultes</h1>
                            <div class="section-row">
                                <div class="section-content-text">
                                    <div class="section-text">
                                        <p>Ce cours s’adresse aux adultes ayant déjà pratiqué la danse classique et souhaitant poursuivre ou retrouver leur passion. L’enseignement, de qualité et rigoureux, est adapté aux besoins d’un corps adulte : posture, placement, mobilité articulaire et conscience du mouvement sont au cœur du travail. C’est un moment privilégié, pour soi, dans un cadre bienveillant, entre passionnés, alliant exigence, plaisir de danser et respect du corps.</p>
                                        <p><strong>Mercredi 19h</strong> et / ou <strong>Jeudi 18h</strong></p>
                                        <div class="niveau-button">
                                            <a href="<?php echo get_permalink(124); ?>" class="btn btn-primary-color">S'inscrire</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-content-image">
                                    <div class="frame">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/images/no-photo.jpg" class="popup-image" title="Mikhalev Lanssens Ballet Academy, Cours Adulte Classique">
                                        <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/no-photo.jpg"
                                             alt="Mikhalev Lanssens Ballet Academy, Cours Adulte Classique"
                                             title="Mikhalev Lanssens Ballet Academy, Cours Adulte Classique" />
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
