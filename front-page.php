<?php
/**
 * Template name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mlba
 */
global $mlba_options;
get_header();
?>

<main class="main">

<!--Hero START-->
	<section class="no-padding"  id="hero">
		<div class="container">
			<div class="hero-content">
				<div class="hero-title notranslate" translate="no">
					<h1>Mikhalev&nbsp;Lanssens<br>Ballet&nbsp;Academy</h1>
					<p class="hero-slogan">Danser est votre Passion,<br> l'Enseigner est la nôtre</p>
				</div>
				<div class="hero-buttons">
					<div class="btn btn-primary-color" id="hero-btn-loisir">Section Loisir</div>
					<div class="btn btn-secondary-color"  id="hero-btn-pro">Section Pro</div>
				</div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/bg.jpg" alt="Mikhalev Lanssens Ballet Academy" title="Mikhalev Lanssens Ballet Academy" />
			</div>
		</div>
	</section>
<!--Hero END-->

<!--	Annonces START-->
    <section class="section-wrap" id="main-annonces">
        <div class="container">
            <div class="section-row">
                <div class="section-content-center">
                    <div class="section-text">
                        <h2 class="title-has-subtitle">Reprise des cours Loisirs</h2>
                            <h4>Lundi 7 septembre</h4>
                            <p class="annonce-body">Pour les inscriptions « Famille », nous rencontrer, visiter les lieux, permanences le :<p>
                            <p class="annonce-body"><strong>Vendredi 4 septembre</strong> de 17h30 à 19h30<br>
                            <strong>Samedi 5 septembre</strong> de 10h30 à 12h30</p>
                            <p class="cursive">À très bientôt !</p>

                    </div>
                </div>

            </div>
        </div>
    </section>
<!--	Annonces END-->


