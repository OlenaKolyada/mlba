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

<main class="main" id="planning">
    <section class="section-wrap section-first no-padding-top">
        <div class="container">
            <h1>Planning</h1>
            <div class="section-row">
                <div class="section-content-text">
                    <div class="schedule-table">
                        <div class="schedule-row schedule-header">
                            <div class="schedule-cell">Lundi</div>
                            <div class="schedule-cell">Mardi</div>
                            <div class="schedule-cell">Mercredi</div>
                            <div class="schedule-cell">Jeudi</div>
                            <div class="schedule-cell">Vendredi</div>
                        </div>
                        <div class="schedule-row">
                            <div class="schedule-cell" data-day="mon" data-time="morning"></div>
                            <div class="schedule-cell" data-day="tue" data-time="morning"></div>
                            <div class="schedule-cell" data-day="wed" data-time="morning">
                                <div class="schedule-item init">
                                    <h5>Initiation</h5>
                                    <span>11h-12h</span>
                                </div>
                            </div>
                            <div class="schedule-cell" data-day="thu" data-time="morning"></div>
                            <div class="schedule-cell" data-day="fri" data-time="morning"></div>
                        </div>
                        <div class="schedule-row">
                            <div class="schedule-cell" data-day="mon" data-time="afternoon"></div>
                            <div class="schedule-cell" data-day="tue" data-time="afternoon"></div>
                            <div class="schedule-cell" data-day="wed" data-time="afternoon">
                                <div class="schedule-item elem-1">
                                    <h5>Elementaire 1</h5>
                                    <span>15h-16h30</span>
                                </div>
                            </div>
                            <div class="schedule-cell" data-day="thu" data-time="afternoon"></div>
                            <div class="schedule-cell" data-day="fri" data-time="afternoon"></div>
                        </div>
                        <div class="schedule-row">
                            <div class="schedule-cell" data-day="mon" data-time="evening">
                                <div class="schedule-item elem-2">
                                    <h5>Elementaire 2</h5>
                                    <span>18h-19h30</span>
                                </div>
                                <div class="schedule-item adulte-avance">
                                    <h5>Adulte Inter/Avancé</h5>
                                    <span>19h30-21h</span>
                                </div>
                                <div class="schedule-item ado-contempo">
                                    <h5>Contempo Ado</h5>
                                    <span>18h15-19h15</span>
                                </div>
                                <div class="schedule-item adulte-contempo">
                                    <h5>Contempo Adulte</h5>
                                    <span>19h15-20h45</span>
                                </div>
                            </div>
                            <div class="schedule-cell" data-day="tue" data-time="evening">
                                <div class="schedule-item elem-3">
                                    <h5>Elementaire 3</h5>
                                    <span>18h-19h30</span>
                                </div>
                            </div>
                            <div class="schedule-cell" data-day="wed" data-time="evening">
                                <div class="schedule-item ado-avance">
                                    <h5>Avancé</h5>
                                    <span>18h45-20h15</span>
                                </div>
                            </div>
                            <div class="schedule-cell" data-day="thu" data-time="evening">
                                <div class="schedule-item elem-2">
                                    <h5>Elementaire 2</h5>
                                    <span>18h-19h30</span>
                                </div>
                                <div class="schedule-item adulte-avance">
                                    <h5>Adulte Inter/Avancé</h5>
                                    <span>19h30-21h</span>
                                </div>
                            </div>
                            <div class="schedule-cell" data-day="fri" data-time="evening">
                                <div class="schedule-item elem-3">
                                    <h5>Elementaire 3</h5>
                                    <span>18h-19h30</span>
                                </div>
                                <div class="schedule-item ado-avance">
                                    <h5>Avancé</h5>
                                    <span>18h45-20h15</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-mobile">
                      <div class="day-block">
                        <h3>Lundi</h3>
                        <div class="evening">
                            <div class="day-block-row">
                                <div class="schedule-item elem-2">
                                  <h5>Elementaire 2</h5>
                                  <span>18h-19h30</span>
                                </div>
                                <div class="schedule-item adulte-avance">
                                  <h5>Adulte Inter/Avancé</h5>
                                  <span>19h30-21h</span>
                                </div>
                            </div>
                            <div class="day-block-row">
                                <div class="schedule-item ado-contempo">
                                  <h5>Contempo Ado</h5>
                                  <span>18h15-19h15</span>
                                </div>
                                <div class="schedule-item adulte-contempo">
                                  <h5>Contempo Adulte</h5>
                                  <span>19h15-20h45</span>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="day-block">
                        <h3>Mardi</h3>
                        <div class="evening">
                            <div class="day-block-row">
                                <div class="schedule-item elem-3">
                                  <h5>Elementaire 3</h5>
                                  <span>18h-19h30</span>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="day-block">
                          <h3>Mercredi</h3>
                          <div class="morning">
                              <div class="day-block-row">
                                  <div class="schedule-item init">
                                    <h5>Initiation</h5>
                                    <span>11h-12h</span>
                                  </div>
                              </div>
                          </div>
                          <div class="afternoon">
                              <div class="day-block-row">
                                  <div class="schedule-item elem-1">
                                    <h5>Elementaire 1</h5>
                                    <span>15h-16h30</span>
                                  </div>
                              </div>
                          </div>
                          <div class="evening">
                              <div class="day-block-row">
                                  <div class="schedule-item ado-avance">
                                    <h5>Avancé</h5>
                                    <span>18h45-20h15</span>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="day-block">
                        <h3>Jeudi</h3>
                        <div class="evening">
                            <div class="day-block-row">
                                <div class="schedule-item elem-2">
                                  <h5>Elementaire 2</h5>
                                  <span>18h-19h30</span>
                                </div>
                                <div class="schedule-item adulte-avance">
                                  <h5>Adulte Inter/Avancé</h5>
                                  <span>19h30-21h</span>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="day-block">
                        <h3>Vendredi</h3>
                        <div class="evening">
                            <div class="day-block-row">
                                <div class="schedule-item elem-3">
                                  <h5>Elementaire 3</h5>
                                  <span>18h-19h30</span>
                                </div>
                                <div class="schedule-item ado-avance">
                                  <h5>Avancé</h5>
                                  <span>18h45-20h15</span>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>

                <div class="section-text">
                    <p><strong>Samedi :</strong> cours particuliers, répétitions spectacle, répétition Concours<br>
                    <strong>Dimanche :</strong> Cours particuliers</p>
                    <p>Planning susceptible de modification.</p>
                </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// get_sidebar();
get_footer();
