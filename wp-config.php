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
define('DB_NAME', 'wp_nvc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nvcvag$21d9aneg00@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Q}:8PyaRC*9<xq|yfryK-TS*{ R-nN_STQ1p<3]:s@WA}a,od+lEzIZX%E#UuYk]');
define('SECURE_AUTH_KEY',  'Q$|/pQ@NH>+Cp~!h=M:/g||lHW+*Erb%i!Y8uN)U+sPnoPhRJ[gP._?WYH5(Box]');
define('LOGGED_IN_KEY',    'D7R0>nKIE4nb@%92+Up8fX!a)6RVa&-fIKdERu,O57c?;sjYjaxIs]`[p#/|0A9E');
define('NONCE_KEY',        'm@-6Xczx>wRf- yhP-c;*4OCR^=Y{S~O82Wl-`Bl|I-;6-L3+fsOd& #-P9b:C0L');
define('AUTH_SALT',        'Y#>Hn:Zwj5&3-NFZ;2X@Stkutsj`O#%`1+V:lz85=>qz-[g xg@E_mcsGi7 M~{9');
define('SECURE_AUTH_SALT', '_)pDVP}+m,2qmlqE@Vo-PT.7}.ur 8@>j>ltQ5SNQB7Jp0ETJz4UaW&a&3yFt-_|');
define('LOGGED_IN_SALT',   'Y*-s+bot0[tMW7F;].+uG~o2%!;+PXzl:ze0{8O]+$#w{;n*RnZ1:,X&tp_|BsNs');
define('NONCE_SALT',       '$-k2kD!pt4c?>+YKC93.kSuxpB#-6kBI<?f<9Eo4=V}X$vJ8a[{TkP%&4 wxpMm-');

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
