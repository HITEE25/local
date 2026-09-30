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
define( 'AUTH_KEY',          '(g<.~.X!TqU42~gCZ]S3c-1{o%ykfb8^A2^l[(/$yzqTG,Cz0SKvbr/Gb_X}cv[A' );
define( 'SECURE_AUTH_KEY',   'e>Ql5Zp$dPK~0*1( aU0RBU@6@f>mjbGXzy5Y0<|yphcTIWSOTbk%~4sx^rrSOq/' );
define( 'LOGGED_IN_KEY',     'Ig!dGw*Pes=U)D}K_%lT-XIf!{GL@Bg{j}H-1c=8a5x-> eSP/j>1!)S-Z*|l(O!' );
define( 'NONCE_KEY',         'f4$g-%-FjL*<Bx?i>Enzh07=o#RBTNMByd%mg:)LNO&_@1y/sX{L&X:1c&;j~*X6' );
define( 'AUTH_SALT',         'BK=NCYyM,EBJ,gX~zC?rf1q_^h)O9jU0goN,9n_`[vR:y0Lw2r~{9,TraL}FTpYi' );
define( 'SECURE_AUTH_SALT',  'Ux@*Yo~o1/~Ho:q`ea@A67r8BPwT._xs:eKF`r899JX0)HWqnS>!gmqNNiG}`ftS' );
define( 'LOGGED_IN_SALT',    'tX@{VLo}AYKGrqwkzY&|uD7c79kXCGp&hXKScjvS94(i*S]8xj6o1f#5h_JzM*Gu' );
define( 'NONCE_SALT',        'I`8qP+E+;BF#<[L/<5LfC};dgOz5;`r@F0`yu6&w4C!g%R=ZUfd9=Amq 9^)sx.~' );
define( 'WP_CACHE_KEY_SALT', 'D*t2e530FS 6D&X9iTvP`Wxm=NB7cYS@$:O6:t#Pyn>!e5r6U! !,vP]YT]G[+)=' );


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
