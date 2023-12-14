<!DOCTYPE html>
<html lang="fr">
<head <?php language_attributes(); ?>>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le futur a déjà commencé</title>
    <?php wp_head() ?>
</head>
<body>

<!-- page marion -->
<!--  -->
<div class="">
        <div class="text-bleu ">
            <header class="header grid grid-cols-2">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo wp_get_attachment_image(10, 'full'); ?></a>
                <!-- logo -->
                
                <div class="hover:text-orange  ">
                        <?php
                        wp_nav_menu ( array (
                        'theme_location' => 'header-menu' 
                        ) ); ?>
                </div>
            </header>
        </div>