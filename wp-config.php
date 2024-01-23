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
define( 'DB_NAME', 'starshop' );

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
define( 'AUTH_KEY',         ';XBoD0fN.8dq fhE7%[gkQS;eeo:y.I>R}30yqxqhrDP_2acA-&19<>c2V+rOr8=' );
define( 'SECURE_AUTH_KEY',  'oi^=m^3b1O-JCr{RoPT0=TBLpC>(?0qW5g5Q,jf#>S/&%{73ehU$-gB@CfF6Mb<-' );
define( 'LOGGED_IN_KEY',    'KrpmT6SAJP(5CDLXuwM}6bv3Wc{R><604O`dBL1by{)vcs{cXK3.,U`_@8jOKHAd' );
define( 'NONCE_KEY',        '($N4b,T@JvGAg?&I?w{EbIl>}|lto6 )gFH4^!iUmpTE2NssR)ZT}2k(QmL-1(yT' );
define( 'AUTH_SALT',        '%2Pv{T{;}s}Nw2m(Z/@<Kr!WRJL=zN8ZYNTAxOlU`35D9qgpWZ:243{%3=n`F7os' );
define( 'SECURE_AUTH_SALT', 'TUMM,BPB~6@!3D8CNMmoa}dF3bF#ga>6#l{s%>.A;.$q9b?6CGGhBZ?R19aH{#nh' );
define( 'LOGGED_IN_SALT',   '&Rk8<@uf!{>Jxtjbo7t8ab(7I2Q2]Ve*z@Ou=0F`Wa1#,RL 5,Z R)3$waQx>0: ' );
define( 'NONCE_SALT',       '2#{$l>$q;5Ihom|q3*Te@bWkd(R*PTKZxj*q}(0C>&#Qcbm{LHH}:j|ZK8B-;Sc@' );

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
