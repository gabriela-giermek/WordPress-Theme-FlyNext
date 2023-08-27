<?php

// Admin theme settings
if( function_exists( 'acf_add_options_page' )) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme settings',
		'menu_title'	=> 'Theme settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Contact',
    'menu_title'  => 'Contact',
    'parent_slug' => 'theme-settings',
    'menu_slug' 	=> 'theme-contact-settings',
    'capability'	=> 'edit_posts'
  ));
}