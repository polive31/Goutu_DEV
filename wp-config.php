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
define('DB_NAME', 'goutu');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'psc.olv');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'eEYdBzjwTTReZMJV');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'sK4 $r9,G+?yF0nuN_IQ[T]*ZOvzfrM_^W3v]OAK{Nr$Ds#ySpWWJDl5gxK8%LBQ');
define('SECURE_AUTH_KEY',  '3pMBWa|gulY2P;CKj&s-f?6`M*>>]SEV;|H)#)c-|0v2GR:9o`r~^cGi0#XQZ<65');
define('LOGGED_IN_KEY',    't6G$)sNx3{nLbrY}TYm5N<z6:zeKbf3QmWS.ZQan-!:_7)jRl[w994![nR|iHpjY');
define('NONCE_KEY',        'Oy~9TnB2_S3vbZW!.],Sc^3sig$<~8eqUWQaOEr^eBw)RUru}pfQ$`szjI}, _<*');
define('AUTH_SALT',        '/s)=Eb{#Ni?#|fSBYe5w?.fd/+1Rg~YeI!AB;2vJ|~ehEx<MWuP*O*I^VHGK oJ%');
define('SECURE_AUTH_SALT', 'zO}%Vsg=uE4-qdm-;Dei.VeH,jlk*CL6b$6%2;!D~jN4^N`?O$Zw@Vvu2;#xc3<V');
define('LOGGED_IN_SALT',   '7I7>u{<l*Y%RgI54|?,k%.OU.+8_r]YGcwS:bE#>:WqrBk0etV~mai ^zXRxrN00');
define('NONCE_SALT',       'eZIGnMBy(}e3KQ%(wRe9NLNcYDsTH5Y{7Hncw4AlyK(?F~krwT^Q^0E^Y?8Id+@!');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ar834_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');