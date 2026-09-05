<?php
/**
 * Template for displaying standard WordPress posts.
 *
 * @package mlba
 */

get_header();
?>

<main class="main" id="stages-item">
	<?php while ( have_posts() ) : the_post(); ?>
		<section class="section-wrap section-first no-padding-top">
			<div class="container">
				<div class="stages-content">
					<h1 class="title-has-subtitle"><?php the_title(); ?></h1>
					<p class="actualite-card-date"><time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></p>

					<div class="entry-content">
						<?php if ( has_post_thumbnail() ) :
							$image_url = wp_get_attachment_url( get_post_thumbnail_id() );
							$image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
							?>
							<figure class="frame stages-img">
								<a href="<?php echo esc_url( $image_url ); ?>" class="popup-image" title="<?php echo esc_attr( get_the_title() ); ?>">
									<img class="section-photo" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ?: get_the_title() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" />
								</a>
							</figure>
						<?php endif; ?>

						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
</main>

<?php get_footer();
