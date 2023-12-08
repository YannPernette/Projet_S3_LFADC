<?php add_theme_support( 'post-thumbnails' ); ?>

<?php 
    //ajouter une nouvelle zone de menu à mon thème
    function register_my_menu(){
        register_nav_menus( array(
            'header-menu' => __( 'Menu header'),
            'footer-menu'  => __( 'Menu footer'),
            'footer-menu2'  => __( 'Footer2'),
            'footer-menu3'  => __( 'Footer3'),
            'footer-menu4'  => __( 'Footer4'),
        ) );
    }
    add_action( 'init', 'register_my_menu', 0 );
   
?>
<?php
function montheme_supports() {
    add_theme_support('title-tag');
}

function enqueue_tailwind_css() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Trouve le fichier tailwind.css dans le dossier du thème
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/tailwind.css' );
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
?>