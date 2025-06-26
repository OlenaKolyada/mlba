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
define( 'DB_NAME', 'mlbafrwacademy' );

/** Database username */
define( 'DB_USER', 'mlbafrwacademy' );

/** Database password */
define( 'DB_PASSWORD', '4FGi5sKs86' );

/** Database hostname */
define( 'DB_HOST', 'mlbafrwacademy.mysql.db' );

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
define( 'AUTH_KEY',         '?6aXs_5v8B[R|L Zv_xTeJ^`J](?|7*MF/}?zn >9%u<>sBG1S6Fm|}-`EWTCfZG' );
define( 'SECURE_AUTH_KEY',  'vz<>ee-zA<gw-|V:<HOT$z?<bhL1E|e9T[7xW5c#]lE|p`wSFV 5Ay5J40hkAx0I' );
define( 'LOGGED_IN_KEY',    'TLCpQtO|hSv6;!RNZ@+L_c?Y$$RsCM~TJcnGbUhLO)(eh.PzKZ/DlwgZu[BL5q0)' );
define( 'NONCE_KEY',        '`rMa1 9/{><8Ukz<5^QXJD`CKOQzMD(j~R+:9 :5L7{dlsl|h$PLhg&J3,wzpk&.' );
define( 'AUTH_SALT',        '~X,`qnd62^7lj?3EchGBe]KIqB&au<gNn;iV_IPY[j-|i{E7AV(BYT+l$~M[d}wj' );
define( 'SECURE_AUTH_SALT', '8[4*wWn!m9t0j^qH![VVVd[tmEE4yI?|_Wy_G/M>$>uhwp$Qwi,(a*sqa@7{|t&?' );
define( 'LOGGED_IN_SALT',   '/U:g5zMb!nWOxU4b(Tonai9QvQ}tPguXcO6@{|bE[i*`^O{*8@N]9k;/tqd9}VnI' );
define( 'NONCE_SALT',       'gxKF:9D|D{}hHiypE6M~T?+wFx|0]hW(4!A1&6^8%kWS4o2mO7dO=!9 [K8tWs?&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
