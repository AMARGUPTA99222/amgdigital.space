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
define( 'DB_NAME', 'amgdigital.space' );

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
define( 'AUTH_KEY',         'U;?cTP&O!S|Dz8M^UYOLaizbZwBXNNV]yv=|,Cd)0d!h(#iT5iKE=2w/[uB|V[S.' );
define( 'SECURE_AUTH_KEY',  'H9Xc>w.PxX[U{!N!l.!o]}N{HF[%@=s;Cv2O/n0]ZN`bn@!|h4vN~|:{|Y^La!V2' );
define( 'LOGGED_IN_KEY',    '}6aq_I-C.#IYTfdHgHjQj{vKBsnvHr=#2kI6.^:<i(bN|mQz&aF6?2]@`?GoHuaK' );
define( 'NONCE_KEY',        'nt4_A)y;_6 1mwc>P`Sh{DOeT~Ad}Uz#Byt},d&2&/XSf!`tGD{{OpDqr/p ;Ytz' );
define( 'AUTH_SALT',        '.Qr RLfF$%?Sl[;/Y0u5`,z<o0^cuIcFPAaNE=,oh(9L/8Ki@E5JQ:`zYkT$Ky%r' );
define( 'SECURE_AUTH_SALT', '1Rz[#qUoCt[fKns_q_$MW>_)qs$Lb}E00T-igI^1}SWKdx #z8UwL&zxY!2wh5yj' );
define( 'LOGGED_IN_SALT',   '%$S9.389{m~Qt?Zl>}T!cgk5H6B.C<JrV,&zn%B<IW1=M|v0d5S385Q>6eXkCCH*' );
define( 'NONCE_SALT',       '#nXl8hOn|!{L_MYm&c+DMGSI*9Tz?4FHYL0GZ~jMcP0|*tKT,WY>j5;dy/Yg5/=4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
