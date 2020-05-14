<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('AUTH_KEY',         't16nQVn2WixVZjPIaBXGPNDUwZg4G2P7RE5d6HDDoPmsgC/4xdId02Jti+sHVHt/JWT1IPKcZiHJ4PuHXnw73Q==');
define('SECURE_AUTH_KEY',  '8V8E86cN9OLacyWxwqnoDrrWkw518XCOoBwrq9gRyn3fjhyXqcQ+WGma3n7PL71jLVEw4V3fHAMF1VP5F03pUg==');
define('LOGGED_IN_KEY',    'Azy1zermQzN9XBI415PeU6QhqvlSyvXlzQKIoUrJ+5oK/uQlqEi6nV9aJ7v2mCfaJ45Vdyx6tOvNGK1wHaKLaA==');
define('NONCE_KEY',        '5iG5QD1+7g8u3A3jQRP4PZ/Y9QtLxkjeqlfrHWef+GfVNdyh8CZ2Wh24xjSHZmBojlbNTZgZG6JsA7kW5PIRxw==');
define('AUTH_SALT',        'Jr2B/An9EDhfhmcsa1SJKINy2xn+35AE4DCJjyzYmAP0/MDzbCV7rjRWR45Fd8H6cU4wHvjoxhOxdfzpASvKAA==');
define('SECURE_AUTH_SALT', 'YS2twy991QhOPNu0qYudFmnn7FwMcZ6MWeLUIpib+Lma0tB8+BmIg3M5WPI+9Hp8rmRYNfrtExHCwVsz7kXWqQ==');
define('LOGGED_IN_SALT',   'tWLLZ7vVPVprzfKhLVSBDup9Not+1+aIE3RbjK74H9d+bN8yli1/irOxeG6dGWVP7zzVXF921GTj6JId8pAEIg==');
define('NONCE_SALT',       'KgA1kZZBI00lIsCInt930LKu8KrUffqjopapAbNUSwt9CBEO05cCVg8JIZ/OQiOgHnAuaW9TJjSd7mHC1MrXhA==');

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
