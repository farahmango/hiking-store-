<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'haking' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/rQa@~e 6Z+|^KU<Xu~yQ5pR1Z/q0R|ut9U!ep0B1(,cE@ty)wkJ&CH)7@]RVg>!' );
define( 'SECURE_AUTH_KEY',  '~!vrWVn+T%=:NN_z?w5G/@Im7J^d3(Dl/(7 FYo*JF7 jq3HC((ChS_jzuQ{u~9i' );
define( 'LOGGED_IN_KEY',    '.(b8=mWXvo/BhB+`e(_(x)BFSm$d=*?/>iSCD3cff,-[Q7:KbeZ,,>rHKYIoxK?R' );
define( 'NONCE_KEY',        '@!}XbPOBZ9QK/,l<SX5cPqet373qCghOjFW2=U|yi9DVM}FN9M0PEDE%W0ukLKU6' );
define( 'AUTH_SALT',        'VE?TX5CeR}X<E`W1QZ ,][lvcaru6H+t;!mm@33jN:-udO;s|?d#wMPv(N$OknyY' );
define( 'SECURE_AUTH_SALT', 'uk1{y4! @MO%)p`+LgRsitmYTHL-;4+0XRNAcqoCi%hzqkr~8Bym&lZ0[dAm>Ks)' );
define( 'LOGGED_IN_SALT',   '{C,q#5UF*^s/no<VzAnd79Pc5KQf<K7ah|17eWyLZJy_L$>r,gQ$6xS|=&Z{r}P@' );
define( 'NONCE_SALT',       '-{<V6]~E_Q,!Wj]{rHC!3]zKk/CjHh;R[%s}zqP^_KFg(M!$MuObK;p9QL2sg:;c' );

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