<!--	About START-->
	<section class="section-wrap" id="about">
		<div class="container">
			<div class="section-row">
				<div class="section-content-image">
					<figure class="frame">
                        <a href="<?php echo get_template_directory_uri();?>/assets/images/main/roman-mikhalev-et-corinne-lanssens.jpg" class="popup-image" title="Corinne Lanssens et Roman Mikhalev, les fondateurs de Mikhalev Lanssens Ballet Academy">
                            <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/main/roman-mikhalev-et-corinne-lanssens.jpg"
                                 alt="Corinne Lanssens et Roman Mikhalev, les fondateurs de Mikhalev Lanssens Ballet Academy"
                                 title="Corinne Lanssens et Roman Mikhalev, les fondateurs de Mikhalev Lanssens Ballet Academy" />
                        </a>
					</figure>
                    <div class="figcaption">Corinne Lanssens et&nbsp;Roman Mikhalev, les&nbsp;fondateurs de&nbsp;Mikhalev Lanssens Ballet Academy</div>
				</div>
				<div class="section-content-text">
					<div class="section-text">
						<h2>A propos de nous</h2>
						<p>Au sein de&nbsp;la&nbsp;<strong>Mikhalev Lanssens Ballet Academy</strong>, les&nbsp;professeurs placent la&nbsp;richesse
                            de&nbsp;leur&nbsp;parcours et&nbsp;de&nbsp;leur&nbsp;expérience professionnelle au&nbsp;service des&nbsp;élèves, dans&nbsp;le&nbsp;respect
                            du&nbsp;rythme et&nbsp;de&nbsp;la&nbsp;singularité de&nbsp;chacun, dans&nbsp;un&nbsp;esprit de&nbsp;transmission bienveillante
                            et&nbsp;engagée. La&nbsp;danse n’étant pas&nbsp;seulement une&nbsp;technique, nous la&nbsp;défendons comme
                            un&nbsp;art&nbsp;avant tout, et&nbsp;c’est ainsi que&nbsp;nous voulons la&nbsp;transmettre&nbsp;: vivante, sensible, sincère et&nbsp;ainsi
							offrir à&nbsp;nos&nbsp;élèves une&nbsp;expérience, un&nbsp;langage, une&nbsp;liberté.</p>
					</div>
					<div class="three-items-wrap">
						<div class="three-items-row">
							<div class="three-items-item">
								<img class="icon" src="<?php echo get_template_directory_uri();?>/assets/icons/star.svg" alt="">
								<h4>Excellence</h4>
								<p class="three-items-text">Grâce à&nbsp;une&nbsp;longue expérience (Danseuse et&nbsp;Danseur Étoile de&nbsp;l’Opéra National
                                    de&nbsp;Bordeaux), richesse et&nbsp;expérience pédagogique</p>
							</div>
							<div class="three-items-item">
								<img class="icon" src="<?php echo get_template_directory_uri();?>/assets/icons/star.svg" alt="">
								<h4>Atmosphère</h4>
								<p class="three-items-text">Un&nbsp;cadre basé sur&nbsp;le&nbsp;respect, la&nbsp;bienveillance, la&nbsp;qualité de&nbsp;l’enseignement,
									propices à&nbsp;l’épanouissement de&nbsp;chacun</p>
							</div>
							<div class="three-items-item">
								<img class="icon" src="<?php echo get_template_directory_uri();?>/assets/icons/star.svg" alt="">
								<h4>Diversité</h4>
								<p class="three-items-text">Danse Classique (méthode française et&nbsp;méthode Vaganova) et&nbsp;Contemporaine, pour&nbsp;se&nbsp;découvrir,
									s’éveiller, s’enrichir et&nbsp;partager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--	About END-->

	<!--	Danse START-->
	<section class="section-wrap" id="danse">
		<div class="container">
			<div class="section-row">
				<div class="section-content-text">
					<div class="section-text">
						<h2>Pourquoi pratiquer la&nbsp;Danse&nbsp;?</h2>
						<p>La danse est bien plus qu’une&nbsp;activité artistique&nbsp;: c’est une&nbsp;véritable école de&nbsp;vie.
							Elle&nbsp;développe la&nbsp;discipline, la&nbsp;rigueur, la&nbsp;confiance en&nbsp;soi et&nbsp;la&nbsp;gestion des&nbsp;émotions.
							En&nbsp;favorisant l’écoute, le&nbsp;respect des&nbsp;autres et&nbsp;le&nbsp;travail en&nbsp;groupe, elle enseigne
							aussi des&nbsp;valeurs humaines essentielles. À&nbsp;travers l’expression du&nbsp;corps et&nbsp;l’ouverture
							à&nbsp;la&nbsp;culture, elle cultive la&nbsp;sensibilité et&nbsp;la&nbsp;créativité. Danser, c’est&nbsp;apprendre
							à&nbsp;se&nbsp;connaître, à&nbsp;persévérer et&nbsp;à&nbsp;grandir en&nbsp;harmonie avec les&nbsp;autres.</p>
					</div>
					<div class="three-items-wrap">
						<div class="three-items-row">
							<div class="three-items-item">
								<img class="icon" src="<?php echo get_template_directory_uri();?>/assets/icons/star.svg" alt="">
								<h4>Amélioration</h4>
								<p class="three-items-text">de&nbsp;la&nbsp;posture, de&nbsp;la&nbsp;souplesse, et&nbsp;de&nbsp;la&nbsp;tonicité musculaire</p>
							</div>
							<div class="three-items-item">
								<img class="icon" src="<?php echo get_template_directory_uri();?>/assets/icons/star.svg" alt="">
								<h4>Meilleure</h4>
								<p class="three-items-text">conscience corporelle, maîtrise du&nbsp;corps, et&nbsp;endurance à&nbsp;l’effort</p>
							</div>
							<div class="three-items-item">
								<img class="icon" src="<?php echo get_template_directory_uri();?>/assets/icons/star.svg" alt="">
								<h4>Développement</h4>
								<p class="three-items-text">de&nbsp;la&nbsp;confiance en&nbsp;soi, de&nbsp;la&nbsp;mémoire, de&nbsp;la&nbsp;discipline, et&nbsp;de&nbsp;la&nbsp;créativité</p>
							</div>
						</div>
					</div>
					<div class="btn btn-primary-color">
						<a href="<?php echo get_permalink(124); ?>">M'inscrire</a>
					</div>
				</div>
				<div class="section-content-image">
					<figure class="frame">
                        <a href="<?php echo get_template_directory_uri();?>/assets/images/main/danse.jpg" class="popup-image" title="La Danse">
                            <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/main/danse.jpg"
                                 alt="La Danse"
                                 title="La Danse" />
                        </a>
					</figure>
				</div>
			</div>
		</div>
	</section>
<!--	Danse END-->

