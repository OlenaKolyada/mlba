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

    <main class="main" id="tarifs">

        <!--	Tarifs START-->
            <section class="section-wrap section-first no-padding-top">
                <div class="container">
                    <h1>Tarifs</h1>
                    <div class="section-row">
                        <div class="section-content-text">
                            <div class="section-text">
                                <p>Les forfaits de la MLBA tiennent comptent des semaines de vacances scolaires.</p>
                                <p><strong>5% de réduction</strong> dès le 2<sup>e</sup> membre d'une même famille (le moins élevé des deux forfaits).</p>
                                <p>Vous pouvez régler en 10 fois (chèques encaissés le 5 de chaque mois) ou en 3 fois (chèques encaissés en septembre, janvier et avril).</p>

                                <h4>Frais d'adhésion</h4>
                                <div class="tarif-table small">
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">1 élève</div>
                                        <div class="tarif-cell">€30</div>

                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">2 élèves de la même famille</div>
                                        <div class="tarif-cell">€50</div>

                                    </div>
                                </div>

                                <h4>Cours à l’unité</h4>
                                <div class="tarif-table small">
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">1 cours</div>
                                        <div class="tarif-cell">€15</div>

                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">Carte de 10 cours <em>(à utiliser entre septembre et juin de l’année scolaire en cours)</em></div>
                                        <div class="tarif-cell">€150</div>

                                    </div>
                                </div>

                                <h4>Forfaits annuels</h4>
                                <div class="tarif-table large">

                                    <div class="tarif-header">
                                        <div class="tarif-cell first-cell"></div>
                                        <div class="tarif-cell">Tarif par<br>semaine</div>
                                        <div class="tarif-cell highlighted">
                                            <div class="highlight"></div>
                                            Paiement<br>en 1 fois<br>(- 5%)</div>
                                        <div class="tarif-cell">Paiement<br>en 3 fois</div>
                                        <div class="tarif-cell">Paiement<br>en 10 fois</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">1h / semaine</div>
                                        <div class="tarif-cell">€50</div>
                                        <div class="tarif-cell highlighted">€475 </div>
                                        <div class="tarif-cell">€165 x 3</div>
                                        <div class="tarif-cell">€50 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">1h30 / semaine</div>
                                        <div class="tarif-cell">€55</div>
                                        <div class="tarif-cell">€522</div>
                                        <div class="tarif-cell">€183 x 3</div>
                                        <div class="tarif-cell">€55 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">1h + 1h30 / semaine</div>
                                        <div class="tarif-cell">€85</div>
                                        <div class="tarif-cell highlighted">€807</div>
                                        <div class="tarif-cell">€283 x 3</div>
                                        <div class="tarif-cell">€85 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">2 x 1h30 / semaine</div>
                                        <div class="tarif-cell">€90</div>
                                        <div class="tarif-cell highlighted">€855</div>
                                        <div class="tarif-cell">€300 x 3</div>
                                        <div class="tarif-cell">€90 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">3 cours / semaine</div>
                                        <div class="tarif-cell">€110</div>
                                        <div class="tarif-cell highlighted">€1045</div>
                                        <div class="tarif-cell">€366 x 3</div>
                                        <div class="tarif-cell">€110 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">Cours en illimité</div>
                                        <div class="tarif-cell">€120</div>
                                        <div class="tarif-cell highlighted">€1140</div>
                                        <div class="tarif-cell">€400 x 3</div>
                                        <div class="tarif-cell">€120 x 10</div>
                                    </div>
                                </div>

        <!--                        Table Mobile Only START-->
                                <div class="tarif-table small mobile-only">
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">1h / semaine</div>
                                        <div class="tarif-cell">
                                            €50 / semaine<br>
                                            <span class="highlighted"><strong>€475 / an</strong> <br>(- 5%)</span>
                                            €165 x 3<br>
                                            €50 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">1h30 / semaine</div>
                                        <div class="tarif-cell">
                                            €55 / semaine<br>
                                            <span class="highlighted"><strong>€522 / an</strong> <br>(- 5%)</span>
                                            €183 x 3<br>
                                            €55 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">1h + 1h30 / semaine</div>
                                        <div class="tarif-cell">
                                            €85 / semaine<br>
                                            <span class="highlighted"><strong>€807 / an</strong> <br>(- 5%)</span>
                                            €283 x 3<br>
                                            €85 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">2 x 1h30 / semaine</div>
                                        <div class="tarif-cell">
                                            €90 / semaine<br>
                                            <span class="highlighted"><strong>€855 / an</strong> <br>(- 5%)</span>
                                            €300 x 3<br>
                                            €90 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">3 cours / semaine</div>
                                        <div class="tarif-cell">
                                            €110 / semaine<br>
                                            <span class="highlighted"><strong>€1045 / an</strong> <br>(- 5%)</span>
                                            €366 x 3<br>
                                            €110 x 10</div>
                                    </div>
                                    <div class="tarif-row">
                                        <div class="tarif-cell first-cell">Cours en illimité</div>
                                        <div class="tarif-cell">
                                            €120 / semaine<br>
                                            <span class="highlighted"><strong>€1140 / an</strong> <br>(- 5%)</span>
                                            €400 x 3<br>
                                            €120 x 10</div>
                                    </div>
                                </div>
        <!--                        Table Mobile Only END-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>

<?php
// get_sidebar();
get_footer();
