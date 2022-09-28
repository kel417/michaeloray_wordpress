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
define( 'DB_NAME', 'michaeloray_wordpress_db' );

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
define( 'AUTH_KEY',         '5u7qadFX /Pu+2zVJ<qAb{fx&S{zzZ>`.Fn_Ja%[aRq noM1N: ..Z,0s+9X&9%/' );
define( 'SECURE_AUTH_KEY',  'e|diG|R3Jrah)?kkl55hD|*J`%`jy7;q6{Sj^[L[cFgiWE~wwemY:,q0]y:R#;t)' );
define( 'LOGGED_IN_KEY',    '~jaf1bICt.H)soNf+YGc9KT>`f+{X0y_4a`(u:PoAJS=9rc4}=.JocSL./[OL|_:' );
define( 'NONCE_KEY',        'b@9I_i9Cz =N;m*-0%I9`{eziaq[zw&;)ZK{g3>IQYoU;Q(h0Qs^Be^X@D(xD0Sd' );
define( 'AUTH_SALT',        'N],VQiVDtNnKAvlW/TG_FG~r*EfuQb;Yhv^D?p1kmVi8`[u9qu9NnP2ajJ~<3Zk%' );
define( 'SECURE_AUTH_SALT', '|L%FF$h5=pU,vlk=,xp$@1ws/JqU)H$*&[L,#`ty!a82+ao,Z2YCVAeejNj(c%EC' );
define( 'LOGGED_IN_SALT',   '/XixD9UZk~8$SXytXkq~-nfQC./rvOd9XT0r!D@pP~7zjug+PlPgZ<1?|5sW)aU3' );
define( 'NONCE_SALT',       'u$K@sDft*c8iKtXkSH?@I.#EHit9`:{@>FTE*w(+R@C-/|.]xF4lTITH9!*,d*AY' );

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
