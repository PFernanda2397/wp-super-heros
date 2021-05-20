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
define( 'DB_NAME', 'superheroes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ']N?X_|T-dhFv,H=wx0 T|!#cbCK;Wh;5)</v(!o^l]:aPXZ/:0Jyv|!P9s6x,{D-');
	define('SECURE_AUTH_KEY',  'T5#YbPqd?>ArF959[>#Tpj?V=r9L@TX0:=hcQ&w/!+iASO47O|EJ:VLDU%TkqNQQ');
	define('LOGGED_IN_KEY',    '5U.Ax:Wmy3q/=>yO;{2f(*g#a*+Rrc>#HXWNeaSV~};`8 Ssunk:QKlM@6GN8zEl');
	define('NONCE_KEY',        'n:{`Z*[,<d#S U?j3,vyc@vJ2dw#rNhA_ifmDj@$6Ynpr)uPywIFE.pp9v0yYgte');
	define('AUTH_SALT',        'm_`6biz#i>PvLE~~H>4FWN|_<]I6N0O^7QkCc+Z0p ~+BTK-B<mY0-wcV8S|ckT_');
	define('SECURE_AUTH_SALT', 'N2m|S 6NW+L%eghJ0E?}Aivzq*eK{%KN:f@,u+G;@Q/uRz1LXME8Rwk5]Q^2t2j;');
	define('LOGGED_IN_SALT',   'H>O@Cj=4l*+yq3&LmARWr+v4==b=@@{kfY-uXX(|+8j.Co^4O+i*CG%Z/s/1tE#/');
	define('NONCE_SALT',       'c{ykq@SZ7+HJ.%G44S 2^|ldt1S^iwPGRjPbwr:_ERGZ=o))SJ&WK)mh!^1d20;-');

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
