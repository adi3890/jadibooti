<?php
/**
 * Enqueue Twitter Bootstrap scripts and styles
 */
function jadibooti_bootstrap_scripts() {
    wp_register_style( 'jadibooti-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'jadibooti-bootstrap-style' );

    wp_register_script( 'jadibooti-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_script( 'jadibooti-bootstrap-script' );
}

add_action( 'wp_enqueue_scripts', 'jadibooti_bootstrap_scripts' );