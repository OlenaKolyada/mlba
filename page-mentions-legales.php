<?php
/**
 * The template for displaying all pages
 * Template name: Mentions Legales
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

<main class="main" id="mentions">
    <section class="section-wrap section-first no-padding-top longread" id="article1">
        <div class="container">
            <h1>Mentions légales</h1>
            <div class="section-row">
                <div class="section-content-text">
                    <div class="section-text">
                        <h2><span>Conditions d’utilisation</span></h2>
                        <p>Le site accessible à l’adresse www.mlba.fr est exploité conformément à la législation française. Son utilisation implique l’acceptation pleine et entière des présentes conditions générales. En naviguant sur le site, vous reconnaissez avoir lu et accepté ces conditions. Celles-ci peuvent être modifiées à tout moment et sans préavis par la Mikhalev Lanssens Ballet Academy (MLBA).</p>
                        <p>La MLBA ne saurait être tenue responsable d’une utilisation inappropriée du site ou des services proposés.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Article 1 END-->

    <!--	Article 2 START-->
    <section class="section-wrap longread" id="article2">
        <div class="container">
            <div class="section-row">
                <div class="section-content-text">
                    <div class="section-text">
                        <h2><span>Responsable éditorial</span></h2>
                        <p class="address"><strong>Mikhalev Lanssens Ballet Academy</strong><br>
                            152 Avenue Jean Jaurès<br>
                            33600 Pessac<br>
                            France<br>
                       <a href="mailto:contact@mlba.fr" class="underlined">contact@mlba.fr</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Article 2 END-->

    <!--	Article 3 START-->
    <section class="section-wrap longread" id="article3">
        <div class="container">
            <div class="section-row">
                <div class="section-content-text">
                    <div class="section-text">
                        <h2><span>Hébergement</span></h2>
                        <p>OVH<br><a href="https://www.ovh.com/fr" target="_blank" class="underlined">www.ovh.com/fr</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Article 3 END-->

    <!--	Article 4 START-->
    <section class="section-wrap longread" id="article4">
        <div class="container">
            <div class="section-row">
                <div class="section-content-text">
                    <div class="section-text">
                        <h2><span>Propriété intellectuelle</span></h2>
                        <p>L’ensemble des éléments présents sur ce site (textes, images, graphismes, logos, vidéos, sons, icônes, etc.), ainsi que leur structure et leur mise en forme, sont la propriété exclusive de la MLBA, sauf mention contraire.</p>
                        <p>Toute reproduction, distribution, modification, adaptation, diffusion ou publication, même partielle, de ces contenus est strictement interdite sans autorisation écrite préalable de la MLBA. Toute utilisation non autorisée constitue une contrefaçon, susceptible d’engager la responsabilité civile et pénale de son auteur, conformément aux articles L.335-2 et suivants du Code de la propriété intellectuelle.</p>
                        <p>Pour toute demande d’autorisation ou d'information, vous pouvez nous contacter à : <a href="mailto:contact@mlba.fr" class="underlined">contact@mlba.fr</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Article 4 END-->

    <!--	Article 5 START-->
    <section class="section-wrap longread" id="article5">
        <div class="container">
            <div class="section-row">
                <div class="section-content-text">
                    <div class="section-text">
                        <h2><span>Crédits</span></h2>
                        <h5>Conception graphique / développement :</h5>
                        <p>Olena Kolyada<br><a href="https://funkycorgi.com" target="_blank" class="underlined">funkycorgi.com</a></p>
                        <h5>Photos</h5>
                        <ul>
                            <li>O.R. Studio (Marina Kudryashova et Oleg Rogachev)</li>
                            <li>Sigried Colomyès</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Article 5 END-->
</main>

<!--Scroll Dots Nav START-->
<nav class="scroll-dots-nav" aria-label="Navigation de section">
    <ul>
        <li><a href="#article1" data-target="article1" data-offset="150" data-label="Article 1"></a></li>
        <li><a href="#article2" data-target="article2" data-offset="100" data-label="Article 2"></a></li>
        <li><a href="#article3" data-target="article3" data-offset="100" data-label="Article 3"></a></li>
        <li><a href="#article4" data-target="article4" data-offset="100" data-label="Article 4"></a></li>
        <li><a href="#article5" data-target="article5" data-offset="100" data-label="Article 5"></a></li>
    </ul>
</nav>
<!--Scroll Dots Nav END-->
<?php
// get_sidebar();
get_footer();
