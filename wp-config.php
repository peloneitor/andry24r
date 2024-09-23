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
define( 'DB_NAME', 'andry24r' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '16437616' );

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
define( 'AUTH_KEY',         'F~z2euPK|_9d!nWtIY8VGXufkH3A`b8PZQ+av.o?`kwYG3L2U,.{u3x=y>#]}kRX' );
define( 'SECURE_AUTH_KEY',  '/0nkU#.Oorz,q2&Ik$L~c3DjNDB4a8peg21V Ev_|.>-%)Ac.wov#^Q7^CFUG9a5' );
define( 'LOGGED_IN_KEY',    'S!wcJi8C&*s7;!b.5?kOwhXfpmWd==/`Jrr5$tlzb}2p4j(Y6170O|/aWc{}K}Cd' );
define( 'NONCE_KEY',        '1T7kwxd$E^>Y&AK;~eWf>PmdRV6xo(2uBB/iSTvyIu7liO]mLV|_HH_x0K]N*BtO' );
define( 'AUTH_SALT',        'jJ*^R3>n0LQe3_x|j*;1J}p>eyDpytiwx]wk:r^e*r_F(/LCT3E3A3Q)JF<2NY**' );
define( 'SECURE_AUTH_SALT', 'Q<z1>}>>:+k@rf~y;V6X0H75G:UH/ZFe96^/;AAINO=$/Kj^AIXL8JvK5(?^)3,@' );
define( 'LOGGED_IN_SALT',   '_x|?, /&:&a6G}&2X}dskZdKVWI=y4-1>Pc<51nUtn/o]APaGBI8E~b^p>$u~iRQ' );
define( 'NONCE_SALT',       'x6pmINAna_#jZVaJf0V5@z_;>*k}JAn#^*jL-<oU,48hmhN?A2Nh0fGOLs}=#Ic9' );

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
