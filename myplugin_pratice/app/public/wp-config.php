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


define('AUTH_KEY',         '9eWntHc2xEeXQWntaTExDJw1W53eNfVoodBEtogk6ZntHYZ5Mbsfg+wiDPEUPemb/xK5Hiu7LAfkroAi1z+eLQ==');
define('SECURE_AUTH_KEY',  'k8n6XWPupNd8nmY+Q0bFJTryVBd2bAW7O7pTskmjR2EGmQo/1WwoujWrGKk7S85d7sRlqbAlt/eJQyskacRGLQ==');
define('LOGGED_IN_KEY',    'gpoDSPU4ggmjmM3SIIiGjk0A5BXp21nToKL5By9sKAVjt91mmYOPFSL2vy5Hg8uF9x4Ldx3mlKHjTbwOk/NOhQ==');
define('NONCE_KEY',        'ep+1jC4YLR2muhn0jASu9JPQxV/HljQmem/0yr0eYed84G/+986oB2xiLkhpkdlllqzlMkWiL3QqtiMYZxb15A==');
define('AUTH_SALT',        'C/XtA0kidfa4tHDZkHQlCDswSBQAR9STcbFYdge+oF/5J+3YN8qwh21O0hM+0l0rN+8+IsuhEn2gpCCxWDDkfw==');
define('SECURE_AUTH_SALT', '/JYv8gdmqsACWoX9DG06TdoT9adR+AJgPGCL8fym8ePvugnH+PaHo6HozdNG9XrYBGh2eV35mkcCpiwTmH1Pcg==');
define('LOGGED_IN_SALT',   'wAXfKM0C9vMjRsrNgw+o+I7sfqGAbOmSx6wDJdt5dvawkRC5fb+ljGfxQCXg8fvr3gaguaB+ra4Z6baf4LzKAQ==');
define('NONCE_SALT',       'N1dSbvJs1DdJFseByeQ5FAJwgXxRisLWHRl8E0sx9WE79KYJPIgs6WsbcPZYX23m3ii1MSsVFDtNOsRUpQWWCQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
