<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

add_action('init', 'maxrenov_register_post_types');
add_action('wp_enqueue_scripts', 'maxrenov_register_assets');

function maxrenov_register_assets()
{
    $version = '1.0';
    wp_enqueue_style('maxrenov-style', get_stylesheet_uri(), [], $version);
    wp_enqueue_style('maxrenov-jumbotron', get_template_directory_uri() . '/style/jumbotron.css', [], $version);
}

function maxrenov_register_post_types()
{
    $labels = array(
        'name' => 'Services',
        'all_items' => 'Tous les services',
        'singular_name' => 'Service',
        'add_new_item' => 'Ajouter un service',
        'edit_item' => 'Modifier le service',
        'menu_name' => 'Services'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'excerpt', 'thumbnail'),
        'menu_position' => 20,
        'menu_icon' => 'dashicons-hammer',
    );

    register_post_type('service', $args);
}
