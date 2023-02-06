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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nusantara' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ERiO9MhdMYz3l(o$B`XFq0|V1Z-3`C55Jd|)-cPlVT&$]=SN5laLye`7Nj{yTWBm' );
define( 'SECURE_AUTH_KEY',  '4|[3.F^.@W%myR&!=hZFpDs>fzhf{F@gC)8a{Mc2E~|CtMs_4qw1urcF8c@MrJwy' );
define( 'LOGGED_IN_KEY',    'KuZrum|oYYG^N*R8dKSsWrmuV0wNeKZ5z-o9rwx]H5p6^(-<Qau|I&=/_)6 GOyW' );
define( 'NONCE_KEY',        '`-,GX~~)_k A6~xpEJSCHy:m]7bvcs$FPOSteQP9v%%*{1,.h8 kz7=OLYt1[%S:' );
define( 'AUTH_SALT',        '4*;tn0.#:/q5)Kkzo^ugZaPlFC}5O?c%W_L@.=:2v9FCqWC0)a%+cS`i+m^hlkrW' );
define( 'SECURE_AUTH_SALT', '5Jn>yr8.+@[h w,J|t=EujB%*Sk`T7b!F=D3%(%|@_xaVY&[EKu[WBQ4WQx5.6.b' );
define( 'LOGGED_IN_SALT',   'B|uuo8h^,(Y+vw!O~i,O0(ctV^uzFRH=GJjuoBq*C=5*Ntt/Db~MG]aKHqb%UM4)' );
define( 'NONCE_SALT',       '816tVnKbj<@4{-a6:}`~l*-8K(f/=E%NZB04c62DK::n?@U9u&.T26x9*4[:nyIv' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
