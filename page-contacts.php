<?php
/**
 * The template for displaying all pages
 * Template name: Contacts
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

<main class="main" id="contacts">

    <!--	Contacts START-->
    <section class="section-wrap section-first no-padding-top">
        <div class="container">
            <div class="section-row">
                <div class="section-content-text">
                    <div class="section-text">
                        <?php if($mlba_options['contact-page-title']): ?>
                        <h2><?php echo $mlba_options['contact-page-title'];?></h2>
                        <?php endif;?>
                        <div class="main-contacts-wrap">
                            <div class="three-items-wrap">
                                <div class="three-items-row">

                                    <div class="three-items-item">

                                        <img class="main-contacts-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/location-mint.svg" alt="">
                                        <div class="three-items-text">
                                            <?php if($mlba_options['address']): ?>
                                            <a href="<?php echo $mlba_options['google-maps'];?>" target="_blank"
                                               rel="noopener noreferrer">
                                                <?php echo $mlba_options['address'];?>
                                            </a>
                                            <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="three-items-item">
                                        <img class="main-contacts-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/phone-mint.svg" alt="">
                                        <div class="three-items-text">
                                            <?php if($mlba_options['phone']): ?>
                                            <a href="tel:<?php echo $mlba_options['phone'];?>" target="_blank" rel="noopener noreferrer">
                                                <?php echo $mlba_options['phone'];?></a><br>
                                                <?php endif;?>
                                            <?php if($mlba_options['email']): ?>
                                            <a href="mailto:<?php echo $mlba_options['email'];?>"><?php echo $mlba_options['email'];?></a>
                                            <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="three-items-item">
                                        <img class="main-contacts-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/clock-mint.svg" alt="">

                                        <div class="three-items-text">
                                            <?php if($mlba_options['schedule']): ?>
                                            <?php echo $mlba_options['schedule'];?>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="google-map">
                                <?php if($mlba_options['google-maps-iframe']): ?>
                                    <?php echo $mlba_options['google-maps-iframe'];?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content-text">
                    <div class="section-text">
                        <?php if($mlba_options['contact-page-form-title']): ?>
                        <h2 id="contact-form-title"><?php echo $mlba_options['contact-page-form-title'];?></h2>
                        <?php endif;?>
                        <div class="main-contacts-wrap">
                            <form class="form-container" action="" method="post" id="contact-page-form">
                                <fieldset class="form-group">
                                    <label for="first_name" class="sr-only"></label>
                                    <input type="text" class="half-width" id="first_name"
                                           placeholder="Prénom *" name="first_name" required>
                                    <label for="last_name" class="sr-only"></label>
                                    <input type="text" class="half-width" id="last_name"
                                           placeholder="Nom *" name="last_name" required>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="phone"  class="sr-only"></label>
                                    <input type="tel" class="half-width" id="phone"
                                           placeholder="Numéro de téléphone *" name="phone" required>
                                           placeholder="Numéro de téléphone *" name="phone" required>
                                    <label for="email"  class="sr-only"></label>
                                    <input type="email" class="half-width" id="email"
                                           placeholder="Email" name="email">
                                </fieldset>
                                <fieldset class="form-single-input full-width">
                                    <label for="comment"  class="sr-only"></label>
                                    <textarea id="comment" placeholder="Votre question" name="comment" rows="4"></textarea>
                                </fieldset>
                                <fieldset class="form-single-input">
                                    <label class="checkbox-label">
                                        <input class="checkbox" type="checkbox" name="consent" required id="consent">
                                        J’accepte la&nbsp;<a href="<?php echo get_permalink(143); ?>" target="_blank">politique de confidentialité</a>
                                    </label>
                                </fieldset>
                                <fieldset class="form-btn">
                                    <button class="btn btn-primary-color" type="submit">Envoyer</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div id="contact-form-message" class="form-message" aria-live="polite"></div>
                </div>
            </div>
        </div>
    </section>

    </main>

<?php
// get_sidebar();
get_footer();
