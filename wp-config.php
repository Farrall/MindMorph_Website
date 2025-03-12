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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/devbrilliantred/public_html/MindMorph/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'devbrilliantred_wp_bhstd' );

/** Database username */
define( 'DB_USER', 'devbrilliantred_wp_qezsj' );

/** Database password */
define( 'DB_PASSWORD', '^Bp7z!4D2pN@93^A' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '4Z+C:3(13A!44-6x_X~6g2K*Sk9L3e/8RGlzy|7hzPrpOGggH|y4TC0lp/@[8mm6');
define('SECURE_AUTH_KEY', 'v0[e-pw*%25WDu16%TgGm3;X2iS&@aABf|7!W/3#YPg[xC)!yAzJi9tK-a2~2-1/');
define('LOGGED_IN_KEY', 'NHNJj4[f15H3p3vu_QNJ:aPNv8y[35T66*&lE9woqu*0-33WZ~+7osjaF/zVP_0s');
define('NONCE_KEY', 'F3S@%2/W7[45q@U#ZRQPH&@E_[85(2y_h)&0yh~p%2@9Fl+nU3IXw5KUUclA7F3H');
define('AUTH_SALT', 'q_:7hs5Teldnz~9m58v8s)@+*iykan[z;!3U%i3v#WM+Lw~]1818oF3g6CUTLSwy');
define('SECURE_AUTH_SALT', '9N!-dxfv35/E2B@%j6SyC&r#72!zD;5BocSM6hdJ14l3xz5X48%zHoIqPS-UdM#8');
define('LOGGED_IN_SALT', '1-4c9aWA68m3u;G!6Ni51120bbb[6B2M8*V6B6)_~#aXGK:s+41J5]xHLs1p31wE');
define('NONCE_SALT', '|rzvhP(T;7Sy6_K6x]4/*BW*&gR_gxOp6|(9-LX9Yxoc4l(bZtV;a*#!+1C#y5Tt');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'f9IrLjmI_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
