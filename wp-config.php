<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'interlineas');

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
define('AUTH_KEY',         'v.jD]P9Xl2:jc2 `%]Ar()CR+U8V6E!@{]}3-tH}j#BI6DxEmpd-^G(#0?*6u*FI');
define('SECURE_AUTH_KEY',  'A@*7#|N`jE15/-H^V:>C~>YvVzsS)M;KyJPIS=Xm;{Hivo}~ky2wyk0oQx4$Y|=p');
define('LOGGED_IN_KEY',    '*TY1|L&n[b>Roel~dtS^@nbOuZsF:-D1.9%m|1yd)Co[|z[QIftVVt;W33xE>w]b');
define('NONCE_KEY',        'VZzqx?<$i/D97n5@P)<OMt)z3w44eb8R`|7W|p$9x<Qy8e[-~1KP}=WQ<0|e+fl-');
define('AUTH_SALT',        '.-gms&!f7]f04RwY<H+1(Xif(Dc*(pk4{<e`62UXQ0R,OLN@e?|>c%_:--/SAdQ{');
define('SECURE_AUTH_SALT', ']<u;uKq-~h9>(0)U<u#b/D&~}j>siGT-~7PHUDA}uL}Y~.i<=4m.d,d`#!OmPLu#');
define('LOGGED_IN_SALT',   'z*6&@0bL%=<l>L4o~MPLR{Xla_EAD`d]$`V|;3Pwe|tX+-Qy>#p<[Tad{4F {]Di');
define('NONCE_SALT',       'wT..&*!cN=~[RBr-e#P-_;-q l?;bT6NwDDC+=BQ8M7j[l>N+|lZXIGQrd|Np0,/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'int_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
