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
define( 'DB_NAME', 'conexo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '56dNnQ?vIULEAyHC2IIB(e@s{R]Ex)sy9#:pPa{QiFksUNioIu|Q,e2iCl){.hXT' );
define( 'SECURE_AUTH_KEY',  'Eo.|KKDiWa}_DRSrp1j7{p4z$y?y`BXE3V+9HQOz26b<Ph}q^;9`5Y.q,dZOPGRd' );
define( 'LOGGED_IN_KEY',    '[||.TFLph/*Q$#xY`!SXr`!EURhb/an@wcR5dDPoH43  I1p+M?QXVO:N]o <ZTN' );
define( 'NONCE_KEY',        '[[A[F;4bZBL:khiPkbj8pD3JY6;X5SJogS&1OMq>UJy!W)*C3w85RmlnGApM2f_W' );
define( 'AUTH_SALT',        'hYW(Uu`>[J|7r~^CWS2p-o>A,3@0LLIY,?@}$IPC{M#}rQP(:HBkaO1c^fuM1<2<' );
define( 'SECURE_AUTH_SALT', '$2d${fG063r+)DO!34ykf7dMrp=K0pya0O>B#Tn^-|(/<1fqz<3D[tStWu ,A]hR' );
define( 'LOGGED_IN_SALT',   'eE ZNd>XFL^ZR:. !H,Nfk.NIH@)e[E5QW==p(Rbt!0]U-{X?#O_Yfk;D4/n:?%z' );
define( 'NONCE_SALT',       ';-OdpwxRhQ<%V^FB0ysD$#P#0d6}Z+x/@/i1W`>lgWiG 4%$_~,Hr^-B_PIbNE(p' );

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
