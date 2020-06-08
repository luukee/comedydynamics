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
define( 'DB_NAME', 'comedydy_wp831' );

/** MySQL database username */
define( 'DB_USER', 'comedydy_wp831' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A1@S25(68p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5lddkixcidvspezt8jjcdb2gnz70tnatq6jerqn7vu1g77thvqomip6hk3qoy6xo' );
define( 'SECURE_AUTH_KEY',  'nehdpibm4x6rgaffedfqqaajlugrimkedo9ww4vnjxu6etoee9d6xt59snmdeahr' );
define( 'LOGGED_IN_KEY',    'oclpsvold1iuaaiky6uqlcejxw62cufx11xsjbc2adkeu5o8awctn8vn2qxcze0r' );
define( 'NONCE_KEY',        '0lbyghqtxotuqxxktwayhllxxmovyt6n1v8ml0ajxppxbnuhhvme1s2fp8h5d0b9' );
define( 'AUTH_SALT',        'jirh2x6iulikvzjiyoqgo7vyimhs3i5rtymhksii5cmuoz2g0rrlhlywbojk9xzw' );
define( 'SECURE_AUTH_SALT', '776oeps4uwpcb0cxycpde6pbbxsownwbrvg6ytrthfnnduvb1jqrliodotz57sih' );
define( 'LOGGED_IN_SALT',   'wd4x1pvknnoqbhtrjlldnc5aainsl1naqvgb3ccy9izxaedzbbzueoykokkjpkcp' );
define( 'NONCE_SALT',       'oucze7udjgy7wcbqtbmjhbvmzasm9nm3cgy7ek0q4lccd7lx68xwihwtlp5uqyi0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppg_';

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
define( 'WP_DEBUG', true );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'comedydynamics.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

