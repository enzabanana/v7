<?php


add_action( 'wp_enqueue_scripts', 'hostinza_enqueue_styles' );
function hostinza_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    
    // responsive
    
    $responsivehandle = 'responsive-style';
    wp_enqueue_style( $responsivehandle, get_stylesheet_directory_uri() . '/assets/css/responsive.css',
        array(),
    );
    
    wp_enqueue_style( 'responsive-style', get_stylesheet_uri(),
        array( $responsivehandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    
    // child style
    
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    
}

?>