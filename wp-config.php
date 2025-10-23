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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'pwM|I>O2y^HmhilGyeO=2[g<7%SL54kGn<]JD&NKhPT3G%qOy:}u^YeI@9;{q~^X' );
define( 'SECURE_AUTH_KEY',   '@V{$`pN+(W!%`@U_U]sKI*4k.V4d{=dl!tDa;.fY{-m6`~d^Zm|=2QP9nP[qjl$7' );
define( 'LOGGED_IN_KEY',     '!KQR#b2d=&&Vmy?g.t@@FWqaVi:$}QNNTrf&P3tBO_<J)u`U_C!1vU]^aaVtedYn' );
define( 'NONCE_KEY',         'Qrc0^~?KKwm55YVj]Ra kq%1}}@p0m$!>b,A81Kox*b)Fr4THY#,/J7{s@^y[aBw' );
define( 'AUTH_SALT',         '*1ho_b@zDNjL_jRE*?sYa7+d4*sP:nYJrCWT0|GjGa#U<~83v`L::BBv=KQ/H;[e' );
define( 'SECURE_AUTH_SALT',  'b[L9a?tt78t_H}EhKs2ClH,~p})a|H#AhjNUTsL.@(}(Pu_R!INX/B?~GY!E{[6<' );
define( 'LOGGED_IN_SALT',    'a6Z)0vBY4PtvqOJUfH.Nt&<Bc=F?xNQS&]p~qn6 $9=&,VH$r48TLx(0$9[ Z fv' );
define( 'NONCE_SALT',        '6$~lAJiN5zdom_^yq8lKD!)IV_3&s8a$%tD*NW}-}kDQ9hC<sP;909V,#1Y-tYr>' );
define( 'WP_CACHE_KEY_SALT', '#$E/FPW?uk#0$2B4Ye*3OwBo=d:dVIURgzzS]y89Z4`C+K><LCCNkLhId8-2OYte' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
