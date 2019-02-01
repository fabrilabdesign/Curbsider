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
define('DB_NAME', 'curbsideDBmekqy');

/** MySQL database username */
define('DB_USER', 'curbsideDBmekqy');

/** MySQL database password */
define('DB_PASSWORD', '2BHNSYejsy');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'vYUB7N30>vr7,^cUB[pWS5:G91:gZ~VRJ0[NKC[!@w*meaT9eXTL2]<2].*xpW_+t');
define('SECURE_AUTH_KEY',  'oZRKGhZVOG8|RKC4:|@z41[!-gZ|@vokcVNskcJC4}6;].+ta*.qieWPHtleLD5;S');
define('LOGGED_IN_KEY',    '5SK1;#G91:~l]#~ldZS~lhZG8h81[!@w5:|~kdV.qiaTPHieXPHA<TPH;#*x6*xtl');
define('NONCE_KEY',        'fTmfXTM2{XPLE;+E6.+PueaL2WSD;H6#xrcM7QB0^B^r,vf$njQMfYU$y7<unf');
define('AUTH_SALT',        'yubMEqmfMEATMEA3*ygdVC40[O4:[!o4}@vgc!zRJF}VC8|!z4}>vrk@zgcUSKH9]');
define('SECURE_AUTH_SALT', '>,rjgYyvnUMIBfMF73{[_-woVOsphOGCdZGC4!G8!@kcZ@oZG8kVRJ0}GC[|s6;tm');
define('LOGGED_IN_SALT',   ':wsZ|!rYVNgZVC40D]<*q.*qi92WPL2.+H95;+tp_+xpWO-xdWSDhOHD5_{<^rjQv');
define('NONCE_SALT',       'paWP5leKD51]O5;]_p5:]wtl~xhd.q^$ubX.qmTPjbMI<TP6;*+{.qmTLqieXEA');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
