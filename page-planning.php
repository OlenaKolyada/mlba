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
<!--                    Desktop Schedule START -->
                    <div class="schedule-table">
                        <div class="schedule-row schedule-header">
                            <div class="schedule-cell">Lundi</div>
                            <div class="schedule-cell">Mardi</div>
                            <div class="schedule-cell">Mercredi</div>
                            <div class="schedule-cell">Jeudi</div>
                            <div class="schedule-cell">Vendredi</div>
                            <div class="schedule-cell">Samedi</div>
                        </div>

<!--                        Morning Row-->
                        <div class="schedule-row">
<!--                            monday-->
                            <div class="schedule-cell" data-day="mon" data-time="morning"></div>
<!--                            tuesday-->
                            <div class="schedule-cell" data-day="tue" data-time="morning"></div>
<!--                            wednesday-->
                            <div class="schedule-cell" data-day="wed" data-time="morning">
                                <a href="#modal-init" class="popup-schedule">
                                    <div class="schedule-item init magnific-schedule">
                                        <h5>Initiation</h5>
                                        <span>11h-12h</span>
                                    </div>
                                </a>
                            </div>
<!--                            thursday-->
                            <div class="schedule-cell" data-day="thu" data-time="morning"></div>
<!--                            friday-->
                            <div class="schedule-cell" data-day="fri" data-time="morning"></div>
<!--                            saturday-->
                            <div class="schedule-cell" data-day="sat" data-time="morning">

                            </div>
                        </div>

<!--                        Afternoon Row-->
                        <div class="schedule-row">
<!--                            monday-->
                            <div class="schedule-cell" data-day="mon" data-time="afternoon"></div>
<!--                            tuesday-->
                            <div class="schedule-cell" data-day="tue" data-time="afternoon"></div>
<!--                            wednesday-->
                            <div class="schedule-cell" data-day="wed" data-time="afternoon">
                                <a href="#modal-elem-1" class="popup-schedule">
                                    <div class="schedule-item elem-1">
                                        <h5>Elémentaire 1</h5>
                                        <span>16h30-18h</span>
                                    </div>
                                </a>
                            </div>
<!--                            thursday-->
                            <div class="schedule-cell" data-day="thu" data-time="afternoon"></div>
<!--                            friday-->
                            <div class="schedule-cell" data-day="fri" data-time="afternoon"></div>
<!--                            saturday-->
                            <div class="schedule-cell" data-day="sat" data-time="afternoon">
                                    <div class="schedule-item cours-particuliers">
                                        <h5>Cours particuliers</h5>
                                    </div>
                            </div>
                        </div>

<!--                        Evening Row-->
                        <div class="schedule-row">

<!--                            monday-->
                            <div class="schedule-cell" data-day="mon" data-time="evening">
                                <a href="#modal-elem-2" class="popup-schedule">
                                    <div class="schedule-item elem-2">
                                        <h5>Elémentaire 2</h5>
                                        <span>18h-19h30</span>
                                    </div>
                                </a>
                                <a href="#modal-adulte-avance" class="popup-schedule">
                                    <div class="schedule-item adulte-avance">
                                        <h5>Adulte Inter/Avancé</h5>
                                        <span>19h30-21h</span>
                                    </div>
                                </a>
                                <a href="#modal-ado-contempo" class="popup-schedule">
                                    <div class="schedule-item ado-contempo">
                                        <h5>Ado Contempo</h5>
                                        <span>18h15-19h15</span>
                                    </div>
                                </a>
                                <a href="#modal-adulte-contempo" class="popup-schedule">
                                    <div class="schedule-item adulte-contempo">
                                        <h5>Adulte Contempo</h5>
                                        <span>19h15-20h45</span>
                                    </div>
                                </a>
                            </div>

<!--                            tuesday-->
                            <div class="schedule-cell" data-day="tue" data-time="evening">
                                <a href="#modal-elem-3" class="popup-schedule">
                                    <div class="schedule-item elem-3">
                                        <h5>Elémentaire 3</h5>
                                        <span>18h-19h30</span>
                                    </div>
                                </a>
                                <a href="#modal-barre" class="popup-schedule">
                                    <div class="schedule-item barre">
                                        <h5>Barre&nbsp;à&nbsp;terre / Renforcement</h5>
                                        <span>19h30-20h30</span>
                                    </div>
                                </a>
                            </div>

