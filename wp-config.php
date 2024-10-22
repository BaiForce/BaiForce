<?php
define( 'WP_CACHE', true );
//Begin Really Simple SSL key
define('RSSSL_KEY', 'W7dC0Ne10dlR928MRu2Iso7QC1T4r1m10TcGbutyeTNJ59ugDaeRrGVjAvU8XgTB');
//END Really Simple SSL key
/** Enable W3 Total Cache */

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
 
 define( 'WP_MEMORY_LIMIT', '256M' );
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gkkn1529_wp560' );
/** Database username */
define( 'DB_USER', 'gkkn1529_wp560' );
/** Database password */
define( 'DB_PASSWORD', 'F!C9S(N9p1' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h2iyludahu74zexiylfhn0uqzxooklz0ho6riqwdkgxuqinpr6gqumeaux6dlgef' );
define( 'SECURE_AUTH_KEY',  'mya3wkm6euvt9lnhop1rte7yipmoeyfovc0gma18eefcnjftqumf93m7wblnpdp5' );
define( 'LOGGED_IN_KEY',    'icyq04qvymtcfcfd2slcfwvkmvyy7mtsa2or4ufecwgefs1dg7tpe0m6ycbys90q' );
define( 'NONCE_KEY',        'eg5smcwgsyiznz6dshodxpeyix4ilsvrwno1mh14u80tlpbfeudpos8egjcergay' );
define( 'AUTH_SALT',        'ktupr6m5us0ueuoyobrk1m4amcvwtfhreldq6sprhrv2thshbms1gtaw6ndogag2' );
define( 'SECURE_AUTH_SALT', 'oo2xs0shvldykr40nql45rlayqmfqnqhbnmh0k99rcoonwioqunb5c1ysed1w3bz' );
define( 'LOGGED_IN_SALT',   'ecigezmmew2wcin6ppigeuis1wsvine74kswbzrbqhihz6ztfh7tyih1aqpmtx9k' );
define( 'NONCE_SALT',       'tigg3kgrdwsgutrbsewbnt2nesrsckd3vj9gvnzetae69xyiddaptyjjjfqja0pt' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuo_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
