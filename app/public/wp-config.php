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
define('AUTH_KEY',         'xsnGlKJ1f7KAPDiPY0Htl0thO/I1ncjawUM6UO+7GLkCEZ/5Tj7zM/b6x8NW8heoBBx40b+0+ulbJO5wne/fdA==');
define('SECURE_AUTH_KEY',  'Rjux00odAn8keC/CsoBLTXW5/oyBt8vIf0PD51EyJmKgEyL04HmoVGe8ibBBJNGBHh+U68kTfmhcoAV9vCzO+A==');
define('LOGGED_IN_KEY',    'ScBWXQ8Dxrvx2kCkT/G6UIhCw83+0lCbzPcXFpv16vHIQjwWOnyl1zf1o7zy0NjMtoPGi/7zA+lNHfBxfb2xfA==');
define('NONCE_KEY',        'Kh+IG3t5sDtlE/DYhIQQSz1cMaYSPeQnNOZ6iiVp8Oylk3Lw3WCa7SXsICi489HNLxmGohRNe335PNasDgcwjA==');
define('AUTH_SALT',        'mUUY+4Rx7UjJmxE5pyWGC4u1wfAOf9Hxs5IUE7bHCzE1q7RWssBL65mmCInn+rV4OfctdiCNaTJZsCxbWJQRyw==');
define('SECURE_AUTH_SALT', 'Zzyd1p32DLy1nY0fU00/s7nb1YnA6XLmluKE2YUP2cILpCoJUlVoXTAkV9/gDCFyKNI6N1yPKdsqSLyY65r9uA==');
define('LOGGED_IN_SALT',   'reYm95UVwUydTSimmh2jZX1J12kcx61G1ioDnJg5LZm2+KfIgjdWSwB9KsSRz2I8VptNq2K1sE4tXtU2+/pUgw==');
define('NONCE_SALT',       'vr8/vCMVqbxAU2HxqpMRV8KAgJ5HvrpigxKoJC7tcoW14m2yu7zLD2preij2emriSSGw37Lgv3i0gcfiFBWQwQ==');

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
