<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WP_oreilldup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define( 'WP_SITEURL', 'http://localhost/oreilldup' );
define( 'WP_HOME', 'http://localhost/oreilldup' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')/d:GAzl=Jd.;4CJ-FKygcsoaCymbPb|HBev5&+/}P~*a-2[KbLxZz9F2VON?)9O');
define('SECURE_AUTH_KEY',  '*W!C(+3,Wb+pS`-@a) $3F,[)a3a+{phDD(PV+C1~A%Z~J;?wNvAyc_,j.~2Vm3m');
define('LOGGED_IN_KEY',    '+c8s)J6Pl:Y%J;o(AV2#kY4F:|1(JXCio5$QcJPvzVN7/$)g(btlHfmFtW3!JR_#');
define('NONCE_KEY',        '9+=c 46Du=~f>`D9FN$ ,0] AR<{^A=D&S,s`o#;vF Lwld9Y| 9Xq3685ms7j7b');
define('AUTH_SALT',        '/}kd(ttS.8u.XoWap%+*I-,h2~BRaLt*q?i?w|E8vT`vgQ9j|@{RN|Lv)hsk@jaF');
define('SECURE_AUTH_SALT', 'h|9Q@88C|9b;O^B$?qa|6G]e+mNO@s2WluOZ+-*[W=EueNnG|G~E&E&kyr^@rY?p');
define('LOGGED_IN_SALT',   '@>Z zT5m9#IK~ys:k,JL[hCE60.T#e_AH2oHhl[<tKVJC4<WxF:>}s;ykZ~nRj.f');
define('NONCE_SALT',       'n6uq7;;+/U5g}!C1)w1?_iyh@L5BD-cf Q?ww90dFw-=J-E->ne eguI:i=^Q _r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
