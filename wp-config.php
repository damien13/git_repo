<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'alertimmo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3mw!K*E7H70t@-:.)~ak*cr@lvNt=gMt`0=}O::Xm$n_c`&Qd{1P#:<YFagp:by[');
define('SECURE_AUTH_KEY',  '0Oh9+<[&,g^aL8Is+_7gHJU9LWOpl^rWxq69b1!n/#kMq|%VQ[|^r%=Kvx+;w)5!');
define('LOGGED_IN_KEY',    '0$2^HJ`Dpw+ n1*5K}|9p{BMtA8$DuPU@{B4wep-EM3:RO16w@T;#-Nx):w+&DtB');
define('NONCE_KEY',        ' +>Smn`HxZB:i^XTF>|~PM!y!x6^X|psXCeg,AAk:D-GH@`CY1kos7n-u@u0Fw4}');
define('AUTH_SALT',        '+yI)r-L)O*l*nu8G+bUfGJ~50-` D$=C:@c6J8drp9b3@Q%mWHC1(p{arM$*v.Cy');
define('SECURE_AUTH_SALT', 'Dv<%K+~9@uANy^BwO|=wvCETU|D/nIvEI#7P4RBr<<1W(P6J>KbEZfPiDcFHzb7b');
define('LOGGED_IN_SALT',   'RT{vRVI7BRx}j*k9x-~tkQw~pRuyO/]hhy=v%QsBiUV{%*&-P%Y,|:48ao6+#SM(');
define('NONCE_SALT',       'y&28J$ZbWxcs-*58nH%W|=n~RK|(lI0aIKg)r7k:$g.$5FLRiAls7+0?d.iU-+z,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');