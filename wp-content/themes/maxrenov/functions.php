<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

add_action('wp_enqueue_scripts', 'maxrenov_register_assets');

function maxrenov_register_assets()
{
    $version = '1.0';
    wp_enqueue_style('maxrenov-style', get_stylesheet_uri(), [], $version);
    wp_enqueue_style('maxrenov-jumbotron', get_template_directory_uri() . '/style/jumbotron.css', [], $version);
}

