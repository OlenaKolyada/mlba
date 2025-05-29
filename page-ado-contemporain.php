<?php
/**
 * The template for displaying all pages
 * Template name: Ado Contemporain
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

    <main >

        <?php get_template_part( 'template-parts/breadcrumbs' );?>

        <section class="section our-story section-second bg-white" id="our-story-1">
            <div class="section-wrap">
                <h1>Cours Ado Contemporain</h1>
                <div class="section-container no-margin">
                    <div class="section-row last-of-type">
                        <div class="section-content">
                            <div class="section-text no-margin">
                                <p>Le travail technique et/ ou d’atelier proposés durant les cours de danse contemporaine ont pour objectif d’affiner
                                    la qualité du geste et du mouvement par un travail , dans un premier temps , au sol, puis par la suite, debout.
                                    L’accent sera mis sur le centre de gravité, l’ancrage dans le sol pour gagner en puissance. La notion du poids,
                                    l’utilisation de l’espace, et le travail de différentes dynamiques de mouvements seront l’axe central du travail.
                                    Une variation chorégraphique pourra être abordée à la fin de chaque cours et /ou atelier . Elle visera à consolider
                                    l’ensemble de la transmission acquise durant les heures de cours. Le travail sera bien entendu adapté sur chaque niveau.
                                    Tous les 2 ans, il sera proposé un spectacle.</p>
                            </div>
                            <div class="planning-and-tarif">
                                <div class="section-planning">
                                    <h4>Planning</h4>
                                    <p>Mercredi 10H-11H studio Noureev</p>
                                    <p>Jeudi 18H30-19H30 studio Noureev</p>
                                    <p><strong>Durée du cours :</strong> 1H</p>
                                </div>
                                <div class="section-tarif">
                                    <h4>Tarifs</h4>
                                    <p>1 cours / semaine : €50 par mois</p>
                                    <p>2 cours / semaine : €75 par mois</p>
                                    <a href="formulaire-inscription.html" class="btn btn-mint">S'inscrire</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="photo-wrapper">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/ado-contemporain/ado-contemporain-1.jpg"
                                                 alt="Initiation à la danse classique"
                                                 title="Initiation à la danse classique">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/ado-contemporain/ado-contemporain-2.jpg"
                                                 alt="Initiation à la danse classique"
                                                 title="Initiation à la danse classique" />
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
            </div>
        </section>

    </main>
    <!--Side Dot Nav-->

<?php
// get_sidebar();
get_footer();
