<?php

// Enable and Create Custom Menu

function register_menus() {

    register_nav_menus(
        array(
            'top-bar-dropdown-menu' => 'top-bar-dropdown-menu'
        )

    );

}
add_action('init', 'register_menus');
add_theme_support('menus');



// Load JS

function theme_scripts() {

    // Load jQuery 2.0

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-2.1.0.min.js', false, null);
    wp_enqueue_script( 'jquery' );

    // Load Foundation JS

    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array( 'jquery', 'foundation_js' ), false, true );

}
if( !is_admin() ) add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Load CSS

function theme_styles() {

    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>