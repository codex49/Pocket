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
define( 'DB_NAME', 'dominore_blog' );

/** MySQL database username */
define( 'DB_USER', 'dominore_rewards' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dominore_rewards' );

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
define( 'AUTH_KEY',         'd42z(g#sN>oKJdOFQfc.jBD4{i>_2b_<-)F.?M^[%!d~C~m&~S[|f&hHp{(RC`S#' );
define( 'SECURE_AUTH_KEY',  'g6WZa{.Vj3QT:!K.TC7Dp0hHn0!iuzyqqA~H]8!ZI*e0x<Wdw1J(l<.UmC73 a/^' );
define( 'LOGGED_IN_KEY',    'g1&Ko?-{ r4I-tw7pu{G@CnL$OBuX+HF0euWRFEa6<&+xq[eiB8$b(u;Emnj#]OH' );
define( 'NONCE_KEY',        'B9PMH0EfAf{TqASP>LOz)x1%MlDyWk1Ef|BN39F7bT*&ulQ)JY`g~OgX?kHFT!)%' );
define( 'AUTH_SALT',        'j]La~q8Sm6_%H `IyORJA$y6pd]W0v3+m+ahK!gLcpOY:a3FB6Zc{kdBE#V6Ve.o' );
define( 'SECURE_AUTH_SALT', 'LO#__@9}|ec0aBp?3o=:dq{/YC`[,jqTP(SF[l~FM0;d8}-(|!GNU*rBWTJ~gp1Y' );
define( 'LOGGED_IN_SALT',   'h w&*zdGbeacdz?C9Cl08>=2gtfW-D|rz<:n%x,f,Je7Tt{[+Cb(hDfYx?G:ZGCy' );
define( 'NONCE_SALT',       'GIZZO6`XgWa/xr.,>br*g:Im+J`_Lm0oIWoU&|gI7;V[82zMZj/O^,1{$^v,oRE}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
