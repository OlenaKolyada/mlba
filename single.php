<?php
/**
 * Template for displaying single "stage" post — image floated right with text wrapping
 *
 * @package mlba
 */

get_header();
?>

    <main class="main" id="stages-item">
        <section class="section-wrap section-first no-padding-top">
            <div class="container">
                        <?php if ( have_posts() ) : the_post(); ?>
                            <div class="stages-content">
                                <h1 class="title-has-subtitle"><?php the_title(); ?></h1>

                                <div class="entry-content">
                                    <?php if ( has_post_thumbnail() ) :
                                        $image_url = wp_get_attachment_url( get_post_thumbnail_id() );
                                        $image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
                                        $image_title = get_the_title();
                                        ?>
                                        <figure class="frame stages-img">
                                            <a href="<?php echo esc_url( $image_url ); ?>"
                                               class="popup-image"
                                               title="<?php echo esc_attr( $image_title ); ?>">
                                                <img class="section-photo"
                                                     src="<?php echo esc_url( $image_url ); ?>"
                                                     alt="<?php echo esc_attr( $image_alt ?: $image_title ); ?>"
                                                     title="<?php echo esc_attr( $image_title ); ?>" />
                                            </a>
                                        </figure>
                                    <?php endif; ?>

                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
        </section>
    </main>

<?php
get_footer();
