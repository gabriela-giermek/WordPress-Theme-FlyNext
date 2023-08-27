<?php
/**
* Fullscreen menu
**/
?>

<div class="fullscreen-menu w-100">
	<div class="fullscreen-menu__content scrollbar-inner">
		<?php
			wp_nav_menu(array(
				'theme_location'   => 'primary',
				'container'        => 'div',
				'container_id'     => 'primary-menu-wrapper',
				'container_class'  => 'fullscreen-menu__wrapper w-100 h-100 d-flex justify-content-center align-items-center',
				'menu_id'          => 'primary-menu',
				'menu_class'       => 'fullscreen-menu__list list-unstyled',
				'depth'            =>  0
			));
		?>
	</div>

	<img src="<?php bloginfo('template_directory'); ?>/dist/images/airplane-bg1.jpg" class="fullscreen-menu__background fullscreen-menu__background--top d-none d-md-block" alt="Airplane background image">
	<img src="<?php bloginfo('template_directory'); ?>/dist/images/airplane-bg2.jpg" class="fullscreen-menu__background fullscreen-menu__background--bottom d-none d-md-block" alt="Airplane background image">
</div>