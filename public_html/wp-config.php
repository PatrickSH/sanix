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
define( 'DB_NAME', 'sanix' );

/** MySQL database username */
define( 'DB_USER', 'all' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'zJ-o:j,4Pu~P];jUQTq,AgsWWww%<qpF`> jV:u&B,omBB!2edFv&BKNiXCWTj,Q' );
define( 'SECURE_AUTH_KEY',  'L2[1Be3p-OsI;?oiXrq?z$]:Qkzv8z^{E~jnY;BIq?+;n=U9I*w#Rr[(;:,{#S8]' );
define( 'LOGGED_IN_KEY',    'bF<:F|)|SZI<SxdX:*gT5Q-Ro/7<[n<=BmCBU;8X@N`nf]@&pN_e$=A@,$Nm4KD3' );
define( 'NONCE_KEY',        '}lRWVP{{NZVAyAM#|Y4RYX2`RUU4`=xavu8J%0/2ss^ ;x<Jm#1X$URMyFa5?ERM' );
define( 'AUTH_SALT',        'A]uZ@Gs8YT.@H@bj^0*loLO<@&r^bzx$?C5[QCSV%?Q25ab)sOK8GF%y?o2ru+3N' );
define( 'SECURE_AUTH_SALT', 'c+/0Y6rU*UQl}j,P6vnJKzcdwJyc]7^%lQE#vb5)Kj|.WCR^k6U<H/m/#F7NR&Up' );
define( 'LOGGED_IN_SALT',   'J%V@TfkWO6!zysPt1B_2WM9Cbj&03%%sfXJ%HV,RmkUar*}DrQ*({)==otr^>n}B' );
define( 'NONCE_SALT',       '-/h8kOj>prp%2~mvf.)y,^vnIbvaQD:Zf[DS/wI?/[>|zN<WNCeC)PA/%Wq3E97}' );

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
