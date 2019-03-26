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
define('DB_NAME', 'consult');

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
define('AUTH_KEY',         '~iyw<FTZd>(q+R7TzG>!e(+pAAg7c&Q/vd|zv-sy0]z(}@]yc=4 YR/i#uKWn&!y');
define('SECURE_AUTH_KEY',  '12%GPEK1.d$M_./EdA[}**)ZU,gs.se/&TW+39{11^[/g80Bm-A{Rbl9?J`6k!JI');
define('LOGGED_IN_KEY',    '2H_{K+3y.YO2e;*HcV=cpUJ VkCJ,umaer2P.WhsOU*(f579Wsav{Zq4w9l9N]NN');
define('NONCE_KEY',        'o/SG%[=3pWjHKh6%n&QOs58!G5ZB$I}|[[pM>[QX)9uu]CJ$s?@UcvIXMrT|5_P(');
define('AUTH_SALT',        '?[J5)wE`B{4LQj^op%)GBN.Pd;2(g-Z`:;YPHQ,[f1m$-]K{MXM@;d<<ea*OGX<0');
define('SECURE_AUTH_SALT', '`XFSeULR(Qu5wXVTbbikRa2/la@P-%{zO&X~C0[7s{8W>c|0Ku:*B&:0oxMxxe03');
define('LOGGED_IN_SALT',   'IEf];Ueb<v>`bscQM@I=Tc+%m%DVp:sJOq*:T(sRlh_m2jZ3 K<2@>/zk6_d-7Dh');
define('NONCE_SALT',       '&#<`Vsqix?(,c<y!JxN&R^/#wW6b}nkaT+a~~l}}a!;|G;ikU.YiO!)W@#5/$L/=');

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
