<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'gilllawgroup_wp');

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
define('AUTH_KEY',         '%2rUm~pvPClz]pMh)Lbl7A{(c^&YB>Q)ROv5@:|TR{HIc~Iuhq-a E:{:!$M*pwn');
define('SECURE_AUTH_KEY',  '{^{&p1R96CIB6tu@,0~:pyyXOt$e&jH(k$Q]7j6z`.0 ^J6.2<<]dd=QsfT|3)24');
define('LOGGED_IN_KEY',    'md*qqRCv%z5/AEcpLWtNK!ffg{;h-E?`2aAnz]j/&;S6q^m~&/M |mqod@Z#1!=U');
define('NONCE_KEY',        'L%kNjmyHxz_loP&8K^ZO@TrMjnpa4Ja%8?I ^lw,sk_P$]Ih{!f*)Yyb8GoMZdCb');
define('AUTH_SALT',        '|?SU]*rmu44?tLZrKtwO_O2iM6(()M10w*|ypQUbx |iK|j_.]~,?oV!/`&|9io8');
define('SECURE_AUTH_SALT', 'o]AQj<S:MHytTjwW,3pG~/,tuQ-g3oHTc3+uVemxdy@-o(vVP|RXz6  Uv7o[F%u');
define('LOGGED_IN_SALT',   'GX&{DL~aArA^mv-5wLD-$$OA]i!,W_!A<V|w0uHS 1@df<:NENR%@3tDFu%a>eSA');
define('NONCE_SALT',       'Z7^)o~%f}*!#xoK2$^r4FBDH1 1s>|XEKG3K<H?M7R_#-kd^O,>y&!V_!J-bs3)7');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
