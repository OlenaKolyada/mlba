<?php
/**
 * The template for displaying all pages
 * Template name: Enfants Classique
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

    <main class="main" id="enfants-classique">
        <!--	Niveaux START-->
            <section class="section-wrap section-first no-padding-top" id="niveaux">
                <div class="container">
                    <h1>Cours Enfants-Ado Classique</h1>
                    <div class="section-row">
                        <div class="section-content-text">
                            <div class="section-text">
                                <p>Le cours de danse classique est proposé dès le niveau élémentaire à partir de 8 ans.
                                    L’apprentissage et le perfectionnement de la technique de la danse classique passe par la connaissance de son langage et de son Histoire.
                                    Chaque cours se compose d’un travail à la barre puis d’un travail au milieu à travers des enchaînements de plus en plus complexes dont
                                    la technique évolue au fil des âges. Le travail de pointes pour les filles est abordé à partir des élémentaires 3 avec
                                    une attention toute particulière portée à cette étape. Un travail spécifique pour les garçons est proposé à partir de ce même niveau.</p>
                                    <p><strong>Durée du cours :</strong> 1H</p>
                            </div>
                        </div>
                    </div>

                    <div class="section-row">
                        <div class="section-center">
                            <div class="cards niveaux">
                                <div class="card-item" id="card-init">
                                    <div class="frame">
                                        <div class="card-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/init.jpg" alt="Initiation à la danse" />
                                        </div>
                                    </div>
                                    <h5 class="card-title">Initiation à la danse</h5>
                                    <p class="card-subtitle">6-7 ans</p>
                                </div>

                                <div class="card-item" id="card-elem1">
                                    <div class="frame">
                                        <div class="card-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/elem1.jpg" alt="Classique Elémentaire Niveau 1" />
                                        </div>
                                    </div>
                                    <h5 class="card-title">Classique Elémentaire<br>Niveau 1</h5>
                                    <p class="card-subtitle">8-9 ans</p>
                                </div>

                                <div class="card-item" id="card-elem2">
                                    <div class="frame">
                                        <div class="card-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/no-photo-small.jpg" alt="Classique Elémentaire Niveau 2" />
                                        </div>
                                    </div>
                                    <h5 class="card-title">Classique Elémentaire<br>Niveau 2</h5>
                                    <p class="card-subtitle">10-12 ans</p>
                                </div>

                                <div class="card-item" id="card-elem3">
                                    <div class="frame">
                                        <div class="card-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/elem3.jpg" alt="Classique Elémentaire Niveau 3" />
                                        </div>
                                    </div>
                                    <h5 class="card-title">Classique Elémentaire<br>Niveau 3</h5>
                                    <p class="card-subtitle">13-14 ans</p>
                                </div>

                                <div class="card-item" id="card-avance">
                                    <div class="frame">
                                        <div class="card-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/avance.jpg" alt="Classique Avancé" />
                                        </div>
                                    </div>
                                    <h5 class="card-title">Classique Avancé</h5>
                                    <p class="card-subtitle">A partir de 15 ans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--	Niveaux END-->

            <!--	Initiation START-->
            <section class="section-wrap" id="init">
                <div class="container">
                    <div class="section-row">
                        <div class="section-content-text">
                            <div class="section-text">
                                <h2 class="title-has-subtilte">Initiation à&nbsp;la&nbsp;danse classique</h2>
                                <p class="subtitle">6-7 ans</p>
                                <p>Un cours d’une heure, qui accueille l’enfant par des rituels rassurants, dont un échauffement
                                    progressif qui développe connaissance et respect de son corps. S’y acquiert également,
                                    grâce à différents ateliers, la motricité, la créativité, la musicalité, la précision du geste,
                                    l’occupation de l’espace, la connaissance du langage commun aux différentes techniques de
                                    la danse (classique, contemporain, jazz etc…), dans le respect de son individualité et
                                    l’encouragement d’interactions bienveillantes avec les autres. Toutes ses connaissances
                                    permettront à l’enfant, dès ses 8 ans, de s’orienter librement vers la technique de danse
                                    souhaitée.</p>
                                <p><strong>Mercredi 19h</strong> et / ou <strong>Jeudi 18h</strong></p>
                                <div class="niveau-button">
                                    <a href="<?php echo get_permalink(124); ?>" class="btn btn-primary-color">S'inscrire</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-content-image">
                            <div class="frame">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/init/init1.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique"
                                                 title="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/init/init2.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique"
                                                 title="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/init/init3.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique"
                                                 title="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/init/init4.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique"
                                                 title="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/init/init5.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique"
                                                 title="Mikhalev Lanssens Ballet Academy, Initiation à la danse classique">
                                        </div>

                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <!--	Initiation END-->

            <!--	Elem1 START-->
            <section class="section-wrap" id="elem1">
                <div class="container">
                    <div class="section-row">
                        <div class="section-content-text">
                            <div class="section-text">
                                <h2 class="title-has-subtilte">Classique Elémentaire Niveau&nbsp;1</h2>
                                <p class="subtitle">8-9 ans</p>
                                <p>Dès l’âge requis de 8 ans, ce cours répond au désir de l’enfant de pratiquer la technique de
                                    la danse classique. Il y fait l’apprentissage des bases, tels que les ports de bras et ports de
                                    tête, compréhension corporelle de l’En-Dehors, spécifique à la danse classique, et des
                                    différentes positions de pieds en découlant. Le premier travail «&nbsp;à la barre&nbsp;» y sera
                                    également abordé, mais sur des exercices cours et spécifiques, dans le souci et le respect de
                                    leur évolution morphologique lié à leur croissance. En parallèle, des ateliers chorégraphiques
                                    seront proposés afin d’affiner leur écoute musicale, encourager leur expressivité, explorer
                                    leur propre créativité, et enrichir leur langage dansé grâce à l’acquisition de différentes
                                    combinaisons de pas.</p>
                                <p><strong>Mercredi 19h</strong> et / ou <strong>Jeudi 18h</strong></p>
                                <div class="niveau-button">
                                    <a href="<?php echo get_permalink(124); ?>" class="btn btn-primary-color">S'inscrire</a>
                                </div>
                            </div>

                        </div>
                        <div class="section-content-image">
                            <div class="frame">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/elem1/elem1-1.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1"
                                                 title="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/elem1/elem1-2.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1"
                                                 title="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/elem1/elem1-3.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1"
                                                 title="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/elem1/elem1-4.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1"
                                                 title="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/elem1/elem1-5.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1"
                                                 title="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 1">
                                        </div>

                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--	Elem1 END-->

            <!--	Elem2 START-->
            <section class="section-wrap" id="elem2">
                <div class="container">
                    <div class="section-row">
                        <div class="section-content-text">
                            <div class="section-text">
                                <h2 class="title-has-subtilte">Classique Elémentaire Niveau&nbsp;2</h2>
                                <p class="subtitle">10-12 ans</p>
                                <p>Dans ce cours, grâce à une meilleure maîtrise et connaissance corporelle, le travail «&nbsp;à la
                                    barre&nbsp;» se poursuit et se complète, ainsi que les exercices et la technique de certains pas
                                    «&nbsp;au milieu&nbsp;». Le travail de la musicalité se poursuit, ainsi que l’expression artistique, par le
                                    biais d’atelier chorégraphiques, du travail de pantomime, et de création chorégraphique
                                    produites par l’élève. L’Histoire de la Danse et les ballets du répertoire sont abordés, lors
                                    d’échanges, de partages de photos, vidéos et ateliers chorégraphiques, afin de nourrir leurs
                                    connaissances et leur passion. Discipline et plaisir restent les maîtres mots du cours de danse.</p>
                                <p><strong>Mercredi 19h</strong> et / ou <strong>Jeudi 18h</strong></p>
                                <div class="niveau-button">
                                    <a href="<?php echo get_permalink(124); ?>" class="btn btn-primary-color">S'inscrire</a>
                                </div>
                            </div>

                        </div>
                        <div class="section-content-image">
                            <div class="frame">
                                <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/no-photo.jpg"
                                     alt="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 2"
                                     title="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 2" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--	Elem2 END-->


            <!--	Elem3 START-->
            <section class="section-wrap" id="elem3">
                <div class="container">
                    <div class="section-row">
                        <div class="section-content-text">
                            <div class="section-text">
                                <h2 class="title-has-subtilte">Classique Elémentaire Niveau&nbsp;3</h2>
                                <p class="subtitle">13-14 ans</p>
                                <p>Continuité et complexification des apprentissages à la barre et au milieu, avec de nouveaux
                                    pas techniques abordés, notamment avec le travail de pirouettes et de sauts.</p>
                                <p>Pour les filles, début de l’apprentissage de la technique de pointes. Un soin particulier sera
                                    porté sur le choix de la paire de pointes, car particulier et spécifique à chaque élève et dont
                                    dépendra le bon apprentissage de cette technique. Il se fera au studio ou lors d’un rendez-
                                    vous en boutique avec la présence du professeur. Pour les garçons, la technique des «&nbsp;grands sauts&nbsp;»
                                    est abordée grâce à un travail spécifique sur la puissance musculaire nécessaire à la virtuosité de leur exécution.</p>
                                <p><strong>Mercredi 19h</strong> et / ou <strong>Jeudi 18h</strong></p>
                                <div class="niveau-button">
                                    <a href="<?php echo get_permalink(124); ?>" class="btn btn-primary-color">S'inscrire</a>
                                </div>
                            </div>

                        </div>
                        <div class="section-content-image">
                            <div class="frame">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/elem3/elem3-1.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 3"
                                                 title="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 3">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/elem3/elem3-2.jpg"
                                                 alt="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 3. Lac des cygnes"
                                                 title="Mikhalev Lanssens Ballet Academy, Classique Elémentaire Niveau 3. Lac des cygnes">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--	Elem3 END-->

            <!--	Avance START-->
            <section class="section-wrap" id="avance">
                <div class="container">
                    <div class="section-row">
                        <div class="section-content-text">
                            <div class="section-text">
                                <h2 class="title-has-subtilte">Classique Avancé</h2>
                                <p class="subtitle">À partir de 15 ans</p>
                                <p>Ce niveau met l’accent sur la bonne maitrise de la technique de la danse classique ainsi que
                                    sur l’aisance de l’expressivité artistique. Le professeur affinera la technique de l’élève et
                                    encouragera son autonomie et sa propre réflexion.</p>
                                <p>Un travail de variation du répertoire sera proposé afin de compléter les connaissances déjà
                                    acquises, et de se confronter à un travail de style, de technique, et d’expression artistique
                                    diverses.</p>
                                <p><strong>Mercredi 19h</strong> et / ou <strong>Jeudi 18h</strong></p>
                                <div class="niveau-button">
                                    <a href="<?php echo get_permalink(124); ?>" class="btn btn-primary-color">S'inscrire</a>
                                </div>
                            </div>

                        </div>
                        <div class="section-content-image">
                            <div class="frame">
                                <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/loisir/enfants-ado-classique/avance/avance1.jpg"
                                     alt="Mikhalev Lanssens Ballet Academy, Classique Avancé"
                                     title="Mikhalev Lanssens Ballet Academy, Classique Avancé" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--	Avance END-->
        </main>



        <!--Scroll Dots Nav START-->
        <nav class="scroll-dots-nav" aria-label="Navigation de section">
            <ul>
                <li><a href="#niveaux" data-target="niveaux" data-offset="150" data-label="Niveaux"></a></li>
                <li><a href="#init" data-target="init" data-offset="70" data-label="Initiation"></a></li>
                <li><a href="#elem1" data-target="elem1" data-offset="70" data-label="Elémentaire 1"></a></li>
                <li><a href="#elem2" data-target="elem2" data-offset="70" data-label="Elémentaire 2"></a></li>
                <li><a href="#elem3" data-target="elem3" data-offset="70" data-label="Elémentaire 3"></a></li>
                <li><a href="#avance" data-target="avance" data-offset="70" data-label="Avance"></a></li>
            </ul>
        </nav>
        <!--Scroll Dots Nav END-->

<?php
// get_sidebar();
get_footer();
