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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'django' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'At<)/A. Oq~$G9:i/y8v3Q@<V@z qAquV6wf|e M!Kn!^`_O|vr(bu^7Ee?62kwq' );
define( 'SECURE_AUTH_KEY',  '7VbGyt:ANEP8*#WEM|Rh]c<i>/=?2YSw,R-]XxYs}2xD/R!! f>>1~kOWdb@|Id-' );
define( 'LOGGED_IN_KEY',    'EQO$&D;=-Y0fm[*r[#jAvfsF#dQF@pj)Z83.v.(Xe Z(7KvXIo-@zr;p*y#9Q&n2' );
define( 'NONCE_KEY',        'iu>)_61/%g#M.bvXxT4k1|^m82pg3V7e;VRDuR)+xJ`j9jFtY$Cec>L`#n9%F4Cn' );
define( 'AUTH_SALT',        'sZ#;0! [@&q>W+1lDz},y:cY5N?!q8M~y<n(Weg4^khQWkDX+mLT!ek,?Qv]./g;' );
define( 'SECURE_AUTH_SALT', '{JK&Qa9!m*j6v`W`4kH4R351ITMLcf5#7SfKeGzN*G*Y2GI0 ]Qz EGAXo)S7m@y' );
define( 'LOGGED_IN_SALT',   'ZFnYl!>^=e@(Bc{!|JJq! 5Lz+:2fB8~)6y)d}05+=W6pAQYa>nu>1_;Bxwa;tk!' );
define( 'NONCE_SALT',       '>P.gX(WXIit/~J]j ]?7ItXpsHiRnZ~TnEkkl_.g#AIX*~$g{O+*6y?KLhBh4OaL' );

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
