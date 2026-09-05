<?php
/**
 * Template Name: Actualités
 *
 * Lists posts assigned to the standard WordPress "actualites" category.
 *
 * @package mlba
 */

get_header();

$paged = max( 1, get_query_var( 'paged' ) );
$news_query = new WP_Query(
	array(
		'category_name'  => 'actualites',
		'paged'          => $paged,
		'posts_per_page' => get_option( 'posts_per_page' ),
	)
);
?>

<main class="main" id="stages-category">
	<section class="section-wrap section-first no-padding-top">
		<div class="container">
			<h1><?php the_title(); ?></h1>

			<?php if ( $news_query->have_posts() ) : ?>
				<div class="stages-grid">
					<?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
						<article <?php post_class( 'stage-thumb' ); ?>>
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Lire %s', 'mlba' ), get_the_title() ) ); ?>">
									<?php the_post_thumbnail( 'stage-thumb', array( 'loading' => 'lazy' ) ); ?>
								</a>
							<?php endif; ?>

							<p class="actualite-card-date"><time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></p>
							<h2 class="stage-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</article>
					<?php endwhile; ?>
				</div>

				<?php
				echo '<nav class="actualites-pagination" aria-label="' . esc_attr__( 'Navigation des actualités', 'mlba' ) . '">';
				echo paginate_links(
					array(
						'total'   => $news_query->max_num_pages,
						'current' => $paged,
					)
				);
				echo '</nav>';
				?>
			<?php else : ?>
				<p><?php esc_html_e( 'Aucune actualité pour le moment.', 'mlba' ); ?></p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php
wp_reset_postdata();
get_footer();
