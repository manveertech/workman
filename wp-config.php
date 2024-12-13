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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'workgroundfour' );

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
define( 'AUTH_KEY',         '+g n0m<+pM0p?!,GAe,mq|#{v<M|4<y&zr)ZT;DDaHL +~xw{.F%3qRv3~%2lLS3' );
define( 'SECURE_AUTH_KEY',  'iH7 Nk)<Dg[TD!n5tl3kQH.silA#?0sx&mRFdf:]|j`;PttyM6$q4FL)Jl>*k:|]' );
define( 'LOGGED_IN_KEY',    's`V?([X[TnRm]!nDqw.+nV93bEH SW(Y}.govoF.vt=+>;a7Yvd};=|S#cTvmb%o' );
define( 'NONCE_KEY',        'E^JPc(%UN`( ]{,*Zg=e97BI96{;7|7^_t2R@PH,!0b.pg0W0~Tl|z^^|cesae1_' );
define( 'AUTH_SALT',        '7O_DnU/bv32)YMGK#7a8@|8gw#[`rM>mIL_~i@Th_vkXC-tq2nd)E.E[Qk31!Yx]' );
define( 'SECURE_AUTH_SALT', 'VJfQ:~Z0ujk?+})rKQMD_HEuMet:x%)waNC@/j7QsRPVm^}`dWjObB$MLAs6a1|D' );
define( 'LOGGED_IN_SALT',   '}znhqDO$E,`){#Jd`WQ<zB@A}!JuC1&?EILH-DSRM-?C{{R]GB)^T`65DZ1*Ne4m' );
define( 'NONCE_SALT',       'WnGI@?~t6[8n0<l*?99;GRXCzK4FwaW)7!9a%>qzVa}{wg>Nw)bBUDpE)<cgYq1Q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
