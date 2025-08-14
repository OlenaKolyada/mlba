<?php
/**
 * The template for displaying all pages
 * Template name: Cours Barre a Terre Renforcement
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

    <main class="main" id="barre">
            <section class="section-wrap section-first no-padding-top" id="intro">
                    <div class="container">
                        <h1>Cours Barre à terre / Renforcement musculaire</h1>
                            <div class="section-row">
                                <div class="section-content-text">
                                    <div class="section-text">
                                        <p>Le Cours Barre à terre / Renforcement allie les principes de la barre à terre classique, inspirée directement des exercices techniques de danse classique, à des apports issus des méthodes Pilates et Yoga.</p>
                                        <p>Les objectifs&nbsp;:</p>
                                        <ul>
                                            <li>Améliorer la mobilité articulaire</li>
                                            <li>Développer une souplesse naturelle et durable</li>
                                            <li>Renforcer la tonicité musculaire profonde</li>
                                            <li>Prendre soin de sa posture et de son alignement</li>
                                            <li>Libérer les tensions, retrouver de l’aisance et du confort dans le mouvement</li>
                                        </ul>
                                        <p>Dans chaque séance, nous portons une attention particulière à la conscience corporelle, à la respiration, et au respect des limites de chacun, pour faire de ce moment un espace de ressourcement, où l’on prend le temps de s’occuper de soi. La pratique au sol permet de travailler en décharge du poids, limitant les contraintes articulaires et favorisant un engagement musculaire ciblé, en toute sécurité.</p>
                                        <p>Idéal pour&nbsp;:</p>
                                        <ul>
                                            <li>Les danseurs souhaitant entretenir ou affiner leur technique</li>
                                            <li>Les personnes cherchant à améliorer leur posture, leur souplesse, et leur tonus en douceur</li>
                                            <li>Toute personne désirant offrir à son corps un moment de bien-être et de recentrage</li>
                                        </ul>
                                        <p>Ce cours est accessible sans prérequis technique et s’adapte aux capacités de chacun.</p>
                                        <p><strong>Mardi 19h30-20h30</strong></p>
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
                                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/barre/barre1.jpg" class="popup-gallery" title="Mikhalev Lanssens Ballet Academy, Cours Barre à terre / Renforcement musculaire">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/barre/barre1.jpg"
                                                             alt="Mikhalev Lanssens Ballet Academy, Cours Barre à terre / Renforcement musculaire"
                                                             title="Mikhalev Lanssens Ballet Academy, Cours Barre à terre / Renforcement musculaire">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/barre/barre2.jpg" class="popup-gallery"  title="Mikhalev Lanssens Ballet Academy, Cours Barre à terre / Renforcement musculaire">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/barre/barre2.jpg"
                                                             alt="Mikhalev Lanssens Ballet Academy, Cours Barre à terre / Renforcement musculaire"
                                                             title="Mikhalev Lanssens Ballet Academy, Cours Barre à terre / Renforcement musculaire">
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
