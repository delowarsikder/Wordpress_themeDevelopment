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
define( 'DB_NAME', 'wpLearn' );

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
define( 'AUTH_KEY',         '#US(w4UYM1}5bg/q5Kjy>L@l<jwd`+uCU-#>N%p<N^Ve9)wD9d!h2+^iL+:$]7rp' );
define( 'SECURE_AUTH_KEY',  'GZ iKtiX$i?`GnTA$dLh<jz_!ZeO~64z/yyml 72c$,6)k6DDNDF<w+ qS+KYa2N' );
define( 'LOGGED_IN_KEY',    'T7]3:VJ[%EUib9Xe.%C?Nz9U,#:EkK$/R`w0,w.T82&F/CEEH<At)a;G@sWVeYRp' );
define( 'NONCE_KEY',        'mN*P6]E%U-qat..wrLX3b)/Ez|r/W>*]O4r$zCl4(^[iE]|m9WN5Gc>Aya;e5||Q' );
define( 'AUTH_SALT',        'Y/tioB~V$k@$~cirv%kwJRfp$X{cPsN18V Wx`}y`W.d09%6PIZjG4Bo>!!{XEY7' );
define( 'SECURE_AUTH_SALT', '#CYso[laJB%yQ$GWlB(bKIo&+HryXuhj/GxaCDv}KYz%;`{UU:_NwHNe<q;1ILls' );
define( 'LOGGED_IN_SALT',   '4Kwd/;f(<HxGkbZeGI<%i{N]d|cILmCN:Y-Qop?(ykJ(vj9<|7-2lN3(]<6/`n4&' );
define( 'NONCE_SALT',       'SB^EN}wDc.4(?NG-Ua]((`)Po[=/n]te6DocoEc:HlOzA&1@1)Amomdn}CQgNyr$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_learn';

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
