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
define( 'DB_NAME', 'annawp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1SKJOV@s4TQ=x]h:pDO~s(41<G.4_8Tv1.q_dy&6YGS/Eg`pb7$0qQLT!mW~>5Ou' );
define( 'SECURE_AUTH_KEY',  ']le|9F+41Aic:db}ZqzY1Y5q|mCJURNce-T~*v,Zv<S+g[PpkA>~B$bM0y~vHc--' );
define( 'LOGGED_IN_KEY',    'n8tG:KK6,4T]p>VO(;!J4%Y%G!0yBRY-A,maP-:jn_!7~;p$o`#q<k24;8w>&{]s' );
define( 'NONCE_KEY',        'I=F0IKQM.^b=*jQ&%lb~f1`:#O~=_0a%#`ezWzEL+{~^j{}[1&s7Eq;= gk H0_=' );
define( 'AUTH_SALT',        ',4|KJST(`-Yrn;<e!]f4%uKaRxp#~$X,n=Zg&u.i]SAER!caX>iT8-%2Y>@z!10E' );
define( 'SECURE_AUTH_SALT', 'v5kwOYBEKX7H2FrX;*Ab9nBetrf[)CNU!76XcCD9*&;W_K*xy(Z$}]U+^$EPAq;.' );
define( 'LOGGED_IN_SALT',   'cfI2~N@0fVdb4<0NX1:$:`mP:=(F8-==fviWB$;^u&TGNK:,(oHL~ufIzIX e5[e' );
define( 'NONCE_SALT',       '}_]+SDBhh!XHk<;aL>U9:>+ancrHg_d({Y:Z8$4}(EMf.ynC.6mhN%E1gN{;m0o]' );

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
