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
define( 'DB_NAME', 'adovatech' );

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
define( 'AUTH_KEY',         'L)!X|+Hk:4/S}2!^GVrn/ICV1]j6A Zhdr@&q11ll=;;DupV4Hjf,6<[<+yUDeeU' );
define( 'SECURE_AUTH_KEY',  '`g}>iN|%p!66~X~=&n$sPjgC$]i=E$<-|W7[-_PHn0s)PRnWF]D+mSiZyeN9Q(Lj' );
define( 'LOGGED_IN_KEY',    'p}f^lYwL-8Md}%GtuUu84~LbgR;KsOP|-hYt9SHu) <^iP|UcP~QYtHqaNR6kvUn' );
define( 'NONCE_KEY',        'F]#>K4~Z~MH;A7hHT$~d,bfAJV;JGpbT5ja*:`%t2zFWUUs808yM|2HCNJ~J}!pZ' );
define( 'AUTH_SALT',        'PnjlHGq@RA9<(LX!V4]qqXADbb9I[sn#I^YMwN8-Bn>oCRaRI>]pUFUQ97yz8@?Z' );
define( 'SECURE_AUTH_SALT', '-8-i-n&9#Dg9I;9<yy=-H00_!k$P#-KZrcT!@F:-Z@SA{CU$w6sI}F=XC~?jK|oY' );
define( 'LOGGED_IN_SALT',   'u8Q`-QxMlxe?[U#Z*=pt8jp6iz|JJEx?nM_g^xq4IRC+CWmO#!w^l|<GPEv0Gxg{' );
define( 'NONCE_SALT',       'tu7]o .7_]cNa)r=p=4v8Y.h#K&%K`Flp vI0v_ZX@2~f]3xkTk5o1%H4v{oiOA?' );

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

