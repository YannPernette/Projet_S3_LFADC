<?php add_theme_support( 'post-thumbnails' ); ?>

<?php 
    //ajouter une nouvelle zone de menu à mon thème
    function register_my_menu(){
        register_nav_menus( array(
            'header-menu' => __( 'Menu header'),
            'footer-menu'  => __( 'Menu footer'),
        ) );
    }
    add_action( 'init', 'register_my_menu', 0 );
   
?>


