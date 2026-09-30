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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+TSQ;OYp79fbB5@`.Do#0;A?vbI|k/ZmM[AI*Qd$,6HLSyP6s~_8&k.u)V;U/*;p' );
define( 'SECURE_AUTH_KEY',   'khV%FW?XWm6n*7s/EBJOqF0/6i62OhXw3=%5bFJx$m}voUBLq/T@!5DR*i~s?8T7' );
define( 'LOGGED_IN_KEY',     ')u9ph,moY/_tTMy`RoT.3&>1w*AZi*K_jA3ZC:aY1jm:/_I#suR!Fsli|]p|K{NC' );
define( 'NONCE_KEY',         'tM%{ds0J8%y.jB?QK be%HTr,_c$-zSc.I>q@)IYXUVK@O~;=Miv_Ww8+3qfQ#|@' );
define( 'AUTH_SALT',         '*RA0y0KNyB>6o(_<SiNBK;%gxJc<&2hf;CvG#>7yVzc<Tc{>bOA VdhepH<)F~$;' );
define( 'SECURE_AUTH_SALT',  '5Ihcurd:MK!h4 `N%PW^Jf1*17T:k9vxDp2OB}F d;phK[,Z`DRc/`O&Y}n63Ot;' );
define( 'LOGGED_IN_SALT',    'l}XX77;>9Jz6>[/@!do1gjB]XjPvrBNJZnTi5(zjyx05u,Y|xI$ijb9taVGc[@du' );
define( 'NONCE_SALT',        '.Wf5pj:1DNyz|.x504]M8.1})wEhj<G8sq.Rvz6+TO[q_Lk[wL]a0*hQr}rG`i-4' );
define( 'WP_CACHE_KEY_SALT', '%4x)N,Hl MHiepo.H}-PufR_Hj^tWw]#[>8Qqza#SLEr,c?xVmp!/;^O_;ZBL4 t' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
