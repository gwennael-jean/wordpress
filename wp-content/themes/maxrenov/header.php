<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <div class="jumbotron home-jumbotron">
            <div class="jumbotron-shadow">
                <div class="container">
                    <h1 class="jumbotron-title">
                        <img src="<?= get_template_directory_uri(); ?>/img/logo-white.png" alt="Logo">
                    </h1>
                </div>
            </div>
        </div>
