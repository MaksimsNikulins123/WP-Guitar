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
define( 'DB_NAME', 'id18421187_wpguitar' );

/** Database username */
define( 'DB_USER', 'id18421187_123wpguitar' );

/** Database password */
define( 'DB_PASSWORD', 'Q\8KY9OlRqpx|&z1' );

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
define( 'AUTH_KEY',         '~ d/H1_qD!b1tLRAT6$aV:@u+*3Zw|Ad*X{uGCCn|`Pj)V 0-(g OCn.cg8u5#)u' );
define( 'SECURE_AUTH_KEY',  'C!0!*LqP&3sZQ!]d)teiV]0)vE8HIbkBQ-R{un{M{N,E-be2}CnpnD^ &Br%BE]t' );
define( 'LOGGED_IN_KEY',    ' $p>t0DcSjh;2E*h`sCXt3K|k2&!_5=[10(<S|9U@5Be>?%k(T/Ke>#1++[=GAmw' );
define( 'NONCE_KEY',        'gyTYV&z;W/znn`*Ly1b0#ltnJ&&jt;6|>F3YD7iB- %8)8~pG:,l#C@io*4N4Ya_' );
define( 'AUTH_SALT',        'XUx102MQ{4_TM2yZ_s;LbeK<K*3sQm*/m)n=oWH)1KJ#X[z^`9S$^D>Pav%$.NgT' );
define( 'SECURE_AUTH_SALT', 'cdJa-?(@k]j~PB2b1fqRJ|kD<Tb[~dBVF-A7rt3v*tBaO5}tBpyCcKx`Ry@9-QF{' );
define( 'LOGGED_IN_SALT',   'Am1L9y)ee`[ZM_,zp5LhKpxb!*-hx4IZCZ-GpShWt}P$,|bOcchb-kgWkSp+q[7c' );
define( 'NONCE_SALT',       'BL:]dL$s*?IUyM@,yj^%20C|cQ@1OI*sa#!x}{0O9BDOl}<uM,DydP?Q=i!4~Bd6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'awp_';

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
