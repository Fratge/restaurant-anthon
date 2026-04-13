<?php

function mon_theme_scripts() {
    wp_enqueue_style('mon-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mon_theme_scripts');

function mon_theme_register_menus() {
    register_nav_menus(array(
        'menu-principal' => 'Menu Principal',
        'menu-footer'    => 'Menu Footer'
    ));
}
add_action('after_setup_theme', 'mon_theme_register_menus');
