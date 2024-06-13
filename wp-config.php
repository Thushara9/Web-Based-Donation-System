<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Lp!k4)xgtYvT3YOC~ki09R;C]?]wq55^.v;De.*`65Ixd~vr.x(!yhU+^9z1f[F2' );
define( 'SECURE_AUTH_KEY',  '8DS!Osf`0^70LNhfI$>pY+csDaD$UQ_T4tZq4a La[|R}oW.i3;E*n>/S4goAvXO' );
define( 'LOGGED_IN_KEY',    'MonZ~srRRct)AQq+=.Wp#/13;-._%l=<0}$kf=_:t#51kUj;Lf5y(qP!&EW61 6j' );
define( 'NONCE_KEY',        'x|u1BKwiW)./WCO=G;`r4R(r3iduNn4<z&YDnAVHdIR]_9k<WdR_1SxNV;t%in{c' );
define( 'AUTH_SALT',        'GDcLfMy)h02? OHG3]&_[Brk_Yqfc^Aci~gaD U<>Svsx6s{}qObKEk9z{1K_L%;' );
define( 'SECURE_AUTH_SALT', '6}$>]x&He9Bx~EF7/CeWEOt9xf)j`E$,$>04D$;KYk+jcaWx$+(gl}#%I=jQSGsQ' );
define( 'LOGGED_IN_SALT',   '%Rk7AHW5<PNsbd33qgI}KULB*S~L:7~T !)y@9VjknXs)43A4z@Q$c{)yWd?{0 A' );
define( 'NONCE_SALT',       '}3AWE4G`Vjh`=od[[NCt^wzm=`#Ne&K|fvxK*$JQ[*(`2-;czZLsaQP-bVEGSt2C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
