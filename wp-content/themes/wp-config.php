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
define('DB_NAME', 'deb105408_wp1');

/** MySQL database username */
define('DB_USER', 'deb105408_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'TDF_Admin_Sept2015');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '4/EsqF]h`>;|T$IuyRRRiw$xu[EC4L.+Ld7N5bDc-$Pbx!;62RVynh->-Ggr@WML');
define('SECURE_AUTH_KEY',  'KBQemc/L*14jR|)8jVU|LALh`:OR>pE?T|Q.8XL9J/Y$-c+Nv%<jSu#FEa~wDnE%');
define('LOGGED_IN_KEY',    'WNebfe#iA.Nge H~:(&cI[67-!<$[eYwB6%b~`fuw|:-JZi}mc|[|a/^^q:NFiG+');
define('NONCE_KEY',        'r:Qggz6,O1dV9{FxPg+ClTT+N$(2srf!)9H?Ta,ms5B@=</(+*)M==>i21TI!`[k');
define('AUTH_SALT',        'l,yoE<y1?EH[k;Zh]de`S7#~h6se{WJZ5wrAH+--ug_J]:6~Z]~+77r{^t=xk Ly');
define('SECURE_AUTH_SALT', '?J`)kJp&dm]-/wFk<X}w~O/|^3J:Wu52s+)^Cu,fi+-lF+)c*LIztR62+h4So2pn');
define('LOGGED_IN_SALT',   'vs@!HIK*VfWt{YU|eL3z}plwB+@,XjY9:7`LC%Qc:F(.v64jF)Xl0eD#Xa)Qq{^0');
define('NONCE_SALT',       '6$Dk#;>TPOzz/KE0w?J^-?^Kc(/q#+&&p*QEHZvC3sx4>v9unP=GF+ 5CKzo^ns!');
/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