<!--                            wednesday-->
                            <div class="schedule-cell" data-day="wed" data-time="evening">
                                <a href="#modal-ado-avance" class="popup-schedule">
                                    <div class="schedule-item ado-avance">
                                        <h5>Avancé</h5>
                                        <span>18h45-20h15</span>
                                    </div>
                                </a>
                            </div>

<!--                            thursday-->
                            <div class="schedule-cell" data-day="thu" data-time="evening">
                                <a href="#modal-elem-2" class="popup-schedule">
                                    <div class="schedule-item elem-2">
                                        <h5>Elémentaire 2</h5>
                                        <span>18h-19h30</span>
                                    </div>
                                </a>
                                <a href="#modal-adulte-avance" class="popup-schedule">
                                    <div class="schedule-item adulte-avance">
                                        <h5>Adulte Inter/Avancé</h5>
                                        <span>19h30-21h</span>
                                    </div>
                                </a>

                            </div>

<!--                            friday-->
                            <div class="schedule-cell" data-day="fri" data-time="evening">
                                <a href="#modal-elem-3" class="popup-schedule">
                                    <div class="schedule-item elem-3">
                                        <h5>Elémentaire 3</h5>
                                        <span>18h-19h30</span>
                                    </div>
                                </a>
                                <a href="#modal-ado-avance" class="popup-schedule">
                                    <div class="schedule-item ado-avance">
                                        <h5>Avancé</h5>
                                        <span>18h45-20h15</span>
                                    </div>
                                </a>
                            </div>

<!--                            saturday-->
                            <div class="schedule-cell" data-day="sat" data-time="afternoon"></div>
                        </div>
                    </div>
<!--                    Desktop Schedule END-->

<!--                    Mobile Schedule START-->
                    <div class="schedule-mobile">
                      <div class="day-block">
                        <h3>Lundi</h3>
                        <div class="evening">
                            <div class="day-block-row">
                                <a href="#modal-elem-2" class="popup-schedule">
                                    <div class="schedule-item elem-2">
                                      <h5>Elémentaire 2</h5>
                                      <span>18h-19h30</span>
                                    </div>
                                </a>
                                <a href="#modal-adulte-avance" class="popup-schedule">
                                    <div class="schedule-item adulte-avance">
                                          <h5>Adulte Inter/Avancé</h5>
                                          <span>19h30-21h</span>
                                    </div>
                                </a>
                            </div>
                            <div class="day-block-row">
                                <a href="#modal-ado-contempo" class="popup-schedule">
                                    <div class="schedule-item ado-contempo">
                                      <h5>Ado Contempo</h5>
                                      <span>18h15-19h15</span>
                                    </div>
                                </a>
                                <a href="#modal-adulte-contempo" class="popup-schedule">
                                    <div class="schedule-item adulte-contempo">
                                          <h5>Adulte Contempo</h5>
                                          <span>19h15-20h45</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                      </div>

                      <div class="day-block">
                        <h3>Mardi</h3>
                        <div class="evening">
                            <div class="day-block-row">
                                <a href="#modal-elem-3" class="popup-schedule">
                                    <div class="schedule-item elem-3">
                                        <h5>Elémentaire 3</h5>
                                        <span>18h-19h30</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                          <div class="evening">
                              <div class="day-block-row">
                                  <a href="#modal-barre" class="popup-schedule">
                                      <div class="schedule-item barre">
                                          <h5>Barre&nbsp;à&nbsp;terre / Renforcement</h5>
                                          <span>19h30-20h30</span>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="day-block">
                          <h3>Mercredi</h3>
                          <div class="morning">
                              <div class="day-block-row">
                                  <a href="#modal-init" class="popup-schedule">
                                    <div class="schedule-item init">
                                        <h5>Initiation</h5>
                                        <span>11h-12h</span>
                                      </div>
                                  </a>
                              </div>
                          </div>
                          <div class="afternoon">
                              <div class="day-block-row">
                                  <a href="#modal-elem-1" class="popup-schedule">
                                    <div class="schedule-item elem-1">
                                        <h5>Elémentaire 1</h5>
                                        <span>16h30-18h</span>
                                    </div>
                                  </a>
                              </div>
                          </div>
                          <div class="evening">
                              <div class="day-block-row">
                                  <a href="#modal-ado-avance" class="popup-schedule">
                                    <div class="schedule-item ado-avance">
                                        <h5>Avancé</h5>
                                        <span>18h45-20h15</span>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="day-block">
                        <h3>Jeudi</h3>
                        <div class="evening">
                            <div class="day-block-row">
                                <a href="#modal-elem-2" class="popup-schedule">
                                    <div class="schedule-item elem-2">
                                      <h5>Elémentaire 2</h5>
                                      <span>18h-19h30</span>
                                    </div>
                                </a>
                                <a href="#modal-adulte-avance" class="popup-schedule">
                                    <div class="schedule-item adulte-avance">
                                          <h5>Adulte Inter/Avancé</h5>
                                          <span>19h30-21h</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                      </div>

                      <div class="day-block">
                        <h3>Vendredi</h3>
                        <div class="evening">
                            <div class="day-block-row">
                                <a href="#modal-elem-3" class="popup-schedule">
                                    <div class="schedule-item elem-3">
                                      <h5>Elémentaire 3</h5>
                                      <span>18h-19h30</span>
                                    </div>
                                </a>
                                <a href="#modal-ado-avance" class="popup-schedule">
                                    <div class="schedule-item ado-avance">
                                          <h5>Avancé</h5>
                                          <span>18h45-20h15</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                      </div>

                    <div class="day-block">
                        <h3>Samedi</h3>

                        <div class="afternoon">
                            <div class="day-block-row">
                                <div class="schedule-item cours-particuliers">
                                    <h5>Cours particuliers</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

