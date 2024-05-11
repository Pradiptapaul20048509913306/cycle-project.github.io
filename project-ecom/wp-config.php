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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Z-f3*@sT3fk:M33p-EHw_h}Ot2V>6.W.+?Zs-cO`E)G5]6;]8&Ffe17?YTt@@9~y' );
define( 'SECURE_AUTH_KEY',  '7+6-c5_0V{]VA(By)%o>{#L+};Xr1-q_,z?V.vE$P;bHye4#Kdu4zc%~tm/66vq&' );
define( 'LOGGED_IN_KEY',    '*joVL%zN[w94HUHbxcR9Q*go{+]/@i-R?|w;N$o%r0306<.R#9%Uc.RDdHcN#acK' );
define( 'NONCE_KEY',        'R|6aMprVvZHjd2+;#9qv;pcoSwPOHp x`9q1S5ra-*qAqxt,C06d7-Mvk|sDm?tF' );
define( 'AUTH_SALT',        '=rdKlL::FDT0eSD0&^jvE|P5WjRG&dqylHU5J4R/ujM`LEH`Tt:7zdi*o77gwz@8' );
define( 'SECURE_AUTH_SALT', 'laVa%@mxmFj`Y2^TjIL_*5&gLysYt[l2a%3<KN~CD#[~mmF`*LB-k$N-r(M{=&j2' );
define( 'LOGGED_IN_SALT',   '90uM`OU^/0%t&&={`Ce0a#/3Kl@Rj9tAQ;W?D@=+^,)bfXFGthDkl5/73k/i1jr}' );
define( 'NONCE_SALT',       '0#XroX6LDVELoez>:WlY>Gq8Z4S$ ;tj-/?~Y@#`l2TBoY,L75qVJ1RRRM;qPS6i' );

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
