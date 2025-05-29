<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mlba
 */
global $mlba_options;
?>

<!--Footer-->
<!--Footer START-->
<footer class="footer">
	<div class="footer-container">
		<div class="footer-row">
			<nav class="footer-col">
				<h4>Academy</h4>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer-1',
                        'menu_id'        => 'menu-footer-1',
                        'container'      => 'ul',
                    )
                );
                ?>
			</nav>
			<nav class="footer-col">
				<h4>Section Loisir</h4>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer-2',
                        'menu_id'        => 'menu-footer-2',
                        'container'      => 'ul',
                    )
                );
                ?>
			</nav>
			<nav class="footer-col">
				<h4>Info</h4>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer-3',
                        'menu_id'        => 'menu-footer-3',
                        'container'      => 'ul',
                    )
                );
                ?>
			</nav>
			<div class="footer-col footer-contacts">
				<h4>Contacts</h4>
                    <?php if($mlba_options['address']): ?>
                        <a href="<?php echo $mlba_options['google-maps'];?>" class="footer-address" target="_blank" rel="noopener noreferrer">
                            <?php echo $mlba_options['address'];?></a><br>
                    <?php endif;?>
                    <?php if($mlba_options['phone']): ?>
                        <a href="tel:<?php echo $mlba_options['phone'];?>" target="_blank" rel="noopener noreferrer">
                            <?php echo $mlba_options['phone'];?></a><br>
                    <?php endif;?>
                    <?php if($mlba_options['email']): ?>
                        <a href="mailto:<?php echo $mlba_options['email'];?>"><?php echo $mlba_options['email'];?></a>
                    <?php endif;?>
			</div>
			<div class="footer-menu-col footer-schedule">
				<h4>Horaires</h4>
                    <?php if($mlba_options['schedule']): ?>
                        <p><?php echo $mlba_options['schedule'];?></p>
                    <?php endif;?>
			</div>
			<div class="footer-col footer-socials">
				<h4>Reseaux</h4>
				<div class="footer-social-icons">
                    <?php if($mlba_options['instagram']): ?>
                        <a href="<?php echo $mlba_options['instagram'];?>" target="_blank">
                            <img class="footer-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/instagram-mint.svg" alt="">
                        </a>
                    <?php endif;?>
                    <?php if($mlba_options['facebook']): ?>
                        <a href="<?php echo $mlba_options['facebook'];?>" target="_blank">
                            <img class="footer-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/facebook-mint.svg" alt="">
                        </a>
                    <?php endif;?>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
            <?php if($mlba_options['copyright']): ?>
                <p><?php echo $mlba_options['copyright'];?></p>
            <?php endif;?>
		</div>
	</div>
</footer>
<!--Footer END-->

<!--Scroll to Top START-->
<div class="scroll-to-top"><img class="scroll-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/arrow-up.svg" alt=""></div>
<!--Scroll to Top END-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
