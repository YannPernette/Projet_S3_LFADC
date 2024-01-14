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
    <script>
document.addEventListener('DOMContentLoaded', function () {
    var header = document.querySelector('.header');
    var isSubMenuOpen = false;

    function resetStyles() {
        header.style.paddingBottom = '0px';
        document.querySelectorAll('header>div>div>ul>li>a').forEach(function (a) {
            if (header.style.paddingBottom === '0px') {
                     a.style.color = '';
            }
        });
    }

    document.querySelectorAll('header>div>div>ul>li').forEach(function (li) {
        li.addEventListener('mouseover', function (event) {
            var subMenuItems = li.querySelectorAll('.submenu li');
            var hoveredIndex = Array.from(li.parentElement.children).indexOf(li) + 1;

            if (subMenuItems.length === 2) {
                header.style.paddingBottom = '50px';
                li.querySelector('a').style.color = '#EF8731';
            } else if (subMenuItems.length === 3) {
                header.style.paddingBottom = '75px';
                li.querySelector('a').style.color = '#EF8731';
            } else if (subMenuItems.length === 4) {
                header.style.paddingBottom = '100px';
                li.querySelector('a').style.color = '#EF8731';
            } else if (subMenuItems.length === 0) {
                resetStyles();
                li.querySelector('a').style.color = '#EF8731';
                if (li === li.parentElement.lastElementChild) {
                    li.style.backgroundColor = '#B85227';
                    li.querySelector('a').style.color = '#FFFFFF';
                } else {
                    li.querySelector('a').style.color = '#EF8731';
                }
            }
        });

        li.addEventListener('mouseout', function (event) {
            li.style.backgroundColor = '';
            if (!isSubMenuOpen) {
                resetStyles();
            }
        });
    });
});


</script>
</head>
<body>

<!-- page marion -->
<!--  -->
<div class="bg-beige">
        <div class="text-bleu ">
            <header class="header">
                <a class="img_logo ml-4 w-36 py-5" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo wp_get_attachment_url(145); ?>" alt="logo LFADC"></a>
                <!-- logo -->
                
                <div class="all_menu flex items-center justify-end md:hidden">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'walker' => new Custom_Walker_Nav_Menu(),
                        ));
                        ?>
                </div>
            </header>
        </div>