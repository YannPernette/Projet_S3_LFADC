<!DOCTYPE html>
<html lang="fr">
<head <?php language_attributes(); ?>>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le futur a déjà commencé</title>
    <?php wp_head() ?>
</head>
<body>

<p class="text-body">les patates sont douces</p>

<p>test</p>
<h2 class="font-extrabold text-[#AD232a]" >Test</h2>
<p>test marion</p>

<div class="">
        <div class=" text-orange">
            <header class="header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo wp_get_attachment_image(64, 'full'); ?></a>
                <!-- logo -->
                
                <div class="">
                  <?php
                      wp_nav_menu ( array (
                      'theme_location' => 'header-menu' 
                      ) ); ?>
                </div>
            </header>
        </div>