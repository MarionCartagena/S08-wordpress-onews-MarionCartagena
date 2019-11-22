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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'iC`_sI,epi}?e%6hx@7;$`Mcqj9WI`*8r6U+=>+g|QSyWaU@fen]=^->RX/r=-PC' );
define( 'SECURE_AUTH_KEY',  '!aBOCI+J]8yb|6G_,{n05z [^N|g4}8-8-F)JgdMWC+$u^W[B4P0f*wVAsl;wqWP' );
define( 'LOGGED_IN_KEY',    'd7U~1^dy]a6.XGIiq@]gF8WFB$K*Zh1&i@0{u;VLJg]o&_53-fwW4k6k|f@B5f}?' );
define( 'NONCE_KEY',        'EfTR@Kx5O>T8F37|B.8W]8BSU!_qV?syQz`^.*~9kSy:nMXFVYuZn[F|knzV-K`a' );
define( 'AUTH_SALT',        '.U&Z.R7}N<_*eu]Do{:{vnyWHI-^7MgcWZq>*z= fRfZej5K<CozLfObU`u^!!n$' );
define( 'SECURE_AUTH_SALT', 'Wp$[vYq[_.1H)V~q&7?Z^%X&%7 (pl2aAb1!WZx2qP,,62SLbN[mySdF,hg&P=@l' );
define( 'LOGGED_IN_SALT',   'fBY6UU?7H/)i+=5/k%Fy%,NtvC6J]]%>>os%[l#Q)my&kA<rvPLg!u[[.La*TB`V' );
define( 'NONCE_SALT',       '={5H7y(#m?l=4~q[V9$qgS}apbj]!q/Kcp{UredN43 ZO,d;XHVk3b,9$FGfrSVt' );
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

// J'indique à WordPress comment faire les mises à jours
// https://codex.wordpress.org/fr:Modifier_wp-config.php#Les_Constantes_des_Mises_.C3.80_Jour_WordPress
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
