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
define('AUTH_KEY',         'XP85J4VL5qPgLKco3EQUy2NUEH5m6IZorJZvuR04LD1NL9G7heNrbcVIkU361I5b');
define('SECURE_AUTH_KEY',  'BOVcXvnq5CY6W0VebtEHQwhC8WNcC1vaFPDZSiqAxyyg76CxrvQEsCJiHBtnAu2v');
define('LOGGED_IN_KEY',    'cUJR6uRVKf6IEeVcJlkPQgV3tySdR8pCSbgfQMT6v1Wizuuo03QstCrjoyYiju2c');
define('NONCE_KEY',        'x95EgytU4xD16VwdWQfRwQL6FZLgU0zffMdG0Hp6jGEoM6pxcLRhARpzwukbHhLV');
define('AUTH_SALT',        'zw253Z3HppiodWQZ6Wbs3M5CAgIepUK6Dt4RITkdFkTClqLB5WnZSwTxNnch9pfD');
define('SECURE_AUTH_SALT', 'Eooc6MezzSriYeBQsmtxpzlJAy7oJeRv75Ai0bJ9phSwczaJwrrIhROMRaxvHG3t');
define('LOGGED_IN_SALT',   'HprssKNckS5Zo8ue3xJIcA2HUfNFIkRrQYP4QzVfvvBgT9BOGMbjMGXHC3M7KKsy');
define('NONCE_SALT',       'Q6s6WW8jyl61JEefkigLXElu1fYemGyIARkksQyYDE3refVrgmZeCyf3z4pbszLa');

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
