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
define( 'DB_NAME', 'roon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{*EPc0AEe`VxiMx,_O6op71fap>kL6_;MEaNFV`t3#[r>g^53[PftIAEiwTS|?/c' );
define( 'SECURE_AUTH_KEY',  'oP-|jLD$$BOLr.xcKvuD O<h)AQEoT9yK6PhW}=ZPVL!QB&+Da,d.bLcMJpx[_1w' );
define( 'LOGGED_IN_KEY',    'By5vg)Uyrv?a.n$G L!^>C4^o~*Gh/(y1VF8dP_d3}_4?Q5vDtS>S-%15- I&IJN' );
define( 'NONCE_KEY',        'y(4>)YA.rXAQ :SVy)$J::|$i]m<KWT2Q,7n+bF.G*n FFa%`b!gpc`UIF2;u4*Z' );
define( 'AUTH_SALT',        '2f,@|vE.~7qRAWYn|LHt22(_QSZ0n2M:#[GWkt.[C1tm.!;ZN5Zna(>Z&pvw@)fS' );
define( 'SECURE_AUTH_SALT', '`]EK?`5xP(s} (:,CRpz*8MkHCD{K)9=?|frz HN5<28gYq?&T5MG1~4F}!h#_(h' );
define( 'LOGGED_IN_SALT',   ')/vA@cZ}M./77WE%^PJ3fs[e.59bTN(Gv)/DBbMf||SwTU&,xrd29Gy=h2t_fKX/' );
define( 'NONCE_SALT',       'H)0bp~Y9zB? [OeAF<_V^fhpf2ulaFEy#=Z}<IOU4rhy1@RVu U)#>{O0$3Rk0Do' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
