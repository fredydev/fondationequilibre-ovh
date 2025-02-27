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
define('DB_NAME', 'cwzlbme68');

/** MySQL database username */
define('DB_USER', 'cwzlbme68');

/** MySQL database password */
define('DB_PASSWORD', 'yCAF994tScmp');

/** MySQL hostname */
define('DB_HOST', 'cwzlbme68.mysql.db:3306');

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
define('AUTH_KEY',         'zQ0LIW2rLUlgOEZY/6FdxFQO4ElRg/ewQlnvoeQzGyC/ARCf/yGtI/LK2+7v');
define('SECURE_AUTH_KEY',  'QFOXfzqnER883g5i8mbN6NUV6DenROswiLKq4Hr6vDcMG3ExObpB3+6cJCCt');
define('LOGGED_IN_KEY',    '5O2XB8UzMQfBzHtLqjyag46fBEMMWOoQuvmoHhQZ3Yw+yDjZgCXg216Y1NaB');
define('NONCE_KEY',        'YSXXrB6/O+k0dDFTYWWfKDsuyCYlTSn+RxLnx6UWDVu0sWJNj/DAhj1v8Tvg');
define('AUTH_SALT',        'KUc0yyWRxw/MZwxnH4V5uQ2vJOIWHZVUivyFs/hS3YKiJVRURyBGpiYLhH5a');
define('SECURE_AUTH_SALT', '1/mxpFKbmfVDipR4epM/DHdGuquwnn4mUrH4Fh6Ba+k3FFy+SPxqZbJ+yw3U');
define('LOGGED_IN_SALT',   'gc7Gshp8K9YYeteaFjPrKmB5iw62vRm0trcer0o/6FmTRd+f4Mw3rysGULYS');
define('NONCE_SALT',       'rt97jBwfXmNGR/qfi0d4K0uI7j7F29yfu/pgZBYKdERLJ0w6XvAc7WtCiTGb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod391_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
