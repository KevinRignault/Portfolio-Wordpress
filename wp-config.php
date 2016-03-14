<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'portfolio-wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';kyljb|u^9nJC-7JkN+TN{#2%_r4y_{<!g6drzA1]Sd(IJW4dTgbT~_xxjl5B#v;');
define('SECURE_AUTH_KEY',  'Q3N.1f.J+qJ@da|wE!tLZAqmZPbfq>36)-&To{~HEJ*aylDJHgl>hE,W]v-f97H@');
define('LOGGED_IN_KEY',    'eyrR{h<Yw77h`}Dqm+/CG-a:S~y)6u[&u/@ykaHjO|V~+JZtGjoXI1b /,JE7f/1');
define('NONCE_KEY',        '_$-vU[Tetr9AwjFBv:3!h|/ZXS:|<6^`Z-r]h9OtN}wKR1aMy)9O]&=B~?MaU&0~');
define('AUTH_SALT',        'I$in!:j&d%:NIoOX|yRiKGwFRv>*GnRz>Ugx7iBGcz1iEm45}NwQe,9=KIV[z-sd');
define('SECURE_AUTH_SALT', 'v]Az]o@+qY0~F9#{<5W<tDq1=AvRJ{y+<S$<r1+W=lZnGne3tvY?~8+52`L3F=l@');
define('LOGGED_IN_SALT',   'nzw5mz292km=ETD%lfX6~y -V=<4Msc6r-m@O=lNosNPu:,<Z+qP!1Np}b;EIbB#');
define('NONCE_SALT',       'k9APQuL]zwy|(?uuFd6Tbjr)w},7s8>p6Ra#$1?qXgt>|tH@.0aR9<JKkp2XwU)k');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wpp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
define('UPLOADS', 'wp-content/medias/');
require_once(ABSPATH . 'wp-settings.php');