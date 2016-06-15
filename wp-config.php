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
define('DB_NAME', 'wp_plaitil_2k16');

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
define('AUTH_KEY',         'TUW>4+Xa:ta1EQ1aYGkN.l] t>oe Yd 3~BHIK`.Zc;JX3V%jOI`Viz$HZECOAv1');
define('SECURE_AUTH_KEY',  'ofqRO)r &e:+yndSvVVPOz66,3G4u?[|#Lml|<}4coaUNEx[zs{p^D@M~-zA+t<O');
define('LOGGED_IN_KEY',    '7sw#g8<4CVC*g SOdtYiG(no8CJKC~Tk*0/_(5@j}sO*YF>vg:.!e>z76/,;Qqk8');
define('NONCE_KEY',        '{|QQpmfA~U7Zu m/_)7E2m}A{ #;)/]73^hO@7`-YI)}~)cUgKN5C*FcdMvRaodz');
define('AUTH_SALT',        'E3y*E8e10b3f@y%>:m9z:ruZC0wtZS9J&T,K@7f+uRI>CW_<J@QF; ^z.7;gZ1W~');
define('SECURE_AUTH_SALT', 'Mh&n##nQ1,|@oiMeoJHlrbx+t(AFV.i&~!Tukv1yT^#jnSI_IuM5?]D,x1]JZL=_');
define('LOGGED_IN_SALT',   'rSLToH%xJ^e7/]{uETFXb])8OX14xo*%!/;gk[o|%2i{2^],`e)~Y,HBU-/dPIOP');
define('NONCE_SALT',       '8BJp~cK@^RhIOE?!apQtAk1d aE63o%}Y5LMiWMM;!pG>!*g_8NQ/,-7V5/m!?n5');
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
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
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
