<?php
/**
 * Footer menu
 */
?>


<div class="footer-menu">
	<?php
		wp_nav_menu(array(
			'theme_location'   => 'footer',
			'container'        => 'div',
			'container_id'     => 'footer-menu-wrapper',
			'container_class'  => 'footer-menu__wrapper',
			'menu_id'          => 'footer-menu',
			'menu_class'       => 'footer-menu__list list-unstyled m-0 p-0',
			'depth'            =>  0
		));
	?>
</div>