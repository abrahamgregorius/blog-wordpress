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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8:4`qY[Q*:6|fJlaC)$y}Xa28aqfjg}<fPBLu@nq4FK:,a^CCK+buYdT4:=g;6vb' );
define( 'SECURE_AUTH_KEY',  'w3C5fK,xOAg+0OPxh<b%ohI4-n}J+m#*p4m5|/q6DQYpb%Csa29[]F4fF5b>]q?2' );
define( 'LOGGED_IN_KEY',    'UgCi2wj9/czq]3.P5d)b2$w-rq5WZ&s%gJ_NT4~Y}#@M4qvgAELE8|SY;-TDoIh=' );
define( 'NONCE_KEY',        'o^/qTdUkiaQ?oO4.UWYa#3{?ut>+$1sp4 u903#tUJp?;auKW?rUBbgh#K74pt.f' );
define( 'AUTH_SALT',        'jSK|Y<4|f5(>y-Z;8IBkg)ns2?#]N5A]HAeY~t3We)XE>e67 kyq]2_dlImzxGZ?' );
define( 'SECURE_AUTH_SALT', '1yuo&d;7r`kXyR#hy(1Y4Z9BD.uzyLDC_m98r:dV?p2|P*ZOgDGD023G`4deS6b$' );
define( 'LOGGED_IN_SALT',   'xgn5em}}0u|M/y[h.n6)/J=#<UJEm6#[g}~CC-IXXPI,Li[/Xl)t3~)OkeNb;NjA' );
define( 'NONCE_SALT',       '><}dCP8Q]/b[2qEQu#&+kzqxE/?@GJ=gh``?_qCS}?f9ojc/D]yG-wHE6QaeE`t9' );

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
