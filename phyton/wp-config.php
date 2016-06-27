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
define('DB_NAME', 'phyton');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'V|P7 +?>b{W[G?W&K vhh-@{~hzAqr&Jc<I&=#vdjlO=B@KNv_W?$tX*$rj`t|hJ');
define('SECURE_AUTH_KEY',  '>sL(?|Q$W:[v}kz/neta<VGe.rU~$x;ucIsC;lI$$oK?joO5:MW%USrI)x.l}6ho');
define('LOGGED_IN_KEY',    ';adGz/:s[DB$+2}THPOs!n6chsQ%-0L/+g6mP@2mH8/guz~C{.`4#0%gQ{!$6/+3');
define('NONCE_KEY',        ' blbHrA#6&FPP97Q0Y<iYBQELsoQ1s7:Telv#b/h0Hy(tIr^5 .^*!HXwnh JsHU');
define('AUTH_SALT',        'nF8]-]_/:t{0tP>*_:Khb<=juL5PF!YfZ0hUUT{0L,#M4Y>O5.mu>Sedyj0N)YAf');
define('SECURE_AUTH_SALT', 'dVzhH)`iG`B$.6R<7^}MM1E_+JDPw>T4[uh[gcA*58ov[oI5v~VH#&${]ys5Pn>,');
define('LOGGED_IN_SALT',   'cB/F*K=/aHH8[~8,[&p{3j*]b;B 22Y2JY)/UP?K)5)Gu(YO[,!bSDcR(NVzZIW=');
define('NONCE_SALT',       'iUA#pN%=hBi/BANX2yjNu;Ch^i0!kN _|f,l:fn:va_Lp6>4T!Pc% kK2_sKVQGI');

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
