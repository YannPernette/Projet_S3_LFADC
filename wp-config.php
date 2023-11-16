<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'le_futur_a_deja_commence' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sL?;98ylp%ao$4=6; AN/kxcs9~|Pp@WPUe3[sh6OTnz.>SCuu9!MY1|rJ4,V@O#' );
define( 'SECURE_AUTH_KEY',  'cu%z[n=VH( K<&?1Tp_(0 j2CS7)/p^gJ_/!f$E}2>>7V3iXm.5W{m27$cp+Peqs' );
define( 'LOGGED_IN_KEY',    '@3n7I5<9(bu9gY9ZE1Y@-f(2A3?*$^$Qo|g?uT7l3REfzmXty}qxLnYoH18bnQqf' );
define( 'NONCE_KEY',        'b(*~(Lk-e/He5TSxxI.|Hsa*/d/l5kzYb;b@[ xa;VhLOCh(bchNR +i?^)@#d9-' );
define( 'AUTH_SALT',        'iW``[S<-.I}oo[.+e(uwu%JyZIi|58#}~_/d-f}[I:E}(uW2il3zN8Kf5lEvE>[y' );
define( 'SECURE_AUTH_SALT', '*t,LO+:_,kJ6&3OCs:PT-`PBXP=zlMa0hG=DR2w;]A={lLL9A36ZUsn:3<MCv4;$' );
define( 'LOGGED_IN_SALT',   'T m]wz7Y6=gQY/krT9%U503;DR3Y{D^zRvr4S_Kf9Oq1?[IoZiT13epd%E-x8GJE' );
define( 'NONCE_SALT',       'Bsq=gj*8W,E],h!5&xws$U7Vpc`|/Y(;Is:r4vo0-|s;^mJ[D:J=OTH#|#7iIXPv' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
