<!-- Code exécuté à chaque fois que le thème est chargé -->

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