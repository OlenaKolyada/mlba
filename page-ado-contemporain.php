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

    <main class="main" id="ado-contemporain">
        <section class="section-wrap section-first no-padding-top" id="intro">
                <div class="container">
                    <h1>Cours Ado Contemporain</h1>
                        <div class="section-row">
                            <div class="section-content-text">
                                <div class="section-text">
                                    <p>La danse contemporaine pour les adolescents est une formidable porte d’entrée dans le mouvement, l’écoute et l’expression.
                                       À travers des ateliers ludiques d'exploration et d’improvisation, les enfants découvrent les bases de cette discipline&nbsp;: comment s’ancrer dans le sol, comment sentir leur corps en mouvement, comment jouer avec l’équilibre et le déséquilibre, les spirales, les appuis et la verticalité.</p>
                                       <p>Ils apprennent à écouter l’espace, à danser avec les autres, à sentir les silences et les respirations entre les mouvements. On travaille aussi le contact, le toucher, le poids du corps, toujours dans le respect de soi et de l'autre.</p>
                                       <p>Les ateliers permettent à chaque enfant de trouver sa place, son langage corporel, et de développer une expression personnelle, sincère, qui va au-delà de l’imitation ou de la répétition.</p>
                                       <p>L’objectif est d’éveiller la créativité tout en posant les premières bases techniques qui permettront à chacun de progresser dans la conscience du corps, de l’espace, du temps… et du plaisir de danser&nbsp;!</p>
                                    <p><strong>Lundi 18h15-19h15</strong></p>
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
                                                <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/ado-contemporain/ado-contempo1.jpg" class="popup-gallery"  title="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/ado-contemporain/ado-contempo1.jpg"
                                                         alt="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova"
                                                         title="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/ado-contemporain/ado-contempo2.jpg" class="popup-gallery"  title="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/ado-contemporain/ado-contempo2.jpg"
                                                         alt="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova"
                                                         title="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/ado-contemporain/ado-contempo3.jpg" class="popup-gallery"  title="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/ado-contemporain/ado-contempo3.jpg"
                                                         alt="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova"
                                                         title="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova">
                                                </a>
                                            </div>
                                        <div class="swiper-slide">
                                                <a href="<?php echo get_template_directory_uri();?>/assets/images/loisir/ado-contemporain/ado-contempo4.jpg" class="popup-gallery"  title="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/ado-contemporain/ado-contempo4.jpg"
                                                         alt="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova"
                                                         title="Mikhalev Lanssens Ballet Academy, Danse Ado Contemporain. Professeur Alexia Séré. Crédit photo Marina Kudryashova">
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
