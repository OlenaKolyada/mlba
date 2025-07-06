<?php
/**
 * The template for displaying all pages
 * Template name: Professeurs Contempoarain
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

    <main class="main professeurs" id="professeurs-contemporain">
    <!--	Alexia Sere START-->
    <section class="section-wrap section-first no-padding-top" id="alexia-sere">
        <div class="container">
            <h1>Professeur de Contemporain</h1>
            <div class="section-row">
                <div class="section-content-image">
                    <div class="frame">
                        <div class="swiper swiper-section-small">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/profs/alexia-sere/alexia-sere1.jpg"
                                       class="popup-gallery"
                                       title="Alexia Séré">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/profs/alexia-sere/alexia-sere1.jpg"
                                             alt="Alexia Séré"
                                             title="Alexia Séré">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/profs/alexia-sere/alexia-sere.jpg"
                                       class="popup-gallery"
                                       title="Alexia Séré">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/profs/alexia-sere/alexia-sere.jpg"
                                             alt="Alexia Séré"
                                             title="Alexia Séré">
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
                        <h2 class="title-has-subtitle">Alexia Séré</h2>
                        <div class="subtitle">
                            Professeure de danse contemporaine, chorégraphe et pédagogue engagée
                        </div>
                        <p>Professeure de danse contemporaine, danseuse interprète et chorégraphe de la Compagnie Axelaxe, fondée il y a une vingtaine d’années.</p>
                        <p>Diplômée d’État à Bordeaux en 2000, elle enseigne depuis 18 ans au Conservatoire de Musique, Danse et Arts Dramatiques de Plaisir (78), où elle a également été coordinatrice du département Danse et responsable de la formation des élèves en cursus (de l’éveil au 3e cycle, ainsi que pour les adultes amateurs).</p>
                        <p>Elle a participé à de nombreux projets interdisciplinaires avec des professeurs de musique, de théâtre et d’arts dramatiques. Formatrice pédagogique pour les enseignants, elle est aussi intervenue en milieu scolaire (de la maternelle au lycée) ainsi que dans des projets Hors les Murs (ateliers parents-enfants, séniors, etc.).</p>
                        <p>Pour elle, le pédagogue est aussi interprète : il transmet à travers l’expérience sensible du mouvement. Elle accompagne les élèves dans la découverte de leur univers artistique grâce à l’apprentissage technique et à la conscience du corps, de l’âme et de l’esprit – « la triade » (J. Robinson).</p>
                        <p>Sa démarche vise à éveiller chez chacun « l’état de danse » à travers l’exploration, l’improvisation et la composition. Elle encourage aussi des approches transversales : vidéo, arts plastiques, théâtre, musique.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Alexia Sere END-->

</main>

<!--Scroll Dots Nav START-->
<nav class="scroll-dots-nav" aria-label="Navigation de section">
    <ul>
        <li><a href="#alexia-sere" data-target="alexia-sere" data-offset="150" data-label="Alexia Séré"></a></li>
    </ul>
</nav>
<!--Scroll Dots Nav END-->
<?php
// get_sidebar();
get_footer();