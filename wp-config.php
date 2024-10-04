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
define( 'AUTH_KEY',         'e~,*S9V]Ew@S AJ1]fVW-8`7^NQZRyC`QMzY -x/Su]$_Q=@Gu8wkDx|H})a63W$' );
define( 'SECURE_AUTH_KEY',  ',w:^z8jyOX]P_0-FX<z>TLNrrMW{>arLa;$o:~K&ug.]RI>54Tk=6Tn/Ik4kU]*n' );
define( 'LOGGED_IN_KEY',    'q|UH+F#c6Zc@pp.5yOMmdaK=}X E;p05KJ32J7Nf4:2s=k|Iik`XpP{[_9_~9B^I' );
define( 'NONCE_KEY',        '<E?i;X:=lRgxeY*!c*_Fo78zFmpr5%;VB@XpuX}7/e%<VhizKH4;y|B|NRN_;Zye' );
define( 'AUTH_SALT',        '|b{U)6Fx6`pp}[U~F?{tf?P07j}2`=K?u[(7,-0uJXX]AuS8QYF+w@T%jL:yqLJE' );
define( 'SECURE_AUTH_SALT', '@7UrRm[ts%f2=d$!UzV{YF2vl]3E=@lt3%Sp2402Qub)94OaAH=]@fAa/{g`A=Xl' );
define( 'LOGGED_IN_SALT',   ' <]>74{w?-fIy_z2S/v#.bAUa}Gj4n0hu/jL6#*BLb;.k$7_K%IIjgET#2ht;3T0' );
define( 'NONCE_SALT',       's1lWW[D=mH90kvhLKp25*V@2AJaPasBRPEF|dmv7t !S1fN$&?LZwxy&_o6QNRzZ' );

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
