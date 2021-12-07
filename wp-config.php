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
define( 'DB_NAME', 'iqarusdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ouLy90`YzKa<jZAR6`#-tLkH)^8_:jOpfI5nK[M6qvrVc&Wi6!Fe#NM=E/,Pc%,S' );
define( 'SECURE_AUTH_KEY',  '(#zA`9Vp!Q^gP9W1c.K~rLj*j7A4pL9F+dQ?)-6ajW)D=NsPja`Vh`[{%b4IuvAg' );
define( 'LOGGED_IN_KEY',    '}TOpB#o(>K2!3Ro3`0rQ@Vz8uOdHLO^H?El}:6XnUFHMr|D}BOOJO=dsfq{#_[Vl' );
define( 'NONCE_KEY',        'o-c@>.L@3-Xt,M w/)+q)IN.$BbA,PG_A]^1MxMq$c~O4;6]BL.w?l6U!G7VlIkc' );
define( 'AUTH_SALT',        '<)4<.HO0}R;ZgonB6Nw)M-=vw_!j(;TpSdiyL?U]h4YT].oKCe^Ji.0Qup4k.`%]' );
define( 'SECURE_AUTH_SALT', '|x9UA:6b-`pd.h8V&caHYS{K[uNBD-U~Cy .F-,%FHk!LD]+{lfVB&A;3/;rso-z' );
define( 'LOGGED_IN_SALT',   '8b/bu!xVC7@Q.FIA61b kA]!+Z$gm<w#!qr(sJrJhY4&TowNmw=UWLRbr?HBH&vE' );
define( 'NONCE_SALT',       'wPDClG#VQVC9Bh!inAUZD^_wQLK,_=@^OeICEJTtC;uDjQ59X&/fGO8A]] m*u,@' );

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
