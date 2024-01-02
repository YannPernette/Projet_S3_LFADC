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
    var hamburgerBtn = document.querySelector('.hamburger-btn');
    var menu_mobile = document.querySelector('.all_menu2');

    hamburgerBtn.addEventListener('click', function () {
        menu_mobile.classList.toggle('md:block');
    });

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
            var hoveredIndex = Array.from(li.parentElement.children).indexOf(li) + 1;

            if (hoveredIndex === 1) {
                header.style.paddingBottom = '80px';
                li.querySelector('a').style.color = '#EF8731';
            } else if (hoveredIndex === 2 || hoveredIndex === 5) {
                header.style.paddingBottom = '50px';
                li.querySelector('a').style.color = '#EF8731';
            } else if (hoveredIndex === 3 || hoveredIndex === 4) {
                resetStyles();
                li.querySelector('a').style.color = '#EF8731';
            } else if (hoveredIndex === 6) {
                li.style.backgroundColor = '#B85227';
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
                <a class="img_logo w-36 py-5" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://lfadc.kyliangaertner.space/wp-content/uploads/2023/11/Logo-le-futur-a-deja-commence.webp" alt="logo LFADC"></a>
                <!-- logo -->
                
                <div class="all_menu flex items-center justify-end md:hidden">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'walker' => new Custom_Walker_Nav_Menu(),
                        ));
                        ?>
                </div>
                <button class="bg-none border-0 hamburger-btn hidden md:block focus:!bg-none focus:!border-0 md:!col-start-5">&#9776;</button>
                <div class="all_menu2 items-center justify-end hidden">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'walker' => new Custom_Walker_Nav_Menu(),
                        ));
                        ?>
                </div>
            </header>
        </div>