<?php
/**
 * The template for displaying all pages
 * Template name: Planning
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

    <main >

        <?php get_template_part( 'template-parts/breadcrumbs' );?>

        <section class="section our-story section-second bg-white" id="our-story-1">
            <div class="section-wrap">
                <h1>Planning</h1>
                <div class="section-container no-margin">
                    <div class="section-row last-of-type">
                        <div class="section-content">
                            <div class="section-text no-margin">

                                <table class="horaire-ballet">
                                    <thead>
                                    <tr>
                                        <th>Heure</th>
                                        <th>Lundi</th>
                                        <th>Mardi</th>
                                        <th>Mercredi</th>
                                        <th>Jeudi</th>
                                        <th>Vendredi</th>
                                        <th>Samedi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>9h00 - 10h30</td>
                                        <td>Ballet Débutant</td>
                                        <td>Ballet Intermédiaire</td>
                                        <td>Ballet Débutant</td>
                                        <td>Ballet Avancé</td>
                                        <td>Ballet Débutant</td>
                                        <td>Ballet Enfants</td>
                                    </tr>
                                    <tr>
                                        <td>11h00 - 12h30</td>
                                        <td>Pointes</td>
                                        <td>Contemporain</td>
                                        <td>Ballet Enfants</td>
                                        <td>Stretching</td>
                                        <td>Ballet Intermédiaire</td>
                                        <td>Ballet Avancé</td>
                                    </tr>
                                    <tr>
                                        <td>14h00 - 15h30</td>
                                        <td>Contemporain</td>
                                        <td>Ballet Enfants</td>
                                        <td>Ballet Intermédiaire</td>
                                        <td>Ballet Enfants</td>
                                        <td>Pointes</td>
                                        <td>Contemporain</td>
                                    </tr>
                                    <tr>
                                        <td>16h00 - 17h30</td>
                                        <td>Ballet Avancé</td>
                                        <td>Stretching</td>
                                        <td>Ballet Avancé</td>
                                        <td>Ballet Intermédiaire</td>
                                        <td>Ballet Avancé</td>
                                        <td>Stretching</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    <!--Side Dot Nav-->

<?php
// get_sidebar();
get_footer();
