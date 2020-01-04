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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         ';HjT y4h&)z}P`uh(^k*+pJtXfg]6/GJ4uY<#[VPC4V>6^#9z_V7hUD4Gd`*u]K3' );
define( 'SECURE_AUTH_KEY',  'l9%>?MKl@RMS^}%%E*BS4,?i:0`(KSA,]0y(1d|(?zv%Thz!F T$X]k)6bI3$paM' );
define( 'LOGGED_IN_KEY',    'DS@+IoU!;0bf]K3+Erae5vC8RYqN^4X:VD{z@{O+%xm:ET:JuAb2;nyJJ-0^p2Lm' );
define( 'NONCE_KEY',        ',L!.,7bt&bjjp|0pnr0z{Z6nv5sj9%`@EDgrLw.qk`B%gB=`(4%p:BFV,Vyb$mKt' );
define( 'AUTH_SALT',        'Jn-|]~0``gSP/Y3/xvoGNYyv51bvYT@n]jxqa`UX#Hy# Ix@L!]Nxj>Jk)6LnR#j' );
define( 'SECURE_AUTH_SALT', 'oY1:?K/WoL6-R:P0W#&p7RQ][O=ppp741MJthrb(NugS;*9B vxqXMVMq Ng$Y^r' );
define( 'LOGGED_IN_SALT',   '?p)Z#As@T[O<2-aSpKP7Y/UN6z6xX*TTBbi0|RriyuZ7vTf-F!rKzXeEt1x?&R#w' );
define( 'NONCE_SALT',       '`L{XJ2_gA&5g[kX6%|r_d7Q# ?3*&UC_1``]zu0P?!-#3,U#ya0GyqqVK4W6FhJ9' );

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
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
