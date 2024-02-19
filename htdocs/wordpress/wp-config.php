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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 're' );

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
define( 'AUTH_KEY',         'WYrdN3$)MN@FCLAHYIOR?{TWOeiH Z|~J/zJ%X&gK&*fG5|!N//HU*14Rri6G{`B' );
define( 'SECURE_AUTH_KEY',  '8|H9FAB;*LXpFu[%+Po=.j=fX9eMz[]KYt1rmZdYKqTGADp3FLOX_nS4mj#V]]#;' );
define( 'LOGGED_IN_KEY',    '[ VMx-1l=CCsP>yrk_z&;(4mA|9c%SRc:xB{-H#$^!]]Z$&tP|F(4ZNp|1L&!NA<' );
define( 'NONCE_KEY',        '*lL9]_m3uw5Ky,KL383|n}]s`eyw{_{W,&0 1ODG$0vWK7)-?k`fROAlJ.O9?M5;' );
define( 'AUTH_SALT',        'j$]=52+qn.o>;nxQCd5;DJo1X(uhz_am0FcF-I zw7NK $9ptr3=/`i{8tQa;Lq@' );
define( 'SECURE_AUTH_SALT', 'y?)~#Fxy)k2MUeCBpxd;HMUV6$o5#1e!Nc(TYgx?OP,zgB{7vX51[K3&jFLD|xq1' );
define( 'LOGGED_IN_SALT',   'HpUOLV1bOD0VZPD{WA;2-_0|_W3> RXP^YTBGNp~5[1{?LV=$A@7rLOY3cgjOXR#' );
define( 'NONCE_SALT',       'x:*g1LtUW:QhBmvhQr[2@~Vrm-BI=]@dYe>~M_BbX;7E*FktG.MCF8LuE1l|*LLc' );

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
