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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/melalv1/supersecretbanana.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'supersecretbanana_com');

/** MySQL database username */
define('DB_USER', 'supersecretbanan');

/** MySQL database password */
define('DB_PASSWORD', 'JkmiQ*qB');

/** MySQL hostname */
define('DB_HOST', 'mysql.supersecretbanana.com');

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
define('AUTH_KEY',         '1uJri(X$Af~mi+iB#bNdt$~5`zX*~;5%1ZUfgXr/rx8VLJP#i3`4%Jfz1MhVIc"m');
define('SECURE_AUTH_KEY',  'Hy!qDgXw0qJ&CvB/bMh$C^~NEvfU/L"mN@Wd2UBjMQ)yGqVp1Ti9Kf"ygF0%4c(p');
define('LOGGED_IN_KEY',    '1nA"e6n!I:eq"lo_G&5GYpT+_Xj3M@z(zoj3v0UngY`(e)nh$vXw#%*xu*6;2y|O');
define('NONCE_KEY',        '7RMm|Mv(M33|2knz6kL^LI0Tg~7$;V/Vt&_(|0^AeEa00X($/s(Akf57T8(znQtL');
define('AUTH_SALT',        '_8N:SI+ao_Ojske~1y5OOoe7f|QWKuG%sF_40cWtiNcR+dTwWXxv:j6:OiD3$mo)');
define('SECURE_AUTH_SALT', 'YH&!|+PeH7wUG1zZ9&!@RAY@bAeZ?2K#o37d+#+L1TV:wsLl)ibLjlNxoeHEqe$O');
define('LOGGED_IN_SALT',   'qf(NE/5W2A_1abut!;I8K#jCMZsBfh&el|&o~N_K1y7LlTr&QtV*M:ZT1UM_&yMU');
define('NONCE_SALT',       'Z4NL+*mqC:Ika4Gl$AtXo8JU1!rk"c2Dy"Tck?SGF3D/ovqCoBG+IdF@km:+g"P~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_3m4gtt_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

