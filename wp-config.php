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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'CoCMm@z^41AS)#{Om]z_.HofI%8cTf05MV?+Tjok+os}[~vkL`?!LnKqwId*6D@B' );
define( 'SECURE_AUTH_KEY',  '/Fon5#}&iA;Jo(`e3FEs>DHoO&XitM#mCe{hILT|Bo`I+zxX%a%EI6MXl9L(Ps7u' );
define( 'LOGGED_IN_KEY',    '}HqP*;,19|-PU*FB<>,R(gUmp2|q-5ex-2>IpP/3Cc}I79zO6Qq8PbNIA$knyL?p' );
define( 'NONCE_KEY',        'g,Y#FowwV|(_{*p,C~A.THy&XHDVZ9.@ZtEA;Woh DBi7wZeh*4I4uy@u+MSx2W&' );
define( 'AUTH_SALT',        '0VeV$SRVfkF5Nj}Z-j*SHn<&&gWRl1l]?Bi`2 5/yH|r5 2NM[~}fulCUOf:L`{r' );
define( 'SECURE_AUTH_SALT', ';,9EHKgT|&91LLXN06FJ1mJ<7{|,6KCu0H+yOm:dV?[3`M3u_j8*a1k0JrO Glin' );
define( 'LOGGED_IN_SALT',   '-C0 h0>SJD2:F32Fe<dS_m~F_-N--gjB~vB{:pSU=P8^m.toHPv$&_A#O&8mk=Bi' );
define( 'NONCE_SALT',       '79++AL6Z%A7}C,7Rmp[$aJ9*0=:,<+h4Wc@iwo7CMu.,K0J`86top96&ruU<q[Sa' );

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
