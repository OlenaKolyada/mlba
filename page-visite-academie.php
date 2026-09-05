<?php
/**
 * Template Name: Visite de l'académie
 *
 * @package mlba
 */

get_header();
?>

<main class="main" id="visite-academie">
	<section class="section-wrap section-first no-padding-top">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<div class="academy-video">
				<video controls preload="metadata" playsinline>
					<source src="<?php echo esc_url( get_template_directory_uri() . '/assets/video/Visite-Mikhalev-Lanssens-Ballet-Academy.mp4' ); ?>" type="video/mp4">
					<?php esc_html_e( 'Votre navigateur ne prend pas en charge la lecture de cette vidéo.', 'mlba' ); ?>
				</video>
			</div>
		</div>
	</section>
</main>

<?php get_footer();
