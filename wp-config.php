<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'shop' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '0000' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VTsW5Uo):?*Ry}V%NS:wh@}mR`.+Sk3D~&r,UYH<KryuM9X*l`HbJtr(e2h1Q=cb' );
define( 'SECURE_AUTH_KEY',  '#Tx!vE8M,e]1:>yym%$p3DYwBT-ud7%aQ`!%O%qfz}(o:Zy!2y]Z]7UJqqXZtzl]' );
define( 'LOGGED_IN_KEY',    'mie- |Cw2$E9Sq_$uX4!yF2_~-JVGRq2Wv>>!hQtP>a^I(j(Sa*uV|58pZDFd/5 ' );
define( 'NONCE_KEY',        'U^PgmZ;^y OW p;ARRI]-~h?#kFboh=<p ;$<&=H]JRtN{5E2h(#iWl(T 0p}%aq' );
define( 'AUTH_SALT',        'Adz&!}4Q4hbgxAOnbqa3-MUdtXb[Orinkma5i{_&%.}~DrMh,u!#IH~jtL$f2%.m' );
define( 'SECURE_AUTH_SALT', '@0bYAmKYu?KPkL2kjVaZvzK|^ZNLqG=`+2F49D/OMfz0W:Z:9Dc5y^CTajLN6w[=' );
define( 'LOGGED_IN_SALT',   'X`zuYDzbbS;Pt^lR=ELm394P9Mq3Kk]DehL3/Z/uuh+ KYLRgw3YFqF7{}M@z*@x' );
define( 'NONCE_SALT',       'z&fZ9lX/ZouWT@r{9s.^)4S6ws?/I:4}yWgXKMfjE?v-W~8%0Q~[z2BC?3~ =G`s' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
