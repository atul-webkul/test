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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'webkul' );

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
define( 'AUTH_KEY',         'ZP!HMg&Exo$~K-<1bo^6GoY|5IDb}.(%9aqA#hcwm$%9yf|?aV:tvkTRl7?]D;ow' );
define( 'SECURE_AUTH_KEY',  'M,YeBE]ajfsMb%SnL+^?~h]m$=|]X}Bh^&I=T_hVO_gC9G:@mZ[+!Ex3&sGeSJ(d' );
define( 'LOGGED_IN_KEY',    '4*DXf:`C,I)`A[4vFsAyX6T57br>4J^v=yOMUOw{G>v#ua-6Lgkq xA7RKBfS*A^' );
define( 'NONCE_KEY',        '[lw=quzFp,K!6,=4aHd5.L,eqjU${`^<&I;c2[=WG+u1o/s9>;(m=F!&jlirffC$' );
define( 'AUTH_SALT',        'xA}hKd4@FmxRe+VXHrlB!779eyE^&xeA{[rku1K`$&(wZloS@hH9ooABC[L<A!Z?' );
define( 'SECURE_AUTH_SALT', 'M_[=8^H1F=2<$_ew}]=N@n%qLj&6mGRNz|0imR+oJWysbm(nhI)_M6onp+F,qnvW' );
define( 'LOGGED_IN_SALT',   '+-pKqG~G|*pHFP(O$b#+k8w22nclxPzHv>803)KA&ENQ]`MpN@6I8=]Mg8$-2a6:' );
define( 'NONCE_SALT',       '6:)]Jv -t+6y!=a#8cV>Ld|w^>y&VM(WX3k@H?{Dw+CKfNK51+`@!Nh&EuRsW>.T' );

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
