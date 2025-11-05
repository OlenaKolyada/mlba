<?php
/**
 * Template for category "stages" — grid of thumbnails
 *
 * @package mlba
 */

get_header();
?>

    <main class="main" id="stages-category">
        <section class="section-wrap section-first no-padding-top">
            <div class="container">
                <h1>Stages</h1>
                <?php if ( have_posts() ) : ?>
                    <div class="stages-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="stage-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <p>Aucun stage trouvé.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

<?php
get_footer();