<!--	Section Loisir START-->
	<section class="section-wrap" id="loisir">
		<div class="container">
			<div class="section-row">
				<div class="section-content-center">
					<div class="section-text">
						<h2>Section Loisir</h2>
						<p>Que vous soyez enfant ou&nbsp;adulte, amateur curieux ou&nbsp;passionné, les&nbsp;cours
							Loisirs de&nbsp;la&nbsp;<strong>Mikhalev Lanssens Ballet Academy</strong> offrent un&nbsp;apprentissage
							de&nbsp;qualité dans&nbsp;un&nbsp;cadre bienveillant. Dansez pour&nbsp;le&nbsp;plaisir, progressez à&nbsp;votre
							rythme, et&nbsp;vivez pleinement votre&nbsp;passion&nbsp;!</p>
					</div>
					<div class="cards five">
						<div class="card-item">
							<figure class="frame">
								<div class="card-thumb">
									<a href="<?php echo get_permalink(106); ?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/enfants-classique.jpg" alt="Enfants-Ado Classique" />
									</a>
								</div>
							</figure>
							<a href="<?php echo get_permalink(106); ?>">
								<h5 class="card-title">Enfants-Ado Classique</h5>
							</a>
						</div>

						<div class="card-item">
							<figure class="frame">
								<div class="card-thumb">
									<a href="<?php echo get_permalink(109); ?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/ado-contempo.jpg" alt="Enfants-Ado Contemporain" />
									</a>
								</div>
							</figure>
							<a href="<?php echo get_permalink(109); ?>">
								<h5 class="card-title">Ado Contemporain</h5>
							</a>
						</div>

						<div class="card-item">
							<figure class="frame">
								<div class="card-thumb">
									<a href="<?php echo get_permalink(112); ?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/adulte-classique.jpg" alt="Adultes Classique" />
									</a>
								</div>
							</figure>
							<a href="<?php echo get_permalink(112); ?>">
								<h5 class="card-title">Adultes Classique</h5>
							</a>
						</div>

						<div class="card-item">
							<figure class="frame">
								<div class="card-thumb">
									<a href="<?php echo get_permalink(115); ?>">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/adulte-contempo.jpg" alt="Adultes Contemporain" />
									</a>
								</div>
							</figure>
							<a href="<?php echo get_permalink(115); ?>">
								<h5 class="card-title">Adultes Contemporain</h5>
							</a>
						</div>

                        <div class="card-item">
                            <figure class="frame">
                                <div class="card-thumb">
                                    <a href="<?php echo get_permalink(208); ?>">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/thumbs/barre.jpg" alt="Barre à terre" />
                                    </a>
                                </div>
                            </figure>
                            <a href="<?php echo get_permalink(208); ?>">
                                <h5 class="card-title">Barre à terre</h5>
                            </a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--	Section Loisir END-->

<!--	Section Pro START-->
<section class="section-wrap" id="pro">
	<div class="container">
		<div class="section-row">
			<div class="section-content-text align-left">
				<div class="section-text">
					<h2>Section Pro</h2>
					<p>Destinée aux&nbsp;jeunes danseurs passionnés souhaitant se&nbsp;préparer au&nbsp;métier de&nbsp;danseur
						professionnel, cette section propose un&nbsp;enseignement complet et&nbsp;exigeant, alliant qualité,
						rigueur et&nbsp;transmission artistique. Dirigée par&nbsp;Roman Mikhalev et&nbsp;Corinne Lanssens,
						tous deux issus de&nbsp;grandes écoles et&nbsp;riches de&nbsp;longues carrières sur&nbsp;les&nbsp;scènes
						nationales et&nbsp;internationales, elle offre une&nbsp;formation solide, en&nbsp;adéquation avec
						les&nbsp;attentes du&nbsp;milieu professionnel.</p>
				</div>
				<a class="btn btn-secondary-color" href="<?php echo get_permalink(131); ?>">Découvrir Section Pro</a>
			</div>
			<div class="section-content-image">
				<div class="quote-container">
					<figure class="frame">
                        <a href="<?php echo get_template_directory_uri();?>/assets/images/main/section-pro.jpg" class="popup-image" title="Corinne Lanssens. Mikhalev Lanssens Ballet Academy, Section Pro. Crédit photo Sigried Colomyès">
                            <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/main/section-pro.jpg"
                                 alt="Corinne Lanssens. Mikhalev Lanssens Ballet Academy, Section Pro. Crédit photo Sigried Colomyès"
                                 title="Corinne Lanssens. Mikhalev Lanssens Ballet Academy, Section Pro. Crédit photo Sigried Colomyès" />
                        </a>
					</figure>
					<div class="decor-quote">
						<div class="decor-quote-row">
							<span>Devenir danseur c’est s’offrir <span class="decor-quote-white">une destinée</span></span>
						</div>
						<div class="decor-quote-row">
							<span>liée a la nécessité <span class="decor-quote-white">de danser</span></span>
						</div>
					</div>
				</div>
				<div class="mobile-only">
					<figure class="frame">
						<img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/main/section-pro.jpg"
							 alt="Mikhalev Lanssens Ballet Academy, Section Pro"
							 title="Mikhalev Lanssens Ballet Academy, Section Pro" />
						<div class="decor-quote-mobile">Devenir danseur c’est s’offrir une destinée liée à la
							nécessité de danser</div>
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>
<!--	Section Pro END-->

