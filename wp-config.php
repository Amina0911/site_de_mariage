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
define( 'DB_NAME', 'weedingsite' );

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
define( 'AUTH_KEY',         'alKx^JqpE<6 W}CP.`IwU7gl0( (E@+WvKra{^pD$D HQ79:~g-Tuw meT@ReY)z' );
define( 'SECURE_AUTH_KEY',  '#a#t)R9K4ISSZrAMB2/m<0Mm!J8Ioxm.wiSbVhH5$bSzIh<N&xW=)]rDrVlbLq5e' );
define( 'LOGGED_IN_KEY',    '&%7)q2s^yGH*dV4nERj45<J_zUoO,<&tAT3/zOh?=bV&/^iiriyvW7aszU-Q22)4' );
define( 'NONCE_KEY',        'EIAm^$6b(.O/Y;PI%?}>udkL]lodWt^k6o49X6Q[R%!P8|}:-{oS!La5IdHe5yv$' );
define( 'AUTH_SALT',        ']]`g%2<nB[Y,m4{MzN3:q,g@L6C>/a,]]){}Dh6D_x7OWBM;u|is%Ws{8lg{oG$U' );
define( 'SECURE_AUTH_SALT', 'O`xF)|Uy@vh?3:(SWYTaEj]z)uE~`3aSQ:Z`_wu;}_uo4^G tqRNPIJ&7Kz2Tvjr' );
define( 'LOGGED_IN_SALT',   '2~LG~q:lpi`7B?!7oPU_KZcN[K;_vL-I@2m=dKO1Nd*faQOo6g[hqr>M2Qn$JKkW' );
define( 'NONCE_SALT',       'HvY){.bAy3T6n&+%MArY&$9+TvGWh+RkAf d6yI~(nU$f<}0;sv#B<E<l$b/>V`w' );

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
