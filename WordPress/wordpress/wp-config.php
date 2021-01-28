<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ']dxgXxk%l{9h?nWZ%3Xz7k5v#7:m4<GR}qQW0RR,{F,@ZP7GP9NXLS?%,,E-rQ]I' );
define( 'SECURE_AUTH_KEY',  'c&KE#&>}9v13D$TBeQ}x`a#vJYvNG|~|Tacec,M]c1*gpqkwS79<3^?3s?p]gV*R' );
define( 'LOGGED_IN_KEY',    ':NHI^sNfq7h{sF$<%`vG9`*pHj1[#b(5Y3V9,z,]GUNc7a6t/ejg%1|r=Ew-XN.*' );
define( 'NONCE_KEY',        'v;e~sGlERh,V-Yq*!`_U$n<SQ#GRQG$sRH<`Q`j83N&%ezc!*zAp54e}<47lM::x' );
define( 'AUTH_SALT',        '$,2Q/4SM^[cTkt<XD2rz2.+R?~I/6P%>SK-L@Z)3{sZe^Pl,~3nxV0v3*{1P$41X' );
define( 'SECURE_AUTH_SALT', 'Ks>&[%4}^8r8Cb}QwBQPYz4s4l*6e2x=n=pTi~*[)4;id`XF~N:woWYmrfV7HSx{' );
define( 'LOGGED_IN_SALT',   'l}S=^ya1*=1POZndYd_wFN8FWnSg[FnNX5y/d.aa5Iq!0z#o6j+mJfH7w,1v-B_C' );
define( 'NONCE_SALT',       'Im[k%x&fJ}t^}<>I_50IkP+CjtaKA;ostHD{He9z|c#~JTmMuJ:U!^,>sFQyq~ L' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
