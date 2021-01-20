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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'FXKN#wqe6W{qjzUp7c =2>`*h>77vx21!5=3648QNxVB+pkM4%G=XPW<1OV )9e@' );
define( 'SECURE_AUTH_KEY',  'g^IU}}G~WSu[y-K8( jQ-@CeETe@8J6_}iz (BB/w6R*021b8lx>lxp5]}si<}po' );
define( 'LOGGED_IN_KEY',    'n[zW,FpoIh1iQdU&6fB]]d. fdXE0|Fg`58B#e}.D&H/uh+M%H0t1{9,n{y.KOZD' );
define( 'NONCE_KEY',        '8kVT[4$}KSB%H!Pn)6?kmJvl=xx-9|5}z25:]$N:ItYXJY!B%DE5V*3kI@t8 vBc' );
define( 'AUTH_SALT',        'XqTr{aC_urdu}pS+q=+E(/%/AW)u3SY^]-~DJ^;HIis36OUe%EpFg~$|!k5WhT:q' );
define( 'SECURE_AUTH_SALT', 'Ct[8Y<gwX2nL5cp0#(t`gFx(2(J}Eux|m9(6r>)|10)Kt[2P,sM8q~tizc}/h`D^' );
define( 'LOGGED_IN_SALT',   '1pT3X(#=?;t{O$;||[wd%MD4B4A^/eNuoS)s-uy#}:#=%P?n8N%MaBiSY Q:Mh<6' );
define( 'NONCE_SALT',       '2h2&hHWEiI>A%2HHFjzrN/d/77(9=)fV6[0}$)%v4uV6 PAmB&YydP(P&sZXNE|s' );

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
