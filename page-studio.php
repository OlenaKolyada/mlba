<?php
/**
 * The template for displaying all pages
 * Template name: Studio
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

    <main class="main" id="studio">
        <!--	Studio START-->
    <section class="section-wrap section-first no-padding-top">
        <div class="container">
            <div class="section-row">
                <div class="section-center">
                    <div class="section-text">
                        <h2>Studio</h2>
                        <p>Notre studio de ballet, lumineux et spacieux, offre un cadre idéal pour la danse, avec de grandes baies vitrées
                            et un parquet professionnel. Découvrez l'ambiance en images dans notre galerie photo.</p>
                    </div>
                    <div class="swiper-frame">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/academy/studio-1.jpg" class="popup-gallery"  title="Studio de Mikhalev Lanssens Ballet Academy">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/academy/studio-1.jpg"
                                             alt="Studio de Mikhalev Lanssens Ballet Academy"
                                             title="Studio de Mikhalev Lanssens Ballet Academy" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/academy/studio-2.jpg" class="popup-gallery"  title="Studio de Mikhalev Lanssens Ballet Academy">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/academy/studio-2.jpg"
                                             alt="Studio de Mikhalev Lanssens Ballet Academy"
                                             title="Studio de Mikhalev Lanssens Ballet Academy" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/academy/studio-3.jpg" class="popup-gallery"  title="Studio de Mikhalev Lanssens Ballet Academy">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/academy/studio-3.jpg"
                                             alt="Gallerie des photos de Mikhalev Lanssens Ballet Academy"
                                             title="Gallerie des photos de Mikhalev Lanssens Ballet Academy" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/academy/studio-4.jpg" class="popup-gallery"  title="Studio de Mikhalev Lanssens Ballet Academy">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/academy/studio-4.jpg"
                                             alt="Studio de Mikhalev Lanssens Ballet Academy"
                                             title="Studio de Mikhalev Lanssens Ballet Academy" />
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
    <!--	Studio END-->

    </main>
    <!--Side Dot Nav-->

<?php
// get_sidebar();
get_footer();
