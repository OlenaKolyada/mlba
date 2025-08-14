<?php
/**
 * The template for displaying all pages
 * Template name: Professeure de Danse de Caractere
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

    <main class="main professeurs" id="professeurs-caractere">
    <!--	Valeriya Pyestryakova START-->
    <section class="section-wrap section-first no-padding-top" id="valeriya-pyestryakova">
        <div class="container">
            <h1>Professeure de Danse de Caractère</h1>
            <div class="section-row">
                <div class="section-content-image">
                    <div class="frame">
                        <a href="<?php echo get_template_directory_uri();?>/assets/images/profs/valeriya-pyestryakova/valeriya-pyestryakova.jpg" class="popup-image" title="Valeriya Pyestryakova, Professeure de Danse de Caractère, MLBA Section Pro">
                            <img class="section-photo" src="<?php echo get_template_directory_uri();?>/assets/images/profs/valeriya-pyestryakova/valeriya-pyestryakova.jpg"
                                 alt="Valeriya Pyestryakova, Professeure de Danse de Caractère, MLBA Section Pro"
                                 title="Valeriya Pyestryakova, Professeure de Danse de Caractère, MLBA Section Pro" />
                        </a>
                    </div>
                </div>
                <div class="section-content-text">
                    <div class="section-text">
                        <h2 class="title-has-subtitle">Valeriya Pyestryakova</h2>
                        <div class="subtitle">
                            Artiste et pédagogue internationale, spécialiste du patrimoine chorégraphique
                        </div>
                        <p>Titulaire du Certificat d’Aptitude (CA) en danse classique en France et diplômée de l’Académie
                            de la Culture de Kharkiv (Ukraine) en tant que spécialiste en danse de caractère et en danse
                            classique, Pyestryakova Valériya, développe depuis plus de 25 ans une carrière mêlant pratique
                            artistique, pédagogie exigeante et transmission du patrimoine chorégraphique.</p>
                        <p>Elle débute sa carrière en tant que coryphée au sein de l’Opéra Académique Nationale de
                            Kharkiv, avant de se produire à l’international, notamment en Espagne (Benidorm Palace), en
                            Allemagne (Opéra de Nuremberg), puis en France dans plusieurs cabarets et spectacles.</p>
                        <p>Parallèlement à sa carrière artistique, elle poursuit des études supérieures en histoire de l’art et
                            archéologie, obtenant un Master 2 Recherche à l’Université Bordeaux Montaigne.</p>
                        <p>En France, elle enseigne la danse classique et la danse de caractère dans de nombreuses structures :
                            Université Bordeaux Montaigne, CAM de Bordeaux, ASCPA Danse, Lullabay Danza Project,
                            ainsi que à la JUDE MIKHALEV Ballet Academy dans la section pro en danse de caractère.
                            Elle intervient également comme professeure invitée au Conservatoire de La Rochelle pour des
                            master-classes de danse de caractère.</p>
                        <p>Elle est membre de jury pour les examens de fin de cycles certifiants aux Conservatoires de
                            Bordeaux et de Toulouse, et participe à de nombreux projets artistiques, pédagogiques et culturels
                            autour du répertoire classique et du patrimoine chorégraphique traditionnel.</p>
                        <p>Certifiée en Progressing Ballet Technique et en Yin Yoga, elle développe une approche corporelle
                            globale, à la fois rigoureuse, bienveillante et inspirante pour les élèves.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	Valeriya Pyestryakova END-->

</main>

<!--Scroll Dots Nav START-->
<nav class="scroll-dots-nav" aria-label="Navigation de section">
    <ul>
        <li><a href="#valeriya-pyestryakova" data-target="valeriya-pyestryakova" data-offset="150" data-label="Valeriya Pyestryakova"></a></li>
    </ul>
</nav>
<!--Scroll Dots Nav END-->
<?php
// get_sidebar();
get_footer();