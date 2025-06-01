<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mlba
 */
global $mlba_options;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="header">
    <!--	Header Top START-->
    	<div class="header-top">
    		<div class="container">
    			<div class="header-top-row">
    				
    				<div class="header-contacts">
    					<div class="header-contacts-item">
                            <?php if($mlba_options['address']): ?>
                                <a href="<?php echo $mlba_options['google-maps'];?>"
                                   target="_blank" rel="noopener noreferrer">
                                    <img class="header-icon location" src="<?php echo get_template_directory_uri();?>/assets/icons/location.svg" alt="Adresse de MLBA">
                                    <span class="header-contacts-text"><?php echo $mlba_options['address'];?></span>
                                </a>
                            <?php endif;?>
    					</div>
    					<div class="header-contacts-item">
                            <?php if($mlba_options['phone']): ?>
                                <a href="tel:<?php echo $mlba_options['phone'];?>" target="_blank" rel="noopener noreferrer">
                                    <img class="header-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/phone.svg" alt="Téléphone de MLBA">
                                    <span class="header-contacts-text"><?php echo $mlba_options['phone'];?></span>
                                </a>
                            <?php endif;?>
    					</div>
    					<div class="header-contacts-item">
                            <?php if($mlba_options['email']): ?>
                                <a href="mailto:<?php echo $mlba_options['email'];?>" target="_blank" rel="noopener noreferrer">
                                    <img class="header-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/envelope.svg" alt="Email de MLBA">
                                    <span class="header-contacts-text"><?php echo $mlba_options['email'];?></span>
                                </a>
                            <?php endif;?>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!--	Header Top END-->

    	<!--	Header Bottom START-->
    	<div class="header-bottom">
    		<div class="container">
    			<div class="header-bottom-row">
    				<div class="header-logo">
                        <a href="<?php echo get_home_url();?>">
                            <?php if(is_page(array('section-pro', 'enseignants', 'admission'))): ?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-pro.svg"
                                     class="header-logo"
                                     alt="Logo de Mikhalev Lanssens Ballet Academy, Section Pro"
                                     title="Logo de Mikhalev Lanssens Ballet Academy, Section Pro" />
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.svg"
                                     class="header-logo"
                                     alt="Logo de Mikhalev Lanssens Ballet Academy"
                                     title="Logo de Mikhalev Lanssens Ballet Academy" />
                            <?php endif; ?>
                        </a>
                    </div>

                    <div class="header-logo-mobile">
                        <a href="<?php echo get_home_url();?>">
                            <?php if(is_page(array('section-pro', 'enseignants', 'admission'))): ?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-mobile-pro.svg"
                                     class="header-logo-mobile"
                                     alt="Logo de Mikhalev Lanssens Ballet Academy, Section Pro"
                                     title="Logo de Mikhalev Lanssens Ballet Academy, Section Pro" />
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-mobile.svg"
                                     class="header-logo-mobile"
                                     alt="Logo de Mikhalev Lanssens Ballet Academy"
                                     title="Logo de Mikhalev Lanssens Ballet Academy" />
                            <?php endif; ?>
                        </a>
                </div>
    				<nav class="menu-nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-header',
                                'menu_id'        => 'menu-header',
                                'container'      => 'ul',
                            )
                        );
                        ?>
    				</nav>
    				<div class="btn btn-header btn-ghost">
    					<a href="<?php echo get_permalink(124); ?>">Inscription</a>
    				</div>
    				<div class="burger">
    					<img src="<?php echo get_template_directory_uri();?>/assets/icons/burger.svg" alt="" />
    				</div>
    			</div>
    		</div>
    	</div>
    	<!--	Header Bottom END-->

    <!--		Header Mobile START-->
    	<div class="header-mobile">
    		<div class="header-mobile-wrap">
    			<div class="header-mobile-close">
    				<img src="<?php echo get_template_directory_uri();?>/assets/icons/xmark.svg" alt="" />
    			</div>
    			<nav class="menu-mobile-nav">
    				<?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-header',
                                'menu_id'        => 'menu-header',
                                'container'      => 'ul',
                            )
                        );
                    ?>
    			</nav>
    			<div class="btn btn-primary-color">
    				<a href="<?php echo get_permalink(124); ?>">Inscription</a>
    			</div>
    		</div>
    	</div>
    <!--		Header Mobile END-->
    </header>
