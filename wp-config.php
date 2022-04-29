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
define( 'AUTH_KEY',         'kbuu&%h:uh5*JNtR:~vA>PAZ:L/1ELTZhAtpCz^[)U35=I|[+_QH},%gMg` *-)C' );
define( 'SECURE_AUTH_KEY',  'ib:zs4F2mwxWTy_(n6mzgd6sXV46T1I]}us|_@$uezerC]K9vjS>fJ(TG,jV{6S-' );
define( 'LOGGED_IN_KEY',    'b/yiGl]3txNHWmTJwUZ%!Y}}Y~M%/D;w]f*cV|,C8&QHxQ`=g`@YJeEl(,Z3(/@i' );
define( 'NONCE_KEY',        ' OQQBeTk8Av,<emE.<Or[^`1_&nk9eP5-)n{fjqRr^}JY/+jBCqdbyQ%rX#Y$)_}' );
define( 'AUTH_SALT',        'E&:fHEVIY}}yfoA}a_oUYS.h]SR}_J>+TDD=;]}v{aBy:KFX(uxbUz+2HRfh~2Et' );
define( 'SECURE_AUTH_SALT', 'xbj E_FxcfX W]^-6l9?#QK&_Xql}vF(S97-rRYo$L?X4idA)*1f]A&rLYYNX Ew' );
define( 'LOGGED_IN_SALT',   'NN7-#KsSO|i@DTP8/bd-I><BccJbC{Z6)J/L[BH`YOcn=<e[nz!I.mXZFuz=R#nK' );
define( 'NONCE_SALT',       'CzY( `BlJ=$D;,(xr}drEcRx,K,1&9(p@@$denCn@b?8F U4<,&A1Qj>Pw+OOgE^' );
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
