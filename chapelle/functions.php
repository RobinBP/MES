<?php

function chapelle_support () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
	register_nav_menu('header','En tête de menu');
    register_nav_menu('footer','Pied de page');
}

function chapelle_register_assets () {
    wp_enqueue_style( 'chapelle-style', get_stylesheet_uri(), array());
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function chapelle_title_separator () {
    return '|';
}

function chapelle_menu_class ($classes) {
    $classes [] = 'nav-item';
    return $classes;
}

function chapelle_menu_link_class ($attrs) {
    $attrs ['class'] = 'nav-link';
    return $attrs;
}

function register_acf_block_types() {
    acf_register_block_type(array(
        'name'              => 'accordion',
        'title'             => __('Accordion'),
        'category'          => 'custom',
        'render_template'   => 'template-accordeon.php',
    ));
}
add_action( 'acf/init', 'register_acf_block_types' );

add_action('after_setup_theme', 'chapelle_support');
add_action('wp_enqueue_scripts', 'chapelle_register_assets');
add_filter('document_title_separator', 'chapelle_title_separator');
add_filter('nav_menu_css_class', 'chapelle_menu_class');
add_filter('nav_menu_link_attributes', 'chapelle_menu_link_class');


