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
define( 'DB_NAME', 'twelve_burns_avenue' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '>-8^VO:nnhvAAG EO0P[DwdfB ]*oh&dyjK0@FH5bnnGUuuM2i-xQ7lPy;dE{X:0' );
define( 'SECURE_AUTH_KEY',  'uR#d)nK*@427R#m$?UM+Pz)g=CE{,q;fzYqY~n8i9a#}K3u=/;ZrWjxESO>|Kn@<' );
define( 'LOGGED_IN_KEY',    'SmQ@v5||W}a4b.X23G1%;B~%FSts~}lmEXGQc&sX=&2_dZ5nQUB ]yb4,@a8o#-#' );
define( 'NONCE_KEY',        'k)1%e_A>9VUK)7)s #-!0xC5<xTR=-<4E:9+q*T3O^78mGDt__]oj)<v~tf@E,rG' );
define( 'AUTH_SALT',        '&!p:8Af}g9j)upr.pzzEp}B&[V3T9%^5<Itqdw{>jVZR-?<HW}kD4nHpZ@NWE|~#' );
define( 'SECURE_AUTH_SALT', '*MdCA%uvmm8Mw35nzle`{GeIOQXyioV$uM>[s}U0aFz-Fgdb@!b1o[.Um.4Fo|G6' );
define( 'LOGGED_IN_SALT',   '#H[X3p+p-}jpR?fiVm5e2*<FbbB]Bz:u4Sb/)&JX*YG$`oXQnIbbYTL|N0SA/>Or' );
define( 'NONCE_SALT',       'F^/l>S:)bVcCIjVffV.#y.+`]%KHl7c{K=8<0>aal{$Ry!TRtnd6Dv3jKwuGZntl' );

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
