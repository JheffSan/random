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
define( 'DB_NAME', 'random' );

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
define( 'AUTH_KEY',         'ea-H.vN,C]8E%y,(tbx(A&g1i]u<P$-Gt/#1iY6K|0#l)o4jq_Y.Jogrv$*(EYb2' );
define( 'SECURE_AUTH_KEY',  '60^qFC.W]L@K1iUeU/5-6zY*)M_iY:b;0)8G4UNO~UA1(%NBUbvjlC+H$1*_9=rp' );
define( 'LOGGED_IN_KEY',    't-S!AM{lj_1X,b|x(XgMN5DONXmHv*T}LFpL0#mjfEa(zFPrZ&VSwG8O@L-?M35,' );
define( 'NONCE_KEY',        'Y;D(?|@z&pB79Mq08p=687m6U.zP2u)xCSuL^$CJ{lFE)g0~<tqJ<Np|Mt^@lZ$~' );
define( 'AUTH_SALT',        'vY+CV$Y?nh?n|~dK1v*)x&;[aHtasr;h:8EXxJv];7~7-#hk:&i,iR{NQzJiawp.' );
define( 'SECURE_AUTH_SALT', '.%kjUJoQ[RB%FiY#$p/f4w~,1Gd`6^vYm,=m8y?f_y>qw#]:c>V0$}(fZ#U;=]_&' );
define( 'LOGGED_IN_SALT',   '{-Z?^q4PV8ed^JrlHg?O8z(c&)wID5;{?D,RM*bfQ&;,MDC4^`A3AY<*>{9]W[z^' );
define( 'NONCE_SALT',       ',a6as`QFtPsrF$J^}_:~*O8XP6!)q:$4+C]dlrZYAvcDg):a2!Og1~6&;Qt&+>69' );

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
