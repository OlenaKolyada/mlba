<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mlba
 */

get_header();
?>

	<main id="primary" class="site-main">
                <section class="section-wrap section-first error-404 no-padding-top not-found">
                    <div class="container">
                        <div class="section-row">
                            <div class="section-center">
                                <div class="section-text">
                                    <h1>404 Not found</h1>
                                    <a href="<?php echo get_home_url();?>">Retour à l'accueil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
<?php
get_footer();
