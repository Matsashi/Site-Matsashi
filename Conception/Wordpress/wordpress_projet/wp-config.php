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
define( 'DB_NAME', 'wordpress_projet' );

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
define( 'AUTH_KEY',         'trN`Vu:5!]~|oKc_T(tz1xYM)z%Ju_{HF|F:m2LtMB&u(0`X ,l)-rB!kp|uZn,C' );
define( 'SECURE_AUTH_KEY',  'K{|TJkF^}GX.;eB}$.x2-W]!+}QjNQ9v5(NSI~JbS*-V={B:L4@Ga~+|  cDY=(C' );
define( 'LOGGED_IN_KEY',    '-j(V7/+AgrQIDybZ#T!?L4]xm3c>2vIp=wkv1.ry0^.0m&A4#9C51_[4g4M^$1mI' );
define( 'NONCE_KEY',        '#7RT?|O?J(]/kUH0iVs>][JSt@_.<FW<V:i{D7)R2{td[6upc%%$<b_8OVJMZBFL' );
define( 'AUTH_SALT',        ';,A<!]-yo@|Q9AJ@HICkCc+b(92sy:BgOGgxOpO9!++@RVj0)BdrT*Vs-`^(TF/u' );
define( 'SECURE_AUTH_SALT', '7F59},0ii),h.(hsAdWJ=wqT&Xq8Y%{$I)n(Rg?*>c{?c,HX>nCV8xC|VOfSD/i5' );
define( 'LOGGED_IN_SALT',   '3JxDlLECgQ}LXxO&We-B@:19U-`&@ds4muSkvgrVgApju Fy2tptF^[Z*4ISved.' );
define( 'NONCE_SALT',       'b+| )ImT$<}In1`VgH4A*}A$}I{lOOQ}`1?Mza+(6^[6Ck[.4c~Ql;jjy%eU=!!p' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpprojet_';

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
