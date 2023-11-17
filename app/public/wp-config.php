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


define('AUTH_KEY',         'rIQY7PFOPxNN9MTncGlBx8+s+lG1bqAMKhJAWTw7fzUE7zhj8mcHkGJwK/OucCN0b6EHlAls3zkzXWiZqFjPBA==');
define('SECURE_AUTH_KEY',  'ceiwC8unVFD7XqV/bMdGFp4rm1/FwQ3Xg1ui+e94fgFLZn71ecu1fmxKJSfyHfA647NetNyBxsbV5cl5cBRz+w==');
define('LOGGED_IN_KEY',    'C4ou25sAilzTilVLxHgAVbKL5kumv6d3Ho6fT4XiMh7Fxn34en7F2xQcMEEf4kCuWgkgmka4YXbSJDKbBAtHOw==');
define('NONCE_KEY',        '57334hjZK1ze7m+lpLnTxWMSnvqGFPGkjqhkBWKS5mASdGOnOyWFm6rD55DDGIo2zzR4Iiei5qHpk26GmkTlcw==');
define('AUTH_SALT',        'lJFUVnf5YNwWBN1p+vfERkLHrGDVHlYn7UBZQf/HHDgRV9UFLm4dsx3EfE2yPKzPALOlMv2+X/aFwwRmoOW2XQ==');
define('SECURE_AUTH_SALT', 'qpBXs4bHV3Mpv+cgRRYyauzJs4CaFpzRvLdZaXYASYWez6tBfw5jaxhnS1PSEGccBQA0d3GcgYOxJo/u4VASJA==');
define('LOGGED_IN_SALT',   'GcAqotW6lm1ArmBZ0MxEa/6Vx/n6MSpSd0K5LNVCoWO/vZIhduTj9CZ5Nms9Su3Iuaau6pCqTky42bjcWtiDpw==');
define('NONCE_SALT',       '06EjBv6VIB1Hj9f7DA4KlCvUbKBQtdEC6uZeqxWXKKqme+kvKw4ZJlZvzXqAV2hUFHnCt9IPajg+HyYaxNNqAA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
