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

    class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth = 0, $args = null) {
            // Ajoutez la classe 'submenu' à la liste des sous-menus
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"submenu\">\n";
        }
    }
   
   
?>
<?php
function montheme_supports() {
    add_theme_support('title-tag');
}

function enqueue_tailwind_css() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Trouve le fichier tailwind.css dans le dossier du thème
    wp_enqueue_style( 'tailwind', get_stylesheet_directory_uri() . '/tailwind.css' );
}

function process_contact_form() {
    // Vérifiez la validité du nonce
    if ( isset( $_POST['contact_form_nonce'] ) && wp_verify_nonce( $_POST['contact_form_nonce'], 'process_contact_form' ) ) {

        // Récupérez les données du formulaire
        $lastname = sanitize_text_field( $_POST['lastname'] );
        $surname = sanitize_text_field( $_POST['surname'] );
        $mail = sanitize_email( $_POST['mail'] );
        $object = sanitize_text_field( $_POST['object'] );
        $content = esc_textarea( $_POST['content'] );

        // Construisez le contenu de l'e-mail
        $message = "Nom: $lastname\n";
        $message .= "Prénom: $surname\n";
        $message .= "Email: $mail\n";
        $message .= "Message:\n$content";

        // Utilisez la fonction de courrier WordPress pour envoyer l'e-mail
        wp_mail( 'yann.pernette.0@gmail.com', $object, $message );

        // Redirigez l'utilisateur après l'envoi du formulaire
        wp_redirect( home_url( '/contact/' ) );
        exit;
    }
}

// Ajoutez une action pour le traitement du formulaire
add_action( 'admin_post_process_contact_form', 'process_contact_form' );
add_action( 'admin_post_nopriv_process_contact_form', 'process_contact_form' );

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
?>