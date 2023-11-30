<!DOCTYPE html>
<html lang="fr">
<head <?php language_attributes(); ?>>
    <meta charset="UTF-8">
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