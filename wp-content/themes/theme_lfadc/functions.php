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
  
  	add_filter('carousel_slider_load_scripts', 'carousel_slider_load_scripts');
function carousel_slider_load_scripts( $load_scripts ) {
	return true;
}
}

function enqueue_tailwind_css() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Trouve le fichier tailwind.css dans le dossier du thème
    wp_enqueue_style( 'tailwind', get_stylesheet_directory_uri() . '/tailwind.css' );
}

//fonction formulaire de contact
function process_contact_form() {
    // Vérifiez la validité du nonce
    if ( isset( $_POST['contact_form_nonce'] ) && wp_verify_nonce( $_POST['contact_form_nonce'], 'process_contact_form' ) ) {

        // Récupérez les données du formulaire
        $lastname = sanitize_text_field( stripslashes( $_POST['lastname'] ) );
		$surname = sanitize_text_field( stripslashes( $_POST['surname'] ) );
		$mail = sanitize_email( stripslashes( $_POST['mail'] ) );
		$object = sanitize_text_field( stripslashes( $_POST['object'] ) );
		$content = esc_textarea( stripslashes( $_POST['content'] ) );

        // Construisez le contenu de l'e-mail
	  	$message = "De: $lastname $surname\n";
	  	$message .= "\nEmail: $mail\n";
        $message .= "\nMessage:\n$content";
	  	$message .= "\n\nMail envoyé automatiquement depuis le formulaire de contact de l'association Le Futur a déja commencé\n";
	  	$message .= "https://lefuturadejacommence.fr/";

        // Utilisez la fonction de courrier WordPress pour envoyer l'e-mail
        wp_mail( 'lefuturadejacommence@gmail.com', $object, $message );

        // Redirigez l'utilisateur après l'envoi du formulaire
        wp_redirect( home_url( '/contact/' ) );
        exit;
    } else {
        // Si le nonce n'est pas valide, faites quelque chose ici (par exemple, renvoyez une erreur).
        wp_die('Erreur de sécurité. Veuillez réessayer.');
    }
}

//fonction formulaire enseignant
function process_contact_form2() {
    // Vérifiez le nonce pour la sécurité
    if (isset($_POST['contact_form_nonce']) && wp_verify_nonce($_POST['contact_form_nonce'], 'process_contact_form2')) {
        // Récupérez les données du formulaire
        $lastname = sanitize_text_field(stripslashes($_POST['lastname']));
        $surname = sanitize_text_field(stripslashes($_POST['surname']));
        $postal = sanitize_text_field(stripslashes($_POST['postal']));
        $town = sanitize_text_field(stripslashes($_POST['town']));
        $mail = sanitize_email(stripslashes($_POST['mail']));
        $school = sanitize_text_field(stripslashes($_POST['school']));
        $project = sanitize_text_field(stripslashes($_POST['project']));
        $course = sanitize_text_field(stripslashes($_POST['course']));
        $content = esc_textarea(stripslashes($_POST['content']));        

        // Construisez le message
        $message = "De: $lastname $surname\n";
        $message .= "\nCode postal: $postal $town\n";
        $message .= "Email: $mail\n";
        $message .= "Projet souhaité: $project\n";
        $message .= "Établissement: $school\n";
        $message .= "Classe / Niveau des élèves: $course\n";
        $message .= "\nMessage:\n$content";
        $message .= "\n\nMail envoyé automatiquement depuis le formulaire enseignant de l'association Le Futur a déja commencé\n";
	  	$message .= "https://lefuturadejacommence.fr/";

        // Sujet du message
        $subject = "Proposition de projet avec l'école $school se situant à $town";

        // Envoyer l'e-mail
        wp_mail("lefuturadejacommence@gmail.com", $subject, $message);

        // Redirigez l'utilisateur après le traitement du formulaire
        wp_redirect(home_url('/enseignants/'));
        exit;
    } else {
        // Si le nonce n'est pas valide, faites quelque chose ici (par exemple, renvoyez une erreur).
        wp_die('Erreur de sécurité. Veuillez réessayer.');
    }
}

// Ajoutez une action pour le traitement du formulaire Contact
add_action( 'admin_post_process_contact_form', 'process_contact_form' );
add_action( 'admin_post_nopriv_process_contact_form', 'process_contact_form' );
// Ajoutez une action pour le traitement du formulaire Enseignant
add_action('admin_post_nopriv_process_contact_form2', 'process_contact_form2');
add_action('admin_post_process_contact_form2', 'process_contact_form2');

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
?>