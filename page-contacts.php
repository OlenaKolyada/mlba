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

    <main class="main contacts-page">

        <?php get_template_part( 'template-parts/breadcrumbs' );?>

        <section class="section our-story section-second bg-white" id="our-story-1">
            <div class="section-wrap">
                <h1>Contacts</h1>
                <div class="section-container">
                    <div class="section-row last-of-type">
                        <div class="section-center">

                            <!--Contacts-->
                            <div class="section-row last-of-type">
                                <div class="section-content">
                                    <div class="section-text">
                                        <p>Venez nous rencontrer : nous serons ravis de vous accueillir et de vous aider à choisir votre parcours.
                                        </p>
                                    </div>

                                    <!--Three Item Grid-->
                                    <div class="items-row-wrap">
                                        <div class="items-row">
                                            <div class="three-items-item">
                                                <img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/location_blue.png" alt="">
                                                <a href="https://maps.app.goo.gl/9wLLnVA6TqUdcupN6" target="_blank" class="no-decoration" rel="noopener noreferrer">
                                                    <p class="three-items-text">152 Av. Jean Jaurès<br>33600 Pessac</p>
                                                </a>
                                            </div>
                                            <div class="three-items-item">
                                                <img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/envelope_blue.png" alt="">
                                                <p class="three-items-text"><a  class="no-decoration" href="tel:+33609756230" target="_blank" rel="noopener noreferrer">
                                                        + 33 6 09 75 62 30</a><br>
                                                    <a href="mailto:contact@mlba.fr">contact@mlba.fr</a></p>
                                            </div>
                                            <div class="three-items-item">
                                                <img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock_blue.png" alt="">
                                                <p class="three-items-text">Du lundi au vendredi<br>
                                                    de 9h00 à 21h00<br>
                                                    Samedi 9h00 à 13h00</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Google Map-->
                                    <div class="google-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.486978541365!2d-0.6172210233234816!3d44.81164287674065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54d8620ba5c94b%3A0xaf353211b9bbb9cf!2s152%20Av.%20Jean%20Jaur%C3%A8s%2C%2033600%20Pessac!5e0!3m2!1sen!2sfr!4v1745945878811!5m2!1sen!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>

                                <!--Contact Form-->
                                <div class="section-content">

                                    <form class="form-container" action="" method="post">
                                                                            <h4>Formulaire de contact</h4>
                                                                            <fieldset class="form-group">
                                                                                    <input type="text" id="first_name" placeholder="Prénom *" name="first_name" required>
                                                                                    <input type="text" id="last_name" placeholder="Nom *" name="last_name" required>
                                                                            </fieldset>

                                                                            <fieldset class="form-group">
                                                                                <input type="tel" id="phone" placeholder="Numéro de téléphone *" name="phone" required>
                                                                                <input type="email" id="email" placeholder="Email" name="email">
                                                                            </fieldset>

                                                                            <fieldset class="form-single-input full-width">
                                                                                <textarea id="comment" placeholder="Votre question" name="comment" rows="4"></textarea>
                                                                            </fieldset>

                                                                            <fieldset class="form-single-input">
                                                                                <label class="checkbox-label">
                                                                                    <input class="checkbox" type="checkbox" name="consent" required>
                                                                                    J’accepte la&nbsp;<a href="politique-confidentialite.html" target="_blank">politique de confidentialité</a>
                                                                                </label>
                                                                            </fieldset>

                                                                            <fieldset class="form-btn">
                                                                                <button class="btn btn-blue" type="submit">Envoyer</button>
                                                                            </fieldset>
                                                                        </form>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
    <!--Side Dot Nav-->

<?php
// get_sidebar();
get_footer();
