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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysql0194876_db' );

/** Database username */
define( 'DB_USER', 'mysql0194876' );

/** Database password */
define( 'DB_PASSWORD', 'Dc2zqeYK8z' );

/** Database hostname */
define( 'DB_HOST', '10.18.6.2' );

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
define( 'AUTH_KEY',         'bM0s6vtaC<QtnY :!h~d9YSLb6~x{$+W7LO*dJ,9@ZE))t]Rhv>eTu`PWBPzvS8D' );
define( 'SECURE_AUTH_KEY',  'S_iLp])eOl&3]<#V=vo> MSa>_#TuTS+R*U_gu/T|>N&TnX(L8#3|(uz.X8;[of,' );
define( 'LOGGED_IN_KEY',    'zMt3+;E&-?JLG]r~L][laHZFTj9$)`M(Bl-js-,hVZ0r1&ge)AQQbCDe<,$30^iH' );
define( 'NONCE_KEY',        '(S?CGH|L%+:F}VE|8p<|%1!;PbqT9$,v1o<8@q.4Cwia=8nl.4vS+9^teX]#cxJ!' );
define( 'AUTH_SALT',        'sX(qWyx/Ae30*~N$8DzoUPN$TY=!Tw&XK%A@i7WSlhWog,h.fGa9yc,SpHgoB[-E' );
define( 'SECURE_AUTH_SALT', '.Tqh`Fe]K 8E8iaGZoUONtk96ydbh]_1,Eev7awzg1Dnd7fFLIA/td;*4^KTMcM$' );
define( 'LOGGED_IN_SALT',   '{f[}T&<j2OiRu<7W4D@F=ZE+!X#t?.{x8MvYNAqU& vs]X4%![-OvxN-^lI5gT+H' );
define( 'NONCE_SALT',       '8e.<Va&G<#>F_`%Z2n-DpCFMAgPJyE9/eB+Iq75S3b+485+q-|&HNlD9PQV{OqlQ' );

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
