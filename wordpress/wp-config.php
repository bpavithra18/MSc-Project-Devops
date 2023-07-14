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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '4BHfsOE-q<ty R!#mK(:s<kM9,Px7e$)qK2&OiHZ%PY8AD}aU:  u&jo4;fC>pYR' );
define( 'SECURE_AUTH_KEY',  'lmDXF<5h!f|)tOOnc:}k33vP-W 4%M@^zkIVxf:sQyv3&S]1>Y`6dMtL2>oV,!qx' );
define( 'LOGGED_IN_KEY',    ' ynK>WWd]Q+7|Oi~z;0$t|B1v6pqNxw,lxd$(l ;$H[?sZbtr#iI#d$4+LW^ 4`_' );
define( 'NONCE_KEY',        'o$7)DWW_^]VMZ<#y(TcA+]qHer<HD2W`4T(tZ>t*91<.g<p`_?@pUs8p0a|`p_cM' );
define( 'AUTH_SALT',        '!b2aRgW~~UE~*Wx@fHK!w_m+Vdhp08$FpnQuAu?::K)n|@vT4I&g.kiGVw+S=+F!' );
define( 'SECURE_AUTH_SALT', 'KUIdo#l&n#+-}kBd`y%43/YH)#x+Oe&F)rLg2Npvpj!KX>~dx:u/=S7;V:vcs1it' );
define( 'LOGGED_IN_SALT',   'RQ}YKQ7[d^Ms(:ZA*w2[lj&J``&F7<sRrJ)j4vx1:=~tvhb/ltG])aL[$e5jyo=2' );
define( 'NONCE_SALT',       'Q_d}!Q8~;BP&z^TSk6A:&*z:7f_O$Z7ZJg~^L zNPM$C$BUs?/iC0$A?jMS(h{bx' );

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
