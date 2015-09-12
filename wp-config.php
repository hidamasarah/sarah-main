<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sarah-main');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n^N^l^56cnII?,>v+h^`RMh1p=+C*l_d!Nv*m`DA+/5)C=[}rI>+;[`UBpZ4-pO6');
define('SECURE_AUTH_KEY',  'l#QB+Xlg|{Z$Ke~}84?PH2{IEG+289H(=[rlcHTdrYU5$y;9ik0N[j)w9yy`-~&P');
define('LOGGED_IN_KEY',    'b<.+QKPW:Mr9r*y>W-h<c? 5m?b~B4j]~|jjx>*z9/6*6|9[cxcXR!+r3?g=~k2&');
define('NONCE_KEY',        '(-p<Q?w4)nyu`D[u,;w2jtQJ#,~OvIpt}}:i<T2_nE=+*WiDLT-_$4`Woj>zu5ME');
define('AUTH_SALT',        'u6e4.Uy4Li@=t(sj-diIJ.#WoWEAQPJ@xb|k-m}+C0NTGS6+b33tAi}H8f`0Rg7B');
define('SECURE_AUTH_SALT', 'TCs?0I7UsoVkJ `l=i{h:Sl^?|{#.ck~E++ZlyK#5s+4f 1S/x4YE83C{@-J=|;5');
define('LOGGED_IN_SALT',   'trfc|-~!bR:V<p,].V 9Ex4a0,amaWhXOpTu[`e` n$t|i]U[%VRI@8IRv5DSYM#');
define('NONCE_SALT',       '3hF9c;^_@/Ln|xqVS-sz!aKqtb<G0}[vn_3zYlbHgVIBre++n{w=`87aSW&EYX01');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
