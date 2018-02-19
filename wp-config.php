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
define('DB_NAME', 'wp_database_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'a[@:?1jC?z^)4/B60F=7a`bJa|5zH%8vEJ,90gr^MpLJ(XdeY>LVM8|iL&Oo/~KU');
define('SECURE_AUTH_KEY',  '2S{}Rt_e=gn@~[M;zrg?^{+,W+o0mjN2S#->Z8X4|UW2?J^42m*hm#]lHM;&anO)');
define('LOGGED_IN_KEY',    'Mc82apvQ?cy(a)C&ObQA2nV#FMU< 3&_?;;iP,T>e4):rC+|4WEk6DAR+G:i1W~p');
define('NONCE_KEY',        '%O;&]Bt-1btg>`W%8Koo|V3k{,itIPWR_#<;-xx%Kq:8|XcLmpqNJu?a~+T25K{S');
define('AUTH_SALT',        'Qogr9OB`CUdV,uBL-lBzCi46fj1gh]W9i,+O,C(|q|=IFNx+@gA@{j#~&+*$bLd,');
define('SECURE_AUTH_SALT', 'Pl@4K_~5)z3!?o+5FD?IGfeQ,WQA7(-Fz7J()u54waeh/P}/#x/vrP9*$9g*5i17');
define('LOGGED_IN_SALT',   'zy!09&13S`N,dYn/D+_#me[=Kd|3~3@!(rNJPYXlfO):5R=x(nv$r^>7>:I]in_v');
define('NONCE_SALT',       'IcCGDH&jWY3syxSzFG#lI`PsiygI[yc140#*k:$]UF.,S^D&wI0tN1Yri FL7/Vg');

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