<!--	Stages START-->
	<section class="section-wrap" id="stages-main">
		<div class="container">
			<div class="section-row">
				<div class="section-content-image">
					<figure class="frame">
                        <a href="<?php echo get_template_directory_uri();?>/assets/images/main/stages.jpg" class="popup-image" title="Mikhalev Lanssens Ballet Academy, Stages">
                            <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/main/stages.jpg"
                                 alt="Mikhalev Lanssens Ballet Academy, Stages"
                                 title="Mikhalev Lanssens Ballet Academy, Stages" />
                        </a>
					</figure>
				</div>
				<div class="section-content-text align-left">
					<div class="section-text">
						<h2>Stages</h2>
						<p>Le stage de&nbsp;danse est&nbsp;l’occasion de&nbsp;rencontrer de&nbsp;nouveaux professeurs, de&nbsp;découvrir
							leur&nbsp;univers artistique, leur&nbsp;méthode et&nbsp;leur&nbsp;exigence pédagogique. C’est&nbsp;un&nbsp;moment
							riche d’échanges, où&nbsp;l’on&nbsp;côtoie d’autres élèves venus de&nbsp;différentes écoles de&nbsp;danse,
							créant ainsi une&nbsp;émulation supplémentaire. Grâce à&nbsp;l’intensité des&nbsp;cours sur&nbsp;plusieurs
							jours, l’élève donne un&nbsp;nouvel élan à&nbsp;son&nbsp;apprentissage.</p>
						<p>Durant la&nbsp;période de&nbsp;Stages, la&nbsp;<strong>Mikhalev Lanssens Ballet Academy</strong>
                            tient à&nbsp;ce&nbsp;que&nbsp;chaque élève se&nbsp;sente considéré et&nbsp;puisse s’épanouir au&nbsp;sein de&nbsp;ses&nbsp;locaux.</p>
                        <p>Pour consulter la&nbsp;liste complète des&nbsp;stages et&nbsp;leurs&nbsp;modalités, rendez-vous sur&nbsp;<a href="<?php echo site_url('/category/stages/'); ?>" title="Stages">Stages.</a></p>
					</div>
					<div class="stages-social">
						<h4>Surveillez nos pages pour plus d'info</h4>
						<div class="social-icons">
							<a href="https://www.instagram.com/ml_ballet_academy/" target="_blank">
								<img class="social-icon instagram" src="<?php echo get_template_directory_uri();?>/assets/icons/instagram.svg" alt="">
							</a>
							<a href="https://www.facebook.com/profile.php?id=61577899906251" target="_blank">
								<img class="social-icon facebook" src="<?php echo get_template_directory_uri();?>/assets/icons/facebook.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--	Stages END-->

<!--	Gallery START-->
	<section class="section-wrap" id="main-gallery">
		<div class="container">
			<div class="section-row">
				<div class="swiper-frame">
					<div class="swiper swiper-main-gallery">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
                                <a href="<?php echo get_template_directory_uri();?>/assets/images/main-gallery/main-gallery-1.jpg" class="popup-image"  title="Galerie des photos de Mikhalev Lanssens Ballet Academy">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/main-gallery/main-gallery-1.jpg"
                                     alt="Galerie des photos de Mikhalev Lanssens Ballet Academy"
                                     title="Galerie des photos de Mikhalev Lanssens Ballet Academy"
                                     class="horisontal" />
                                </a>
							</div>
<!--							<div class="swiper-slide">-->
<!--                                <a href="--><?php //echo get_template_directory_uri();?><!--/assets/images/main-gallery/main-gallery-2.jpg" class="popup-gallery"  title="Galerie des photos de Mikhalev Lanssens Ballet Academy">-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/assets/images/main-gallery/main-gallery-2.jpg"-->
<!--                                     alt="Galerie des photos de Mikhalev Lanssens Ballet Academy"-->
<!--                                     title="Galerie des photos de Mikhalev Lanssens Ballet Academy"-->
<!--                                     class="horisontal" />-->
<!--                                </a>-->
<!--							</div>-->
<!--							<div class="swiper-slide">-->
<!--                                <a href="--><?php //echo get_template_directory_uri();?><!--/assets/images/main-gallery/main-gallery-3.jpg" class="popup-gallery"  title="Galerie des photos de Mikhalev Lanssens Ballet Academy">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri();?><!--/assets/images/main-gallery/main-gallery-3.jpg"-->
<!--                                         alt="Galerie des photos de Mikhalev Lanssens Ballet Academy"-->
<!--                                         title="Galerie des photos de Mikhalev Lanssens Ballet Academy"-->
<!--                                         class="horisontal" />-->
<!--                                </a>-->
<!--							</div>-->
<!--							<div class="swiper-slide">-->
<!--                                <a href="--><?php //echo get_template_directory_uri();?><!--/assets/images/main-gallery/main-gallery-4.jpg" class="popup-gallery"  title="Galerie des photos de Mikhalev Lanssens Ballet Academy">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri();?><!--/assets/images/main-gallery/main-gallery-4.jpg"-->
<!--                                         alt="Galerie des photos de Mikhalev Lanssens Ballet Academy"-->
<!--                                         title="Galerie des photos de Mikhalev Lanssens Ballet Academy"-->
<!--                                         class="horisontal" />-->
<!--                                </a>-->
<!--							</div>-->

						</div>
