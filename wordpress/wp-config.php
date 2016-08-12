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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ios_programatically');

/** MySQL database username */
define('DB_USER', 'racheldorn');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I^c{0Disz)@rc^5sF+HM#C>9__T|4MU6D?YVv<B%jv+Z~vsD*_@*|!k~UtL3>5X?');
define('SECURE_AUTH_KEY',  'tr/l;v)nCdtQgHiM7/}]KSzu?+T+@Ou k*#O~rR;s@@T~?Ba<5.gvOm$_D<vuu>?');
define('LOGGED_IN_KEY',    'g@z+K,QzhM&y_*C5j>sWU1KF]E +7WtH2I)Wldn.%Mto^vX#`>ub{;*REI37P:,|');
define('NONCE_KEY',        'Bz50j~S^7{q<q #GXs: KX>I#&a)O/Q?^QdTb!tsQbf%#0p_h6+ f@,w -J3,F .');
define('AUTH_SALT',        'X(^6A?T1=Ql1R[L)O}p&PWg1#pQNfO0Ph{pE761.9PWP%1E_=N Y U`tnVkn;n@9');
define('SECURE_AUTH_SALT', 'xI]70Gw0bYO&DjEb#M AZK*RivmE@}7a4cUmz{VH8I-vE)Av?G:NY|:<s=m@g<Fs');
define('LOGGED_IN_SALT',   'M1ly5k{EteEiA&?yT!-MXARv]f+UN9cS]OeuLi((uH$W.t`pi8Y$MoOjljI>yLvk');
define('NONCE_SALT',       'g ^*t};k4P/l[n=%gNB_w<tNChpsB|gJBLNhndRaw6{={`t4$^C0Rp`n[;](-)a2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
