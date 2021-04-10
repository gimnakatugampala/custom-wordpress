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
define( 'DB_NAME', 'wordpress_dev' );

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
define( 'AUTH_KEY',         'jp&$TFanof=W?sek+%Jgfbq=X<TsYh09y]?8i&[$iaB5mwJYPYUDmlabAGdZ&KE8' );
define( 'SECURE_AUTH_KEY',  '-?;5s!;-&0r~3j7eqw42*Wz22!6@<*#Q`%;1]{.ZfD-1 JfuMrNrL5btt3Q(5;yF' );
define( 'LOGGED_IN_KEY',    'x4M<q(/H2fK+$.x%)?.*W^3/-6S#<B`S5w1-#]/5sv^C]XPpqHI-P|_%*T/wuL%0' );
define( 'NONCE_KEY',        'kYCVb5 u]N!$m;zyIQR(%0_L=K1OYoCPIi0]HE&qB|6OD|:>1!}SIN-zgn`5mhIQ' );
define( 'AUTH_SALT',        'n$5r&;oY!)pIS:<4.#Z=fs3wJw1EoJ:ZD>qphXxG2>]p} OBonXUI9$WUJ_$6/4)' );
define( 'SECURE_AUTH_SALT', 'QFl0C$@u|*}f78A&g$VP(R$OCQsr.M!PS_*)5n.oA?tJ~TrFu![@(kFv3Xr~>s%+' );
define( 'LOGGED_IN_SALT',   'ce&Yv&A!:/~SR>(~8n.@E E&*gZMk{%FHEY!|fvf6Jk6wMkBj;JU?+{rdqCOCH~N' );
define( 'NONCE_SALT',       'Trj~N-w|F)Bw_2U/GhzB ^z*78`<P&Opl:tK9ouR!uVG1DdjyoxSE-hh?A&s@Nd%' );

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