<!--						<div class="swiper-pagination"></div>-->
<!--						<div class="swiper-button-prev"></div>-->
<!--						<div class="swiper-button-next"></div>-->
					</div>
				</div>
			</div>
		</div>
	</section>
<!--	Gallery END-->

<!--	Main Contacts START-->
	<section class="section-wrap section-background-image" id="main-contacts">
		<div class="container">
			<div class="section-row">
				<div class="section-content-text">
					<div class="section-text">
						<h2>Besoin d'aide pour choisir&nbsp;?</h2>
						<p>Venez nous rencontrer&nbsp;: nous serons ravis de&nbsp;vous&nbsp;accueillir et&nbsp;de&nbsp;vous aider à&nbsp;choisir votre&nbsp;parcours.</p>
						<div class="main-contacts-wrap">
							<div class="three-items-wrap">
								<div class="three-items-row">
									<div class="three-items-item">
										<img class="main-contacts-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/location-mint.svg" alt="">
										<div class="three-items-text">
											<a href="https://maps.app.goo.gl/9wLLnVA6TqUdcupN6" target="_blank"
											   rel="noopener noreferrer">
												152 Av. Jean Jaurès<br>33600 Pessac
											</a>
										</div>
									</div>
									<div class="three-items-item">
										<img class="main-contacts-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/phone-mint.svg" alt="">
										<div class="three-items-text">
											<a href="tel:+33609756230" target="_blank" rel="noopener noreferrer">
												+ 33 6 09 75 62 30</a><br>
											<a href="mailto:contact@mlba.fr">contact@mlba.fr</a>
										</div>
									</div>
									<div class="three-items-item">
										<img class="main-contacts-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/clock-mint.svg" alt="">
										<div class="three-items-text">Du lundi au vendredi<br>
											de 9h00 à 21h00<br>
											Samedi 9h00 à 13h00</div>
									</div>
								</div>
							</div>
							<div class="google-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.486978541365!2d-0.6172210233234816!3d44.81164287674065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54d8620ba5c94b%3A0xaf353211b9bbb9cf!2s152%20Av.%20Jean%20Jaur%C3%A8s%2C%2033600%20Pessac!5e0!3m2!1sen!2sfr!4v1745945878811!5m2!1sen!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
                <div class="section-content-text">
                    <div class="form-container section">
                        <h2><?php echo $mlba_options['contact-section-form-title'];?></h2>
                        <p><?php echo $mlba_options['contact-section-form-text'];?></p>
                        <?php echo do_shortcode($mlba_options['contact-section-form-shortcode']) ?>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<!--	Main Contacts END-->
</main>

<!--Scroll Dots Nav START-->
<nav class="scroll-dots-nav" aria-label="Navigation de section">
	<ul>
		<li><a href="#hero" data-target="hero" data-offset="150" data-label="Top"></a></li>
		<li><a href="#about" data-target="about" data-offset="70" data-label="À propos"></a></li>
		<li><a href="#danse" data-target="danse" data-offset="70" data-label="Danse"></a></li>
		<li><a href="#loisir" data-target="loisir" data-offset="70" data-label="Loisir"></a></li>
		<li><a href="#pro" data-target="pro" data-offset="70" data-label="Pro"></a></li>
		<li><a href="#stages-main" data-target="stages-main" data-offset="70" data-label="Stages"></a></li>
		<li><a href="#main-gallery" data-target="main-gallery" data-offset="70" data-label="Galerie"></a></li>
		<li><a href="#main-contacts" data-target="main-contacts" data-offset="20" data-label="Contacts"></a></li>
	</ul>
</nav>
<!--Scroll Dots Nav END-->

<?php

get_footer();
