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
define('DB_NAME', 'wordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'x^jx/,S.f`ncZ?=1iOD{`$Ej>33_6)=Gh8b;?:gGw;qL75PjcufI1!:v.b>mS[KU');
define('SECURE_AUTH_KEY',  '@F9PF<@3^X&cf$T(mLceDCfQ@Kr9FkLRd2l.j^a6s8OG9=3@v/2@jc5?nOLz{6.]');
define('LOGGED_IN_KEY',    'Xgqzv4-9xGF3Hu85,tb9A]6PT2x,TPxB$89^by{,HiX,BK,)cJ3eITC,<sJ99M %');
define('NONCE_KEY',        'KyfFC;D]gi]Z=SQ7TAUa%dzy]F$2<s^J]4B$MBo> W#[5vD-0^a3ROT%O@6mcSdk');
define('AUTH_SALT',        'G-pA4E6r&Hwmz2av)?%SneFa}-2K4gMhh?Y!Ia(#Wxo)Y)1WD!bopFr]D%d$=Gf]');
define('SECURE_AUTH_SALT', 'nNsB.z>_uxny#]2<Yb,qhV&=YELHR0hn;@m|GrF+jHS+F<X9m1(/O?hnUe-rqd1A');
define('LOGGED_IN_SALT',   'Px<m#JN::T=iW@xV?h!p%78T1Gi_7in Pv@&4K6}Q1 rDw>}NTQ(wdJEms_sHTH,');
define('NONCE_SALT',       '=+ZwObl=?Ai!@_kf6d?gG}^xZyIULU&AOTnUXtZsUX3 nP.9-qWWoW6h4q:A[^}z');

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
