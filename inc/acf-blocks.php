<?php

// Custom block categories
function flynext_block_category( $block_categories, $editor_context ) {
	if ( ! empty( $editor_context->post ) ) {
		array_push(
			$block_categories,
			array(
				'slug'  => 'flynext',
				'title' => __( 'Theme blocks', 'flynext' )
			)
		);
	}
	return $block_categories;
}
add_filter( 'block_categories_all', 'flynext_block_category', 10, 2 );


// ACF custom blocks
$custom_blocks = glob( get_theme_file_path( '/template-parts/blocks' ).'/**' );

if( !empty( $custom_blocks ) ) {
	foreach( $custom_blocks as $custom_block ) {
		if( file_exists( $custom_block.'/config.php' ) ) {
			require_once $custom_block.'/config.php';
		}
	}
}