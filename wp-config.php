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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RSsAuAJ3B{=-(wr8uG6wQ!B9F}9-&?oZz*[-^Bs>cde#cR%r,FaP*w-XzJN0-F<_' );
define( 'SECURE_AUTH_KEY',  'Q5//VbdAZu<iMsAH051*m<Q@Bj,19/fh&4<jCqrT]GG+ebDj<63tL~>;n7{DGlM ' );
define( 'LOGGED_IN_KEY',    'd1Lx[;*vdddY.5a`w)aHsXg6K9Z&L,hHvxv&+ksR4AnQt-|=S:%hwXp J[xsqy^B' );
define( 'NONCE_KEY',        '+J*b99A8RaX:^?*`(]:Q_iJx*KdQTZ}o`lkazdv0Oe?!~JV!6>-}?Z5E?M7v=9]w' );
define( 'AUTH_SALT',        'QN|m6&upiqW@2;S.q^3y(a?GJds*8_Sr6RTDP%7({$j2QeQ5PAf-^[dcZN5A{H0#' );
define( 'SECURE_AUTH_SALT', '`@y?X-#EsEf`.ME,?%PMI; HXJ/NrZn@05{:JtzD3_Nmj,:OT#WfZ6h![b 9`=JG' );
define( 'LOGGED_IN_SALT',   'xmwa#: 27{&~#9pdQgjY,O[D1M/j*h;yWB hGO_jj0NgxFZvLkvmG~ITS&LU{T[u' );
define( 'NONCE_SALT',       'y%$jhp]vaAY9i(Fm+eI`2]dw~&U:*`:AVT*m4YMc*87;o0t-y`{My)GT7+)vj=*r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
