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
define( 'DB_NAME', 'mhpg4736_jeremiecci' );

/** Database username */
define( 'DB_USER', 'mhpg4736_jeremiecci@localhost' );

/** Database password */
define( 'DB_PASSWORD', '.,XiCdrN?.w5' );

/** Database hostname */
define( 'DB_HOST', 'https://www.dwwm2324.fr/phpmyadmin/' );

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
define( 'AUTH_KEY',         'c%:-JsLS50N`W:jB_aE7ql^-I=>@b6U.js y@3T)/a4c4^rA!}8)>#W_)KbM}(8*' );
define( 'SECURE_AUTH_KEY',  'eWl}2U%uv@QXU+otC9C;Lb#!=5L?MiXPJ>:oB&?<@G4 7x4o9 4%QJKP?Ci}]R-f' );
define( 'LOGGED_IN_KEY',    't^7t-i5vEUM!w7fH*f#U:OGQ+Q1TYgLznR$9;1cYPk[7-^&p^zvEgk>&BF}=l4St' );
define( 'NONCE_KEY',        'AmimpuXa(*{1AGWtvsckv)]!t%7,vh/1k# I,l1cbF#:jvU@)]-Qu`Q~EV!:+xl{' );
define( 'AUTH_SALT',        'ZqYxLHZ0<Fp1~V_?4?{oL&I+1Z#Nl?gDC[/+*u:E(s#`BWJ@-*.z11Tr^JDP4_X^' );
define( 'SECURE_AUTH_SALT', 'fur_$o9*`-`DGi<+T_;S](}j3G@S%UAW7_jN=|l!_@J88G9L45:u Kgi=it-89a%' );
define( 'LOGGED_IN_SALT',   '|q()MNj=pGXvNLk#(S!ghc:YK6hvJ8o&6-LJJ!VjL5k1ZI:H@3qYjOe}KDk4-vUs' );
define( 'NONCE_SALT',       'wYlb4H +_-3q,<}Uw%J&I?gM}[Y62Gp[YNKJDz,)7%wlk+_eAZ(bX9pNqrSbMdDd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_atlieecommerce';

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
