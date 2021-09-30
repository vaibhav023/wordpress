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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

/** MySQL hostname */
define( 'DB_HOST', 'vaibhavwpdb.cc7yxwd7osbv.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'nsv(kx%tO}*arYzmS[8n2O<oXBe|W#0uB8IC)Gbr.x<|M[xc<,~r2i<x`;_H<g&U' );
define( 'SECURE_AUTH_KEY',  'X_DUPzy2tv-Ts4H.a&[A5+K2TnWP*Tk}s;Yic*5EXKK[9R)]Q2r Ke*K?i#m3zPL' );
define( 'LOGGED_IN_KEY',    '!;&l<8G}6s?6Hn?Jnuje%y#~naOq9FAYkC1c[!$W7&C>0];(RT`|1k6M@*S^-hMk' );
define( 'NONCE_KEY',        'UR#Akax%Lpbe@.;!ja8>I4G@TqXif-FofFLro3&XZpDz*:H9o/Q&ET8!3u/8<<h<' );
define( 'AUTH_SALT',        'g:tCf3B[?iLL7^3d0 Voj(55XQ^cdAa/^~/ZGf){?1O:2n?I!o.bwM5NTtZ]K9?1' );
define( 'SECURE_AUTH_SALT', 'z&9a@rg+$e?s}vgHb)KhG$fpILgY=PM^f3FH$uv:Hsz1}2 tjS6L/{F:*/}{ I4o' );
define( 'LOGGED_IN_SALT',   'HEsAm)yZ_q*cw<K>GiG/?^?B3UB&w0?:2H<t`}.PoT*n=2<d2_:W$Irnaqo_[ZED' );
define( 'NONCE_SALT',       'me`oq|:OX+/)uIZ1`|F;F.BAjrYH}).xz~Y4,_U6r%N_9FBJ{b@X~Fy5rQ9GXCSu' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
