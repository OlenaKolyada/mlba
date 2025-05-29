<?php
/**
 * The template for displaying all pages
 * Template name: Tarifs
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

        <section class="section tarifs section-second bg-white" id="our-story-1">
            <div class="section-wrap">
                        <div class="section-container no-margin">
                            <div class="section-row  last-of-type">
                                <div class="section-content">
                                                <div class="family-discount">
                                                    <p>5%&nbsp;de&nbsp;réduction dès&nbsp;le&nbsp;2<sup>e</sup>&nbsp;membre d'une&nbsp;même&nbsp;famille (le&nbsp;moins&nbsp;élevé des&nbsp;deux&nbsp;forfaits)</p>
                                                </div>
                                    <div class="section-text no-margin">
                                        <h2>Inscription à la MLBA</h2>
                                        <div class="tarif-inscription">
                                            <ul>
                                                <li>28€ / élève</li>
                                                <li>50€ / 2 élèves de la même famille</li>
                                            </ul>
                                        </div>
                                        <h2>Tarifs <sup>*</sup></h2>
                                        <div class="tarif-table">
                                            <div class="tarif-header">
                                                <div class="tarif-cell"></div>
                                                <div class="tarif-cell"></div>
                                                <div class="tarif-cell">Paiement en 1 fois<br>(-5%)</div>
                                                <div class="tarif-cell">Paiement en 3 fois</div>
                                                <div class="tarif-cell">Paiement en 10 fois</div>
                                            </div>
                                            <div class="tarif-row">
                                                <div class="tarif-cell first-cell">1 cours de 1H par semaine</div>
                                                <div class="tarif-cell">€500 / an</div>
                                                <div class="tarif-cell">€475 </div>
                                                <div class="tarif-cell">€165 x 3</div>
                                                <div class="tarif-cell">€50 x 10</div>
                                            </div>
                                            <div class="tarif-row">
                                                <div class="tarif-cell first-cell">1 cours de 1H30 par semaine</div>
                                                <div class="tarif-cell">€550 / an</div>
                                                <div class="tarif-cell">€522</div>
                                                <div class="tarif-cell">€183 x 3</div>
                                                <div class="tarif-cell">€55 x 10</div>
                                            </div>
                                            <div class="tarif-row">
                                                <div class="tarif-cell first-cell">2 cours de 1H30 par semaine</div>
                                                <div class="tarif-cell">€900 / an</div>
                                                <div class="tarif-cell">€855</div>
                                                <div class="tarif-cell">€300 x 3</div>
                                                <div class="tarif-cell">€90 x 10</div>
                                            </div>
                                            <div class="tarif-row">
                                                <div class="tarif-cell first-cell">2 cours (1H + 1H30) par semaine</div>
                                                <div class="tarif-cell">€850 / an</div>
                                                <div class="tarif-cell">€807</div>
                                                <div class="tarif-cell">€283 x 3</div>
                                                <div class="tarif-cell">€85 x 10</div>
                                            </div>
                                            <div class="tarif-row">
                                                <div class="tarif-cell first-cell">3 cours par semaine</div>
                                                <div class="tarif-cell">€1100 / an</div>
                                                <div class="tarif-cell">€1045</div>
                                                <div class="tarif-cell">€366 x 3</div>
                                                <div class="tarif-cell">€110 x 10</div>
                                            </div>
                                            <div class="tarif-row">
                                                <div class="tarif-cell first-cell">Cours en illimité</div>
                                                <div class="tarif-cell">€1200 / an</div>
                                                <div class="tarif-cell">€1140</div>
                                                <div class="tarif-cell">€400 x 3</div>
                                                <div class="tarif-cell">€120 x 10</div>
                                            </div>
                                            <div class="tarif-row">
                                                <div class="tarif-cell first-cell">Carte de 10 cours <sup>**</sup></div>
                                                <div class="tarif-cell">€165</div>
                                                <div class="tarif-cell"></div>
                                                <div class="tarif-cell"></div>
                                                <div class="tarif-cell"></div>
                                            </div>
                                            <div class="tarif-row">
                                                <div class="tarif-cell first-cell">Cours à l’unité</div>
                                                <div class="tarif-cell">€18</div>
                                                <div class="tarif-cell"></div>
                                                <div class="tarif-cell"></div>
                                                <div class="tarif-cell"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="note">
                                        <p><sup>*</sup> Les forfaits de la MLBA tiennent comptent des semaines de vacances scolaires.</p>
                                        <p><sup>**</sup> À utiliser entre septembre et juin de l’année scolaire en cours.</p>
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
