<!-- Code exécuté à chaque fois que le thème est chargé -->

<?php

function montheme_supports() {
    add_theme_support('title-tag');
}



add_action('after_setup_theme', 'montheme_supports');