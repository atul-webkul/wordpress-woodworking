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
define( 'DB_NAME', 'wordpress_woodworking' );

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
define( 'AUTH_KEY',         '`4h5yzw%D<$,BKm&u8woU>xFfa*s2F@?jwU]d8K)?bDmEuP08}mW+ dV_Hb-/p[j' );
define( 'SECURE_AUTH_KEY',  'LLa,BNk`Y8]p+[?5aHGpaY^UU7,Jum6FPB|C(98qHZg4CzU!r_;?kEh%#-taQDo.' );
define( 'LOGGED_IN_KEY',    'SqpUiz,Qr&+Wy@vC|kHkc89)neHQ$e]gc|Ct%}xh;d1!$Qwu)R;(kA.W7kNn2NL ' );
define( 'NONCE_KEY',        '6gQs5VpFHr$^FpKH&Qq7Fl_l@_,S1g8Yo+vwRHU=[@Ez*JEPLE#E~kJZgf~i>;l4' );
define( 'AUTH_SALT',        ')eL=shyl^}Fk^>^iaS)[PEe}{_8tCA0U[h1k86v5$4Ho<OsWB>!KedUE67MPs1sT' );
define( 'SECURE_AUTH_SALT', ':uAxPf{I+xc,j7qCiWZh9MDrXEH-a(?B3-Oa8!T Ic2l#Y+;N!n/>S0i9<=*E7*X' );
define( 'LOGGED_IN_SALT',   'V{Ef7%&+/i^i>MI{R)Ja5F$1#=Y!v5`B05}A22s?QJ?`|JPoIhhj{(|`kY$f(]vm' );
define( 'NONCE_SALT',       ' x8;6.s u@:rHG]{5*}(ov8[s6ht*pDLo~=u=FK!i&$LHT)SJO5ll(#k5cs4KYaA' );

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
