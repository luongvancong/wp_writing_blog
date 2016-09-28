<?php

// Styles
add_action('wp_enqueue_scripts', 'writing_styles' );
add_action('wp_enqueue_scripts', 'writing_scripts' );

// Menu location
register_nav_menus( array(
    'main-nav' => 'Menu chính'
) );

// Theme support
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Config
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function writing_excerpt_more( $more ) {
    return '...';
}

add_filter( 'excerpt_more', 'writing_excerpt_more' );

function writing_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri(). '/framework/bootstrap/css/bootstrap.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/framework/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style('asalah-plugins', get_template_directory_uri() . '/pluginstyle.css' );
    wp_enqueue_style('asalah-style', get_template_directory_uri() .  '/style.css');
    wp_enqueue_style('asalah-ie', get_template_directory_uri() . '/css/ie.css' );
    wp_enqueue_style('contact-form-7');
    wp_enqueue_style('instag-slider' );
    wp_enqueue_style('asalah-podkova', 'https://fonts.googleapis.com/css?family=Podkova%3A700&#038;ver=4.4.5');
    wp_enqueue_style('asalah-rokkit', 'https://fonts.googleapis.com/css?family=Rokkitt%3A400%2C700&#038;ver=4.4.5' );
    wp_enqueue_style('asalah-lora', 'https://fonts.googleapis.com/css?family=Lora%3A400%2C700&#038;subset=latin%2Clatin-ext&#038;ver=4.4.5' );
    wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css?ver=3.2' );
}

function writing_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');
    wp_enqueue_script('modernizr', get_template_directory_uri(). '/js/modernizr.js' );
    wp_enqueue_script('google-platform', 'https://apis.google.com/js/platform.js' );
    wp_enqueue_script('jquery-flex-slider', '/wp-content/plugins/instagram-slider-widget/assets/js/jquery.flexslider-min.js' );

    // In footer
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/framework/bootstrap/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'asalah-js', get_template_directory_uri() . '/js/asalah.js', array(), null, true );
}