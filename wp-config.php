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
define( 'DB_NAME', 'money4u' );

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
define( 'AUTH_KEY',         'v+FHGD3tpDnv!_XzZ$JMQ1S!}mLx 4%em8]1sz,Pf@!#}hkD._zQ(=PYPc)c)R?{' );
define( 'SECURE_AUTH_KEY',  'TOIBf1*Jio%k+@3n&?n/1(=6xo~=QzJE]I$`7ayXos|6|[iSx_{,*}$sBw9cIA4:' );
define( 'LOGGED_IN_KEY',    'h/>3BFS}hg|GD!J$5p4wEDRR;O1zed~.*>,p9Ok|VaG/u$wa|:znl17vT%anS9BE' );
define( 'NONCE_KEY',        'U9%-SM]s_Ai,<7L)E`10Il8V?-OAiC#<X6l$dI)Z%j_NsBa??_(e|i-2JO>jc,j:' );
define( 'AUTH_SALT',        'wYMX::`YA$=H&%$~;T^7a[NtL|oWJ0eS6HP:{EkF7MOalDBLLhkTY8:Vm@5`(3LL' );
define( 'SECURE_AUTH_SALT', '}n{5m-rFI/O4Q0> GMhg@uUh3+q*Wr(5BqU6q`%6=@/}4nQUVam(O26o:KVmm^%/' );
define( 'LOGGED_IN_SALT',   'GAlas^p^7+Z4&pZ wUV4.J?x<cRqiU*_.a$_GY#%o5(MLKs%*z<bR=!&I=x4]l;x' );
define( 'NONCE_SALT',       ']V6+qMCi~l? %>bez`+bh,B<C,~]De|7%WNwDVwzrkS9QxxkG)D :e?]P.{5h={|' );

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
