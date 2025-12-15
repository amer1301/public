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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Wi*U[qW,/otWiAtct*J[?hedC#UY;F,FaY4t2h4N=.[k|`CIX;?npA*@;yXn>c< ' );
define( 'SECURE_AUTH_KEY',   'z$B)uXG`,y)bBfp&I@[=<YO}`&MAh~5gvg`mCIIQSF/2JtAkG/FA98yEWPM+kV8v' );
define( 'LOGGED_IN_KEY',     '0G&ScglHBVxg4ox5#[ NEa^W],I[xjh#E|<3@IMXY;aFtbv>]sN&}!HwmXWPdtxY' );
define( 'NONCE_KEY',         'w> QO>u;@1zF%<:2X>kC/W?rkZ(.Zo@HaGRC|lm@myN.WF1_Poczz5S(w9fKy28g' );
define( 'AUTH_SALT',         '@6cIj,fsqj`bR.CzRI2IKuxvl)_OuP_hkdr0CF7/??f~%6x%a3;$RT0).]-HC{ (' );
define( 'SECURE_AUTH_SALT',  '^B^SvkyN4x{H&iD6507B9`8WvX%}2v&&;,TiP$r:S=:89&}4oA-ZZ)D.BKT)!Po+' );
define( 'LOGGED_IN_SALT',    'lnVVx.dFlrfF7ReN#A`,W3(C(.ZDxSm7UZzHtdXcg?]nlsj?a$,h#]SzM^1]3^e^' );
define( 'NONCE_SALT',        'b$.bkI<wfYUvZ{t)`]3H^QH`9aN3juk6+a=at.vYZpUNAjCR*eKhdZRHk`0)#^Z&' );
define( 'WP_CACHE_KEY_SALT', 'yeF-i h-MGn=6?M9WlbTE$fG8aTk#s@<zYx]gOfg=gb?b>vYX^J9er!pE|#]%8@:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
