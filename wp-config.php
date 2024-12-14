<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>%~xjY1$Smy(tpkon~F,:spU>>[d#W4Bhw.A%6Z_/w]4GY5V.I,NebFo@loeCp)M' );
define( 'SECURE_AUTH_KEY',  '.>G9E;d>Ev_AmT3R(G6f>cGO,pZ;4kbB^^i{f&=<zk?}B]+5-z3A%OjH+^ZKz20m' );
define( 'LOGGED_IN_KEY',    '| fBCT#;Fbq1T-cpDa,$RFy4T){jeBf! jw=rk5(k&XDRtFLs:NTx+fnF0V2T6&[' );
define( 'NONCE_KEY',        'Qkyr1jHo-TlyT3HhW?=.l#;i :;K;}+pQx%T0ALeo05;<XW5S*f;nR!;!,O*D|-y' );
define( 'AUTH_SALT',        'DSCl~{d|B:z@0~l#}Z xk748x6,8>hpxDBPp$@8zC[%^C9Nrn75{Db+b=@Y w[^t' );
define( 'SECURE_AUTH_SALT', '&Y%Ozhy<@cxp]2~w`F-`(VI|<}|hd+,qhaSKrZ-dbxY5FW_ 8[?e|=XY^yMtB]Gu' );
define( 'LOGGED_IN_SALT',   'zYY<Z2U`Zqt P$nlTX#1] lTT+2{ 2@/D?LC,ITYCbJcF~K5u%dnPgF?551(VAOS' );
define( 'NONCE_SALT',       '/7oocGkJD&~F{W#Q2K.t[MH12a^y~WJbQ<:R[As.mz.9n?n09{L#;d5R0zb])sS*' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
