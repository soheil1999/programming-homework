<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',V8qL(_oQENI6B0iZ,y5<?<}wte4Ctj9I78C].{:R^~3)PjU%kvP:JoQ9&0PBjvX');
define('SECURE_AUTH_KEY',  'D0x,BTj@]FQhhW S[Sth7XfGHDj$DzV&Pl9RDc:6P;dye@^jA]-U]t<(yu%wv];r');
define('LOGGED_IN_KEY',    'd6CfDkq-LE~TL$i=5#y`gxRzbNXDcM&_7{num3Vt:m9!c6~;*;FG$2?cYz3Bj<LY');
define('NONCE_KEY',        '@ayK1W~f//jPS;W,NrR%RJiqrTEk%i=qxw%Dt3>c`=eLU=9_Aa73C.Hu)gxkIwKZ');
define('AUTH_SALT',        'vWxX|?cR:&3/XJWo^|c@K%xmcxhrwtMd7@dj|bt:P+uhuv{g;([)p!grdB8-`_fX');
define('SECURE_AUTH_SALT', '}eH_jwk>]xN&r*d_4fzaH8Z/%dl459Ol8-(Y(W6d+_;06$YR{3^N*xtNW^?r&L=3');
define('LOGGED_IN_SALT',   'o>>CUgDY[aztz3##7:T(3c~e:YC|))Ix&1i*}Q8X6b7Vt@-k<Cst&EEO?TYw6KG?');
define('NONCE_SALT',       '7AoD`%uWn^|V3N*lyj9/dhfk6wVwC_EBlO71Nb&bBDkd<_thXN~+^4kiL t(^U_.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * fa_IR.mo to wp-content/languages and set WPLANG to 'fa_IR' to enable Persian
 * language support.
 */
define('WPLANG', 'fa_IR'); // by http://wp-persian.com Team :)

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
