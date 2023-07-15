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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Testimonial' );

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
define( 'AUTH_KEY',         '3K$3//KbNE]m{X}l5ATteRwn_k4^y9DvD,ekV)K:aKRx7nSmKXxdf.is &eHmfBp' );
define( 'SECURE_AUTH_KEY',  'xT=NXU`bZ7L[I^ah4bd&MrGL,TMI)s5_>1/~0?:=hN(QA^wr4)_[g85j$lV7s$B/' );
define( 'LOGGED_IN_KEY',    'gpxl8!uB^gM@FekL(7MY7dUZJ.s>Db?jMPxMYMxo*D<%lx71Y12!_5zqR~o0!Mf4' );
define( 'NONCE_KEY',        'xA#X7gbT!@?8Ois6GBFjXBD8V`{o#/$I%r:c0~!w^D#m1Xz=Ktz+XHLH),LkgOZQ' );
define( 'AUTH_SALT',        '9O:GTb@Rh/XK*nH5A?(MQ<IrnW_R:VRy3_F/qhR0<rfp+man6}`eU$@7!=)~3dS*' );
define( 'SECURE_AUTH_SALT', '_zuhG#LJjSx>e_b~5BI;PU6dw)in7HRT{icKN,: 66|o6vx9#&s:%AUGh8WO]G/<' );
define( 'LOGGED_IN_SALT',   'Ig-n>NIWn7^`>COe&,!W[4gAwe</LYB%Xb)K Mf6YG,YzsCym=Q?.:6q-v0B2;,Y' );
define( 'NONCE_SALT',       'NC)j:@.Faj;pHNhd4(IadNe{J`~0cze@fT |+]x`2?_jwdx|+C91u&t/c$0=+wGS' );

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
