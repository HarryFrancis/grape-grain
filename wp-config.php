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
define('DB_NAME', 'grapegra_wp');

/** MySQL database username */
define('DB_USER', 'grapegra_wp');

/** MySQL database password */
define('DB_PASSWORD', 'fbuCwYb9owb4XJKF');

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
define('AUTH_KEY',         '>=-4Jk[RAQ`J!ftH||g9MTh$:{(_?h9nez4xk1,-17ws5l-E#4-;IOZfi=nKbtT7');
define('SECURE_AUTH_KEY',  'Y:J,A0pC.OzBu|n<F|P-^&=SnZ@R#q)R~|d:zRPe4z|#7tcn3)Mj{$zujSH;eC1C');
define('LOGGED_IN_KEY',    'f#+D[<FbV]j05|~8X^<|VeTO1@H_P3I-V+nsI.8|2o8B4QO5iIHdo{43+2$.qtKW');
define('NONCE_KEY',        'C9H1ShSAY-[jm|?N[0ki}j-Zg^&Ap|D@(eq|75,i69=o<W:R^h-qRIB+{$gqNjbc');
define('AUTH_SALT',        '7rG9XpUVZ{^j7fM;:kV/s=<9$wjy;QW<SxSF 5_^Fce<9CNOcYG2A-AaR`0^}$fm');
define('SECURE_AUTH_SALT', '2. Bnj_9mX7gO)Z|1kx`#=ek2Y4Y#t_Aq%l+l/vama~)Lmu,ish/-5!=|#k3h~zR');
define('LOGGED_IN_SALT',   'aD|bw3~Y^$NyO*`$fkie(+n}CuaK=7#h+2<Bk}u5{s3rpaw7Q~H.*ygF7`:_Pp;a');
define('NONCE_SALT',       'N%mxz&ra}TTUC=_}B3C, BI/FGh/-R9bRHV>v6ZL%jYj4b^_|[8nGE-KIxmc#f[t');

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
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
