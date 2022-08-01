<?php

function hostinza_enqueue_styles() {
	wp_enqueue_style(
		'hostinza-child-style',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',			
	);
}
add_action( 'wp_enqueue_scripts', 'hostinza_enqueue_styles', 50 );

?>