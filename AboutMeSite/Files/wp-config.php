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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'tanzeal' );

/** Database password */
define( 'DB_PASSWORD', 'hophop13' );

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
define( 'AUTH_KEY',         '-?>$Yg*lw8$:G`2k!m H(EPzY>,i7+s[p9US:=)N-_SOdKRk*%sv1]3qJ85R,W%l' );
define( 'SECURE_AUTH_KEY',  'X)mxZ^ CTjHJfyy9{5)+!78b5*FU8tID2-lmcz~?)9|xh*FfYP`[ePy9KMn`c@+D' );
define( 'LOGGED_IN_KEY',    'tk3h]AAY5G:B{!B=Kfbwpn}maRk^4>Z)?Guj;U/M^-MKMbB&U cgBweJ1<-|`_a4' );
define( 'NONCE_KEY',        'oN`5*tQkD}AJ?AoR2g=]jFYVk$1_MzTu=)=!u=8E.YTL5[g5?VIti7?FPYIu`ZzS' );
define( 'AUTH_SALT',        '8B+B,L=+BG?>&wud>|CN1r%QcKVdS|};lYm.Nl)bsBbQPuRRq.up!Dw{od<u,,Rt' );
define( 'SECURE_AUTH_SALT', 'y$3-x|+L|:Z5ps{6MRC<c):X>E#OJ^/,6Pn,5QYc3Pm$lum?Vrtp*wK#<SvpzPO;' );
define( 'LOGGED_IN_SALT',   'OZPM|uZa^ZgiET(lJPud_1o/l<u/exHlX[/zmjrR8917q!J}<:+Q;1.LEWr^{g~g' );
define( 'NONCE_SALT',       'e01xEveP+iVMEt9Y20,Lf$kEq-+>R:v]YTn+@hLbXf:gY0Kxa?e5-(0u)GCF}6$O' );

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
