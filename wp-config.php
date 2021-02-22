<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'sketch' );  

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vqx89>nXG0L4:qs<!2z_qEk`wM!%]_[0%/Yx,Gqy$?*t/Kya#~b Y?vIv9#,-O>P' );
define( 'SECURE_AUTH_KEY',  'm;:j%:0)zYW%usG>=6)Y(TaDR.a=G;<?<jdM]tYF8J}y+E%U89|@n6E^4(vM-8OR' );
define( 'LOGGED_IN_KEY',    'UtgQe-TPG:qtt(Lk9/*)qMQ^HVp3S6bKy/rK:-uvP-+GVWZvrChvXfzk2EW$YN&v' );
define( 'NONCE_KEY',        'J4r#<](.h<~J(B|&#5fP>}Akq_7-/{lls15`vJX pUMZpk]inWV=R&)0X+F;{Dp|' );
define( 'AUTH_SALT',        'SH]/Vn+6}r?QRX;*1)B2zu]il$t%ePrZ%B]t:Zy_e!4Y{zX[E02H)rMbA=~o aEH' );
define( 'SECURE_AUTH_SALT', '[_j_I9n8u*(S0*TzdXfSD;o**K0$ml5mn1[=0!^*Cx&h#<t=A<FR$9I/mq2CW!MR' );
define( 'LOGGED_IN_SALT',   'zKG6Fhd,?%U-lNjZs&s(p;M8fji9Kup2+:{G<Al+MCY2?y{r2>,my`n_E+@5`XH5' );
define( 'NONCE_SALT',       'w>?sF{7 =0q3$JC`a [n3%0k#@9!D4[Xj2eFsQ}S3B0$y6_zVkN|@0_B#}5Y#B!]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
