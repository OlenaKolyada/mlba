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
                                        <p><strong>Lundi 19h30-21h</strong> et / ou <strong>Jeudi 19h30-21h</strong></p>
                                        <div class="niveau-button">
                                            <a href="<?php echo get_permalink(124); ?>" class="btn btn-primary-color">S'inscrire</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-content-image">
                                    <div class="frame">
                                        <div class="swiper swiper-section-small">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/adulte-classique/adulte-classique1.jpg" class="popup-gallery"  title="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/adulte-classique/adulte-classique1.jpg"
                                                             alt="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova"
                                                             title="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova">
                                                    </a>
                                                </div>
                                            <div class="swiper-slide">
                                                <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/adulte-classique/adulte-classique2.jpg" class="popup-gallery"  title="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/adulte-classique/adulte-classique2.jpg"
                                                         alt="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova"
                                                         title="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/adulte-classique/adulte-classique3.jpg" class="popup-gallery"  title="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/adulte-classique/adulte-classique3.jpg"
                                                         alt="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova"
                                                         title="Mikhalev Lanssens Ballet Academy, Danse Adulte Classique. Crédit photo Marina Kudryashova">
                                                </a>
                                            </div>


                                            </div>
                                            <div class="swiper-pagination"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
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
