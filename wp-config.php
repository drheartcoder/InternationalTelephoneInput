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
define( 'DB_NAME', 'telephone' );

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
define( 'AUTH_KEY',         ';V+q7E[:{j.=/e4}?pgpeb(q/ZuGjUT/aDf!:mM(soZ8H5A][Lj2LRTy|_riqyz`' );
define( 'SECURE_AUTH_KEY',  '0f%U>E6o_4{r:H^&ZLO!1>r|%HxMG@G3=Fe5bQWPy<M#P4|c>*U4L 41i`jJ5Orr' );
define( 'LOGGED_IN_KEY',    'Z%E11m=*uGcV$/-%f(i%/?mE-z-y+WBjxTArW4Fv.F:bP.DwSw!o]r+<*m6UGZ~x' );
define( 'NONCE_KEY',        '`%U?HIg~t>k=DuqT>*v<}ec%|D+cj<4Nl@ML$Th,PekyPjUxn6zv-6?m5},_rn7?' );
define( 'AUTH_SALT',        'v-S!F 8|LL(=v|W`cv:v5raQv$!fO6E0(d~9ocjn>-|N<[AI/E7rz6DH>;bSD>U~' );
define( 'SECURE_AUTH_SALT', 'Qu:A%#d%8Yzm/,Igee6Bc~7$j[E2Cb#Nm+I=d!Vk25j;Q-0&MP?<~<AVRE.BnSO1' );
define( 'LOGGED_IN_SALT',   '(rC(]AMlkVVtd?.A;(SCMF$UAp/1h!nxvCb=}u#x]-fi+=5Yj_+NOL8lFh*,sOb~' );
define( 'NONCE_SALT',       'E#S_m{XVrNRIa?D1l^8J~F=-}/(fNz$W$?)jKraAv<~wZ+PJDo:n9R@BL[|4R1aW' );

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
