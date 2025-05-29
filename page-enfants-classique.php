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

    <main >

        <?php get_template_part( 'template-parts/breadcrumbs' );?>

        <section class="section our-story section-second bg-white" id="our-story-1">
            <div class="section-wrap">
                <h1>Cours Enfants-Ado Classique</h1>
                <div class="section-container no-margin">
                    <div class="section-row">
                        <div class="section-content">
                            <div class="section-text no-margin">
                                <p>Le cours de danse classique est proposé dès le niveau élémentaire à partir de 8 ans.
                                    L’apprentissage et le perfectionnement de la technique de la danse classique passe par la connaissance de son langage et de son Histoire.
                                    Chaque cours se compose d’un travail à la barre puis d’un travail au milieu à travers des enchaînements de plus en plus complexes dont
                                    la technique évolue au fil des âges. Le travail de pointes pour les filles est abordé à partir des élémentaires 3 avec
                                    une attention toute particulière portée à cette étape. Un travail spécifique pour les garçons est proposé à partir de ce même niveau.</p>

                            </div>
                        </div>

                    </div>
                    <div class="section-row last-of-type">
                        <div class="section-center">

                            <div class="five-card-row">
                                <div class="five-card-row-item" id="card-init-class"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/loisir/loisir-card1.jpg');">
                                    <span class="five-card-row-inner-bg">
                                        <p>Initiation<br>à la danse</p>
                                        <p class="five-items-subtitle">6-7 ans</p>
                                    </span>
                                </div>
                                <div class="five-card-row-item" id="card-elem-1"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/loisir/loisir-card2.jpg');">
                                    <span class="five-card-row-inner-bg">
                                        <p>Classique<br>Elémentaire<br>niveau 1</p>
                                        <p class="five-items-subtitle">8-9 ans</p>
                                    </span>
                                </div>
                                <div class="five-card-row-item"  id="card-elem-2"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/loisir/loisir-card3.jpg');">
                                    <span class="five-card-row-inner-bg">
                                        <p>Classique<br>Elémentaire<br>niveau 2</p>
                                        <p class="five-items-subtitle">10-12 ans</p>
                                    </span>
                                </div>
                                <div class="five-card-row-item"  id="card-elem-3"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/loisir/loisir-card4.jpg');">
                                    <span class="five-card-row-inner-bg">
                                        <p>Classique<br>Elémentaire<br>niveau 3</p>
                                        <p class="five-items-subtitle">13-14 ans</p>
                                    </span>
                                </div>
                                <div class="five-card-row-item"  id="card-avance-class"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/loisir/loisir-card5.png');">
                                    <span class="five-card-row-inner-bg">
                                        <p>Classique<br>Avancé</p>
                                        <p class="five-items-subtitle">A partir de 15 ans</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section initiation-classique" id="init-class">
            <div class="section-wrap">
                <div class="section-container">
                    <div class="section-row no-margin">
                        <div class="section-content">
                            <h2 class="has-subtitle">Initiation à la danse classique</h2>
                            <p class="section-subtitle">6-7 ans</p>
                            <div class="section-text no-margin">
                                <p>Un cours d’une heure, qui accueille l’enfant par des rituels rassurants, dont un échauffement
                                    progressif qui développe connaissance et respect de son corps. S’y acquiert également,
                                    grâce à différents ateliers, la motricité, la créativité, la musicalité, la précision du geste,
                                    l’occupation de l’espace, la connaissance du langage commun aux différentes techniques de
                                    la danse (classique, contemporain, jazz etc…), dans le respect de son individualité et
                                    l’encouragement d’interactions bienveillantes avec les autres. Toutes ses connaissances
                                    permettront à l’enfant, dès ses 8 ans, de s’orienter librement vers la technique de danse
                                    souhaitée.</p>
                                <div class="planning-and-tarif">
                                    <div class="section-planning">
                                        <h4>Planning</h4>
                                        <p>Mercredi 10H-11H studio Noureev</p>
                                        <p>Jeudi 18H30-19H30 studio Noureev</p>
                                        <p><strong>Durée du cours :</strong> 1H</p>
                                    </div>

                                    <div class="section-tarif">
                                        <h4>Tarifs</h4>
                                        <p>1 cours / semaine : €50 par mois</p>
                                        <p>2 cours / semaine : €75 par mois</p>
                                        <a href="formulaire-inscription.html" class="btn btn-mint">S'inscrire</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="section-content">
                            <div class="photo-wrapper">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/initiation1.jpg"
                                                 alt="Initiation à la danse classique"
                                                 title="Initiation à la danse classique">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/initiation2.jpg"
                                                 alt="Initiation à la danse classique"
                                                 title="Initiation à la danse classique" />
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
            </div>
        </section>

        <section class="section elementaire-1" id="elem-1">
            <div class="section-wrap">
                <div class="section-container">
                    <div class="section-row no-margin">
                        <div class="section-content">
                            <h2 class="has-subtitle">Classique Elémentaire Niveau 1</h2>
                            <p class="section-subtitle">8-9 ans</p>
                            <div class="section-text no-margin">
                                <p>Dès l’âge requis de 8 ans, ce cours répond au désir de l’enfant de pratiquer la technique de
                                    la danse classique. Il y fait l’apprentissage des bases, tels que les ports de bras et ports de
                                    tête, compréhension corporelle de l’En-Dehors, spécifique à la danse classique, et des
                                    différentes positions de pieds en découlant. Le premier travail «&nbsp;à la barre&nbsp;» y sera
                                    également abordé, mais sur des exercices cours et spécifiques, dans le souci et le respect de
                                    leur évolution morphologique lié à leur croissance. En parallèle, des ateliers chorégraphiques
                                    seront proposés afin d’affiner leur écoute musicale, encourager leur expressivité, explorer
                                    leur propre créativité, et enrichir leur langage dansé grâce à l’acquisition de différentes
                                    combinaisons de pas.</p>
                                <div class="planning-and-tarif">
                                    <div class="section-planning">
                                        <h4>Planning</h4>
                                        <p>Mercredi 10H-11H studio Noureev</p>
                                        <p>Jeudi 18H30-19H30 studio Noureev</p>
                                        <p><strong>Durée du cours :</strong> 1H</p>
                                    </div>
                                    <div class="section-tarif">
                                        <h4>Tarifs</h4>
                                        <p>1 cours / semaine : €50 par mois</p>
                                        <p>2 cours / semaine : €75 par mois</p>
                                        <a href="formulaire-inscription.html" class="btn btn-mint">S'inscrire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="photo-wrapper">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/elementaire1-1.jpg"
                                                 alt="Classique Elémentaire Niveau 1"
                                                 title="Classique Elémentaire Niveau 1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/elementaire1-2.jpg"
                                                 alt="Classique Elémentaire Niveau 1"
                                                 title="Classique Elémentaire Niveau 1" />
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
            </div>
        </section>

        <section class="section elementaire-2" id="elem-2">
            <div class="section-wrap">
                <div class="section-container">
                    <div class="section-row no-margin">
                        <div class="section-content">
                            <h2 class="has-subtitle">Classique Elémentaire Niveau 2</h2>
                            <p class="section-subtitle">10-12 ans</p>
                            <div class="section-text no-margin">
                                <p>Dans ce cours, grâce à une meilleure maîtrise et connaissance corporelle, le travail «&nbsp;à la
                                    barre&nbsp;» se poursuit et se complète, ainsi que les exercices et la technique de certains pas
                                    «&nbsp;au milieu&nbsp;». Le travail de la musicalité se poursuit, ainsi que l’expression artistique, par le
                                    biais d’atelier chorégraphiques, du travail de pantomime, et de création chorégraphique
                                    produites par l’élève. L’Histoire de la Danse et les ballets du répertoire sont abordés, lors
                                    d’échanges, de partages de photos, vidéos et ateliers chorégraphiques, afin de nourrir leurs
                                    connaissances et leur passion. Discipline et plaisir restent les maîtres mots du cours de danse.</p>
                                <div class="planning-and-tarif">
                                    <div class="section-planning">
                                        <h4>Planning</h4>
                                        <p>Mercredi 10H-11H studio Noureev</p>
                                        <p>Jeudi 18H30-19H30 studio Noureev</p>
                                        <p><strong>Durée du cours :</strong> 1H</p>
                                    </div>
                                    <div class="section-tarif">
                                        <h4>Tarifs</h4>
                                        <p>1 cours / semaine : €50 par mois</p>
                                        <p>2 cours / semaine : €75 par mois</p>
                                        <a href="formulaire-inscription.html" class="btn btn-mint">S'inscrire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="photo-wrapper">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/elementaire2-1.jpg"
                                                 alt="Classique Elémentaire Niveau 2"
                                                 title="Classique Elémentaire Niveau 2">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/elementaire2-2.jpg"
                                                 alt="Classique Elémentaire Niveau 2"
                                                 title="Classique Elémentaire Niveau 2" />
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
            </div>
        </section>

        <section class="section elementaire-3" id="elem-3">
            <div class="section-wrap">
                <div class="section-container">
                    <div class="section-row no-margin">
                        <div class="section-content">
                            <h2 class="has-subtitle">Classique Elémentaire Niveau 3</h2>
                            <p class="section-subtitle">13-14 ans</p>
                            <div class="section-text no-margin">
                                <p>Continuité et complexification des apprentissages à la barre et au milieu, avec de nouveaux
                                    pas techniques abordés, notamment avec le travail de pirouettes et de sauts.</p>
                                <p>Pour les filles, début de l’apprentissage de la technique de pointes. Un soin particulier sera
                                    porté sur le choix de la paire de pointes, car particulier et spécifique à chaque élève et dont
                                    dépendra le bon apprentissage de cette technique. Il se fera au studio ou lors d’un rendez-
                                    vous en boutique avec la présence du professeur. Pour les garçons, la technique des «&nbsp;grands sauts&nbsp;»
                                    est abordée grâce à un travail spécifique sur la puissance musculaire nécessaire à la virtuosité de leur exécution.</p>
                                <div class="planning-and-tarif">
                                    <div class="section-planning">
                                        <h4>Planning</h4>
                                        <p>Mercredi 10H-11H studio Noureev</p>
                                        <p>Jeudi 18H30-19H30 studio Noureev</p>
                                        <p><strong>Durée du cours :</strong> 1H</p>
                                    </div>
                                    <div class="section-tarif">
                                        <h4>Tarifs</h4>
                                        <p>1 cours / semaine : €50 par mois</p>
                                        <p>2 cours / semaine : €75 par mois</p>

                                        <a href="formulaire-inscription.html" class="btn btn-mint">S'inscrire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="photo-wrapper">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/elementaire3-1.jpg"
                                                 alt="Classique Elémentaire Niveau 3"
                                                 title="Classique Elémentaire Niveau 3">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/elementaire3-2.jpg"
                                                 alt="Classique Elémentaire Niveau 3"
                                                 title="Classique Elémentaire Niveau 3" />
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
            </div>
        </section>


        <section class="section avance-classique" id="avance-class">
            <div class="section-wrap">
                <div class="section-container">
                    <div class="section-row last-of-type">
                        <div class="section-content">
                            <h2 class="has-subtitle">Classique Avancé</h2>
                            <p class="section-subtitle">À partir de 15 ans</p>
                            <div class="section-text">
                                <p>Ce niveau met l’accent sur la bonne maitrise de la technique de la danse classique ainsi que
                                    sur l’aisance de l’expressivité artistique. Le professeur affinera la technique de l’élève et
                                    encouragera son autonomie et sa propre réflexion.</p>
                                <p>Un travail de variation du répertoire sera proposé afin de compléter les connaissances déjà
                                    acquises, et de se confronter à un travail de style, de technique, et d’expression artistique
                                    diverses.</p>
                                <div class="planning-and-tarif">
                                    <div class="section-planning">
                                        <h4>Planning</h4>
                                        <p>Mercredi 10H-11H studio Noureev</p>
                                        <p>Jeudi 18H30-19H30 studio Noureev</p>
                                        <p><strong>Durée du cours :</strong> 1H30</p>
                                    </div>
                                    <div class="section-tarif">
                                        <h4>Tarifs</h4>
                                        <p>1 cours / semaine : €50 par mois</p>
                                        <p>2 cours / semaine : €75 par mois</p>
                                        <a href="formulaire-inscription.html" class="btn btn-mint">S'inscrire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="photo-wrapper">
                                <div class="swiper swiper-section-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/avance1.jpg"
                                                 alt="Classique Avancé"
                                                 title="Classique Avancé">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loisir/enfants-ado-classique/avance2.jpg"
                                                 alt="Classique Avancé"
                                                 title="Classique Avancé" />
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
            </div>
        </section>

    </main>
    <!--Side Dot Nav-->
    <nav class="scroll-dots-nav" aria-label="Navigation de section">
        <ul>
            <li><a href="#top" data-target="top" data-offset="0" data-label="Top"></a></li>
            <li><a href="#init-class" data-target="init-class" data-offset="130" data-label="Initiation"></a></li>
            <li><a href="#elem-1" data-target="elem-1" data-offset="130" data-label="Elémentaire 1"></a></li>
            <li><a href="#elem-2" data-target="elem-2" data-offset="140" data-label="Elémentaire 2"></a></li>
            <li><a href="#elem-3" data-target="elem-3" data-offset="130" data-label="Elémentaire 3"></a></li>
            <li><a href="#avance-class" data-target="avance" data-offset="150" data-label="Avancé"></a></li>
        </ul>
    </nav>

<?php
// get_sidebar();
get_footer();
