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
define( 'DB_NAME', 'makeothersbelieve' );

/** Database username */
define( 'DB_USER', 'rnld' );

/** Database password */
define( 'DB_PASSWORD', 'lefthandead18' );

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
define( 'AUTH_KEY',         't$ 1)w7oQ+Yr5fqcMP<*)bf{4GL1d#+m<n!|?+d#8d2W7|TeB>5,O%P1Q:L&|I{/' );
define( 'SECURE_AUTH_KEY',  '!OW/O;KKd<G*tE0T-/ls]W_HOX0w[:]0qW/@xW$q~^ii41`H,Z8+Tl7?VZ:_}P7E' );
define( 'LOGGED_IN_KEY',    '^]1r2C1ts~1wlIm@MgCh-F?5YbVVe/JQhWizMPxR_$.O-M1Rb L:-RHS:[?}lb?3' );
define( 'NONCE_KEY',        'TcH#+^~K=4s6{7VM]+rL[_m%m(S8C(7bz@T_{/TYBB6dy`NaZ5lHNL)Xl/64Df3V' );
define( 'AUTH_SALT',        'pj~;0CPy=8y#W~0Y$/>Hxm&ruY:9mgjlNME#f`DfH[@r[vpG208gx*qJAWz;g/FF' );
define( 'SECURE_AUTH_SALT', '=.:[s*C#_Y+s@k-,@eK,g3$&nY8V1!<XLPwMg]p2xr_[(k1!6oiX5MnJWL(KZoGt' );
define( 'LOGGED_IN_SALT',   '5RTD]Fa~(K[p XbI;g1e7J3zbBS}1,$|6RIbx_:hDU`|p8*4DntOWKwkJnV^=bc|' );
define( 'NONCE_SALT',       's/Z@:o1w/:JVg% C5;T!h0k<A2oM)XLO:T>71aeK}Fb{]oNoi8l:u[fSy^6GO>%<' );

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
