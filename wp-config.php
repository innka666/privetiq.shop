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
define( 'DB_NAME', 'indipl_db' );

/** Database username */
define( 'DB_USER', 'indipl_db' );

/** Database password */
define( 'DB_PASSWORD', 'WNHTAMWH' );

/** Database hostname */
define( 'DB_HOST', 'indipl.mysql.tools' );

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
define( 'AUTH_KEY',         ';8bApg2bj,:~}Wx0PD57.U^b/cPOuqGB9R1@_@<=w+RTGei{?T2@oh{n~oODm:y/' );
define( 'SECURE_AUTH_KEY',  'A?cMoAh$HctU`N.XO62)r=choM&H,oi_;3Qh;4aELC1%Jwv:`/@QiqbA$!@}C?o$' );
define( 'LOGGED_IN_KEY',    'H8,/_U3NF@0~-ctJb5!|JH|RD3<W<^zicAQH&HiwpPUk)P_R4B6h;>q G^W&Jw^+' );
define( 'NONCE_KEY',        '?V4FGkLT#2D[UgHIfYjF4KNoX}(S%l5ly)=YDvj}&m:.:#YEcjF[T1v=F)8ew/o5' );
define( 'AUTH_SALT',        'Q/$-FT  c6~E;7Hq-@W-3m*,SL}+k>EAl Qm;Lpqv<t_wmota}Sp4-]]0<MV?pec' );
define( 'SECURE_AUTH_SALT', 'vZ!sZGEtlj3&Vd,<x4Cf5137}0^H@]`PIh:2}_7Y!vAMjaptX[{WKb,Qe6%SjSw(' );
define( 'LOGGED_IN_SALT',   'ZPb+pi I;!xhxN+2gz@4Dp/#gapxG#d>PB08pr|Bc0B&{tQ^]{~X`Yl)!k+yaO<q' );
define( 'NONCE_SALT',       '/ErEtX IO=$?a!HolYr].i-6S*R`Q{$y1sLj{z7Jy2#jq-A6zLL1q~!&zmQM3o<o' );

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
