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
define( 'DB_NAME', 'tienda-traf' );

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
define( 'AUTH_KEY',         ':;WF<kjz-hpb2Y$6#I_nH/?bn%H$jg7>oodN[fi;gj28`Vj!@l{ o;.DOynB5SSM' );
define( 'SECURE_AUTH_KEY',  '),ABn^gXzdkB$BasKtr.>V)u3/5g;:Mmgf4=kF3.l3WDUu,[Q--_#`}qu)%dzYyO' );
define( 'LOGGED_IN_KEY',    'b}(A$dKh1?_.%!a 2[l4:RsD,B/e2hhiAiw-`c]ShQo_e^YH%?RjH6.$Kxcs`y/f' );
define( 'NONCE_KEY',        'Bu^XB8GE/P}BA#;SWH{!91h[]zXna+4y1[U#:7neh:7jH.*y1V&O%`GEM1+K>g;3' );
define( 'AUTH_SALT',        '9jR2U^Y)(3|qD`M+/iqVEQehhJ!TpyHFm(e8V=Gaj>Ju3d1&I_Xxy1gW]ZbdM@M<' );
define( 'SECURE_AUTH_SALT', 'coIL-V)1fS^/7jNI.^|Wb9=vO&H:H+5q3Hp(rc32ocJwi4Y8ZjM9_|CRnY%7{>ss' );
define( 'LOGGED_IN_SALT',   'i<1K`8m]b78ca(k}u8mn<c_9OxhI~qV1&#3.YY[*HlHEhF-sUHR)9JL|tZ_[i1%m' );
define( 'NONCE_SALT',       '?1y=NFmeCMy$D.#}CmQ&l;^ARVF(Y,Z_1Z%lTS+YnL_/%.#G]);(G,ye6on|6C[,' );

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
