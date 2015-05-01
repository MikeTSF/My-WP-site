<?php
/**
 * Proper way to enqueue scripts and styles
 */
function mytheme_scripts() {
    wp_enqueue_style( 'mytheme', get_stylesheet_uri() );
    wp_enqueue_script( 'mytheme', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'mytheme', get_template_directory_uri() . 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('mytheme'), '20150421', true );
}

add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );