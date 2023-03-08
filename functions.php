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

add_action('after_setup_theme', 'planty_theme_support'); 

function add_search_form($items, $args) {
    if( is_user_logged_in() && $args->theme_location == 'main-menu'){
        $items .= '<li class="admin-nav"><a href="https://localhost/planty2/wp_admin" class="admin-link">Admin</a></li>';        
    }
return $items;
}
add_filter('wp_nav_menu_items','add_search_form', 10, 2); ?>
