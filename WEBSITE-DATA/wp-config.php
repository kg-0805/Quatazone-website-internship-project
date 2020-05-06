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
define( 'DB_NAME', 'quantazo_quanta' );

/** MySQL database username */
define( 'DB_USER', 'quantazo_quanta' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vp.i2p!29S' );

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
define( 'AUTH_KEY',         'gzf8a7znhtyaialopmvmczrdzhk2txk0nyb0m0iejvs0jgllpwjo4oh4rc1elg8e' );
define( 'SECURE_AUTH_KEY',  'lpvzuclz57muwikmjvvoegvzqkzguuxyakyrytsm6absrcr18141fixl3kua2epj' );
define( 'LOGGED_IN_KEY',    'phfj95xoztoeesdzi1t3b9kisjotrqxbmofqnuxt8lozt4f3jowzskzkhddyhcyz' );
define( 'NONCE_KEY',        'epog53tqvzqbhyuzevncy86n9qkaco5rrq5injqrtiif1fnzo9nmk0vuyuvs6flu' );
define( 'AUTH_SALT',        'egkpb1cqbwmbbpfolgxoynqwrer1z0duxlrhflxnnu1vjxaaj15zfnrjcjk7e0kw' );
define( 'SECURE_AUTH_SALT', 'abba7hgfxoo27q9hxa1xyb1g2eyv9df2pa1hstlggrbuxitbmrxbgiuu5qogjwdi' );
define( 'LOGGED_IN_SALT',   'csrjf5pujttp3j6u3iohfukqhh7yw8vemoqen2jmhwry2ajkljkmiyebnloxyjuj' );
define( 'NONCE_SALT',       'bmg0ioguxe9rawqzrbazxpiu6lize9nssgdxqssq6nsubmeivr5jisozvgsepsa0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
