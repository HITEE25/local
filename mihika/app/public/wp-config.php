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
define( 'AUTH_KEY',          'T-edDy}|EL)q*r*_AII~[Z`kJj2)w@ _k{f]0.y>}@Z(F=G0Bgj4T&!`nRdyjDI1' );
define( 'SECURE_AUTH_KEY',   'Ui3GF7^)inYY)l:;CY1KB6tTqcjF0c>I6Qpyt.2V18D(|]a*AwAtX(R/x5DT`gWj' );
define( 'LOGGED_IN_KEY',     '*{i/<K3Jc@qFiD|qdRa_U,LtcTeRmsZL<5=tH`h #_Q_}57SptN;;3,kNk/[fkmO' );
define( 'NONCE_KEY',         'biKH47nyt<5.4xR)BchGc[js[NwESo2f}Rv}: d%S<i]o@mazy+<%$WMsXYr(u0S' );
define( 'AUTH_SALT',         '`vQ~^Yo*eNpA|}R#*<hb(@Nz5^AJGETL1Q+QtU^8RqF>E:R Gt34(PBV(%S0KP;?' );
define( 'SECURE_AUTH_SALT',  '0M^?!RNWDU*6J`6H=p-$/llz7xht/,HCU,Hp~eZBNI*^w(Bw}._<jNoUaNo(|AA4' );
define( 'LOGGED_IN_SALT',    'v`l8pvRY -9,x%!5n{z[o].dLM(Tot#(c4tw}:X+~<dZ/3cfN9WO*pj7,wxnWuBa' );
define( 'NONCE_SALT',        '(P][#7Zc5p;*P),+S 0!27X|;zYykUb{PS@A/dXpMvW6^V|}9>nGuY!}LZdFqAv+' );
define( 'WP_CACHE_KEY_SALT', 'HeRy0_}nqU4rIC!:bdLNN2vNLPfF@ *X+.oQCS_y%UbC/tXObS18|xz%vjTO2a|*' );


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
