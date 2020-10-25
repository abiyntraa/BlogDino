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
define( 'DB_NAME', 'blogdino123' );

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
define( 'AUTH_KEY',         's^Z3:UZY7k#IzQ%2Mm7kwAnw6+l4A9]H4p,jt2A#KU#:iWf<7uQ+=xj*#qWhjYzh' );
define( 'SECURE_AUTH_KEY',  'k1;g}9)iGey?jS7O52sgq]5@`6.SQMc#ynJ%^+L_N5g/Q2]%Im9z=^v<{u:xJu*X' );
define( 'LOGGED_IN_KEY',    '-C@R Fi*D]oPD=XFPl3SjHFKHDg|Hy0EcEFL9.(pd.#J,pab{U]x)1<8KzhTYC-8' );
define( 'NONCE_KEY',        'cY(V8HuVf2ZZm89FHmnWyk9hf=H=ja;%<}4hy(9J}>ljZuiw#+SNp3jH>2}%k<N#' );
define( 'AUTH_SALT',        '5h5hp}h$S<28;K$34$TJNrIgSvUUjUW$AZl)XbY$qSSnl)y$L>@UOjc;)p%2HKY<' );
define( 'SECURE_AUTH_SALT', 'M$nFr{ 2<P;nfsZ|T!pfobA18c|cW*A;l]Q1r`YrL9SM]<7{Tq3A+p(.lF?pz+&3' );
define( 'LOGGED_IN_SALT',   '*:@2RzeU+,Ye):Px1Ehoe(<dA;z^~G&UJ w=[9*QzF7Wu_y{v^xXa8q04z^,fZpB' );
define( 'NONCE_SALT',       'A0Kl-<HWHR>;P4y;l[NVIfn.5|E,rZPl2YMO1*>&&/Q[])[1_*K@p=`7QOe{?yC4' );

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
