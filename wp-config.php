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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '*(6$owOo{yWy_v~/Jx,o(MGt^6c,lA~~K}gm<yeErJnui?5B<f^2Gpz<@@Nx#(hq' );
define( 'SECURE_AUTH_KEY',  'L4C6Gfr9LSh]2a.r2?pakUXJV9o3|*$$/sUt`p{H{66ur)39&c[jN:WX2W^&B8HA' );
define( 'LOGGED_IN_KEY',    'QuMvRe*8$d8[M.H2xT50/f,jPz#^5>1W{Z@{+L@Qp<khPCF+ SlkeM)O2vAvw]:v' );
define( 'NONCE_KEY',        '9sdN*Q%?&{lS/JbIww]`TdXrQPUL{!n{4 }~i{U(dyLFa&q#)/KXIS(x4o~v4JGd' );
define( 'AUTH_SALT',        'joPW{UfI@U .>C,b&cjr6j$NFoyN@7^hQ3cGcI9Z6j/@[ikU7A$IMJ(>0Pqq;J;)' );
define( 'SECURE_AUTH_SALT', '-FQJin~aqWy}4^y:!GUy`xbqfP5c{A&@^tOSC>R(#}nUe;X5@;es+^lIl!^:!4X:' );
define( 'LOGGED_IN_SALT',   'C.L*2!74Yvl|2<q!8@d_u!z=?-$YX=Zu$nY?ZSg!aHMZd p4:5flG;i0fH8yxN>O' );
define( 'NONCE_SALT',       'VslXwN.6sGg,b~m0?-nSs)L;X-qU&?FnS<fb}tZDlD[+?<<j*OTpT$=fB_}(l6e]' );

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
