<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo site_url(); ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php echo site_url(); ?>/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>