<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
function planty_theme_support(){
    add_theme_support('custom-logo'); // Logo Custom
    add_theme_support('title-tag'); // Titre du site
    }

    function extra_setup() {
        register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'twentythirteen' ));
        }
        add_action( 'after_setup_theme', 'extra_setup' );

add_action('after_setup_theme', 'planty_theme_support');