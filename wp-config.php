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
define('DB_NAME', 'hp-2018');

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
define('AUTH_KEY',         'oTT{>>-x!oI~>.!>PF9&!V1re;X1Y;WQ5B~ pVZ-Xe(HM c@S.`H[K/(*CYHKo%*');
define('SECURE_AUTH_KEY',  '?t,)u#n-8981ARE5Gf f_af{|R@gQ27yho$2|5x8EkD*SdDXJXZADH2`(t19^fQk');
define('LOGGED_IN_KEY',    'VlU~+ 9ypKZV~x6K^Vz$g1[1:1E@O{}Go$Y?cY74^e:td=o`_bP2yY Y>a8,8`xb');
define('NONCE_KEY',        'z&3iv$no@p| _3a,%ktq&}n,G<ubSU{v:M|X#X2a+~T@13.5gfKRcLpgS&wjFr_V');
define('AUTH_SALT',        '}!5y]X{ 47=1Tj@MQzN*Z<pxZ<kS^;w^U7R^@KZ6:g,~ad|j,gl}Ce)(j{>;Is-A');
define('SECURE_AUTH_SALT', '9y5Gi5_Slm|e:{z{T]wGn6B&O3nTX%O+d|l.==Zn9kQV6eWM#6k<A`r30A|/RA g');
define('LOGGED_IN_SALT',   'X6gaDA5$;;_e7ptz&Zu+A~T@8:|X5nkZdCA]y,vW<y$)R2Jbg~Ro cx5G;+w_7wr');
define('NONCE_SALT',       '3H%k3Nfva&~jXb/F>H5xo<Fx9p(.`_K/>g_?:^6Pws8`vk>0p5w%B/H0|@Xb{BxE');

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
