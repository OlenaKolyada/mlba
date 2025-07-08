<?php
/**
 * The template for displaying all pages
 * Template name: Professeurs Barre
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

    <main class="main professeurs" id="professeurs-barre">
    <!--	Salome Bouyer START-->
    <section class="section-wrap section-first no-padding-top" id="salome-bouyer">
        <div class="container">
            <h1>Professeur de barre à terre</h1>
            <div class="section-row">
                <div class="section-content-image">
                    <div class="frame">
                        <div class="swiper swiper-section-small">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/profs/salome-bouyer/salome-bouyer1.jpg" class="popup-gallery"  title="Salomé Bouyer">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/profs/salome-bouyer/salome-bouyer1.jpg"
                                             alt="Salomé Bouyer"
                                             title="Salomé Bouyer">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/profs/salome-bouyer/salome-bouyer2.jpg" class="popup-gallery"  title="Salomé Bouyer">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/profs/salome-bouyer/salome-bouyer2.jpg"
                                             alt="Salomé Bouyer"
                                             title="Salomé Bouyer" />
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content-text">
                    <div class="section-text">
                        <h2 class="title-has-subtitle">Salomé Bouyer</h2>
                        <div class="subtitle">
                            Professeure de danse contemporaine, Pilates et Yoga
                        </div>
                        <p>Salomé Bouyer est professeure de danse contemporaine, de pilates et actuellement en train de se former au yoga.                        </p>
                        <p>Elle a suivit un cursus au Conservatoire à rayonnement départemental d’Orléans oú elle a obtenu le certificat d’études chorégraphiques en contemporain. Elle a ensuite poursuivi son parcours au Conservatoire à rayonnement régional de Poitiers où elle a obtenu son diplôme national à orientation professionnelle avec mention en parallèle avec une licence de Lettres en Sciences du langage. Elle est ainsi entrée au pôle supérieur de la musique et de la danse de Bordeaux oú elle a validé son Diplôme d’état de professeure de danse contemporaine. </p>
                        <p>L’enseignement a toujours été pour elle une évidence. Le partage fait partie intégrante des valeurs qu’elle cultive.</p>
                        <p>De plus, Salomé a voulu étendre ses aptitudes en passant la certification de pilates matwork 1 et 2. Le pilates représente une continuité parfaite à son parcours de danseuse. Elle a également passé récemment une certification Yoga fondamental pour s’immerger davantage dans l’univers du bien être. </p>
                        <p>Elle vous proposera un cours de barre à terre qui mêlera des principes de technique de danse classique à des fondamentaux issus des méthodes Pilates et du Yoga. Cette séance vous apportera souplesse, mobilité et viendra aussi renforcer toute la musculature profonde du corps. Les exercices au sol permettent de travailler en décharge du poids, limitant ainsi les contraintes articulaires favorisant un engagement musculaire ciblé, en toute sécurité.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Salome Bouyer END-->

</main>

<!--Scroll Dots Nav START-->
<nav class="scroll-dots-nav" aria-label="Navigation de section">
    <ul>
        <li><a href="#salome-bouyer" data-target="salome-bouyer" data-offset="150" data-label="Salomé Bouyer"></a></li>
    </ul>
</nav>
<!--Scroll Dots Nav END-->
<?php
// get_sidebar();
get_footer();