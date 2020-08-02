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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '*WrEpZVQ6^bzz>`Hd^/m)2;{HsDQzX:|SI!8|b;|1ja |cwCD4BQL5.=EbwXKU8Z' );
define( 'SECURE_AUTH_KEY',  'Wkv@6LS88{IwBi$W+`&V#o=|E8T1yLX!9{fm!XNk0KfkvEG/fh 2xm}aZJe[:qRg' );
define( 'LOGGED_IN_KEY',    '<6.Bn{+,W{d{}E]%y|u2cD^~8^*GE<}gHs:U=x|DL}P%eZPcsLC*64Myi |Q(rTM' );
define( 'NONCE_KEY',        'f]Y7m,Po8Y}UWh2LL{!_()?B>G/g0Ipeqk,O%F$i6H?^EGJ=<wZ}[5h,?:~n$oa}' );
define( 'AUTH_SALT',        '_8fS=|K|A!iH7wLK]*eKUVzMWo~{ah{bp+NgEh!-l0`]7(#<6>gPq%@Y^Y-suUyV' );
define( 'SECURE_AUTH_SALT', 'ueNRe3j+qiM0&8)9OOTvE3a%GJJ<LJ:0$~&zx>m>B5V&FJqGQ/}TKm@<>ZE`iSc>' );
define( 'LOGGED_IN_SALT',   'D=k4D|TVa5]L9fd[!]lxR;W_p0[@.cU8B94!L6bG](B=yZNOocrY HanqkG4K!.$' );
define( 'NONCE_SALT',       '9GUHrI:<[{0N-}my0R;85VRSE!DtII)KI@rr9Q&NvdgH#mV:h:KGaFhzVa6YagV9' );

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