<!--                    Mobile Schedule END-->

                <div class="section-text">
                    <p><strong>Samedi :</strong> cours particuliers, répétitions spectacle, répétition сoncours<br>
                    <strong>Dimanche :</strong> сours particuliers</p>
                    <p>Planning susceptible de modification.</p>
                </div>
                </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-init">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Initiation</h3>
              <div class="schedule-item init">
                <h5>Mercredi</h5>
                <span>11h-12h</span>
              </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-elem-1">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Elémentaire 1</h3>
              <div class="schedule-item elem-1">
                <h5>Mercredi</h5>
                <span>16h30-18h</span>
              </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-elem-2">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Elémentaire 2</h3>
              <div class="schedule-item elem-2">
                <h5>Lundi</h5>
                <span>18h-19h30</span>
              </div>
                <div class="schedule-item elem-2">
                  <h5>Jeudi</h5>
                  <span>18h-19h30</span>
                </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-elem-3">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Elémentaire 3</h3>
              <div class="schedule-item elem-3">
                <h5>Mardi</h5>
                <span>18h-19h30</span>
              </div>
            <div class="schedule-item elem-3">
              <h5>Vendredi</h5>
              <span>18h-19h30</span>
            </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-ado-avance">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Ado Classique Avancé</h3>
              <div class="schedule-item ado-avance">
                <h5>Mercredi</h5>
                <span>18h45-20h15</span>
              </div>
            <div class="schedule-item ado-avance">
              <h5>Vendredi</h5>
              <span>18h45-20h15</span>
            </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-ado-contempo">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Ado Contemporain</h3>
              <div class="schedule-item ado-contempo">
                <h5>Lundi</h5>
                <span>18h15-19h15</span>
              </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-adulte-avance">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Adulte Intermediaire-Avancé</h3>
              <div class="schedule-item adulte-avance">
                <h5>Lundi</h5>
                <span>19h30-21h</span>
              </div>
            <div class="schedule-item adulte-avance">
              <h5>Jeudi</h5>
              <span>19h30-21h</span>
            </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-adulte-contempo">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Adultes Contemporain</h3>
              <div class="schedule-item adulte-contempo">
                <h5>Lundi</h5>
                <span>19h15-20h45</span>
              </div>
            </div>
        </div>

        <div class="modal-schedule mfp-hide" id="modal-barre">
            <div class="modal-close"></div>
            <div class="modal-schedule-wrap">
                <h3>Barre&nbsp;à&nbsp;terre / Renforcement</h3>
                <div class="schedule-item barre">
                    <h5>Mardi</h5>
                    <span>19h30-20h30</span>
                </div>

            </div>
        </div>

    </section>
</main>

<?php
// get_sidebar();
get_footer();
