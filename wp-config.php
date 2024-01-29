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
define( 'DB_NAME', 'outback_chef' );

/** Database username */
define( 'DB_USER', 'dai' );

/** Database password */
define( 'DB_PASSWORD', 'dai' );

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
define( 'AUTH_KEY',         '{NWFvY^SN5?i!_ygu#o#)<pb-{/]!^m[^Kza5F_2g!-!d~z&9dp$x 685v~>+^oq' );
define( 'SECURE_AUTH_KEY',  '3iO>h1G^M*.E_=~Nh3YAA8[GEa0LBOh? S$78+x+YXfs2ed*L r]]>dW]&|s,*c^' );
define( 'LOGGED_IN_KEY',    'k`[ETo}O25}`@/&<n52h$zbR+99{;fIN8}e|5rFb0n6Djf(h`6D8,w~Z,AeMQFxv' );
define( 'NONCE_KEY',        ')5S47,rqq@W:BT6YKJ%sN9A%NB?/-B#XJ3rIk*4a>DdA_raqT+(s?A6Du(#l1#;u' );
define( 'AUTH_SALT',        'v[-[5~yU#:n_nOmpda5=:`H#prT8]5^L}HqqLB?e1ZsCjt@YsGy?@xebI/|HTd0Q' );
define( 'SECURE_AUTH_SALT', 'rPPI8m^]VK<Y*d~FfO5c9,E1lAC;EmXVtsL2b|?b{Kv03tfqb!`fdJk)y[<XFJ9t' );
define( 'LOGGED_IN_SALT',   '`8G~T>nes~m~[a`BtAD54n5i%cLld=+H_l$`ATn5>H[>MGo!?#__$ _9|ka{dGC?' );
define( 'NONCE_SALT',       'e jlgT!pRP@k}?N.@N{| >4>i!-?7B^Ihsf5+MGt<lqu=,[5eZq[S8kJQti[J4Qy' );

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
