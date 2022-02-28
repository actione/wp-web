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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n+fccYbxBAdUHhagZjjK+5jMZKrAMdWWRBTp8wWvTELXYMN8m3AxjaEpgLSfuffRb/r4yAZ1c1YYyz1hWxFJXg==');
define('SECURE_AUTH_KEY',  '/1axcaAMyUF/GLdnYtKtkBPGZZ+RFQ8whx3hJE2CAuz6pnEVblVKboJTbcGyEme51k7ublMpfPxcHNocdiBWig==');
define('LOGGED_IN_KEY',    'NhkuOwk13CjA1Lx1N/NXBVSpbloKsQDpeUkKQh0vXkeHys7lzZ0/Bs2PqhIklEoX80CawbEAQPtvuKUBMtIWRA==');
define('NONCE_KEY',        'W3wcQOcbr7MISDJiPgwIz0nlJACX0L5vYH8QrkiZ3lzj2FPrwVynydXuhboDS3jFUcnWJlf8slGRSb5cI2bs6Q==');
define('AUTH_SALT',        'k21nN8wu/mONPKZLTCfSGjSmHLvXwNEQHXkdhwujvrNqxel8TNJ7i45OBAURJf63OvEAI731OjUlUCPv59yMNw==');
define('SECURE_AUTH_SALT', 'P1gc57k8YWkIeTTv3X/Ble4a+IaBPRvdqKybGed3riFGdqfZNlvJgUTV3yNcl5ujjzO3zmT3tPU3kX7qcMO77g==');
define('LOGGED_IN_SALT',   'Ng8WONCJsTM/6/c1nSbkqZ4Z3BpW9BhDYpMzxtRmqewSDMUfB4Xc49/dJwmX8j/Ypa24eNvi521VCVlNkg9jsg==');
define('NONCE_SALT',       'PEyUaJSauVuc7fhgOqABjtlWUj9J1oJTdiMEkezX0xNQiZX5aprDPQwdyFpJr5olOX5qjb2zdSgbledpe2+2kg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
