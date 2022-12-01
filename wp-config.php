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
define( 'DB_NAME', 'indumba_db' );

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
define( 'AUTH_KEY',         'wOlVzUnZ7(}4A)gPBla$uyp#d@;D=oM<VL-%sW!-1wpBMujY3)CXhV&a.*E-3/}_' );
define( 'SECURE_AUTH_KEY',  '~)VD$Fiar% q!) Q-A,6vd;dLfedFp)BEIn%`<2uF)OGuGAU^{.x?QBZ1Aw~ZPQ ' );
define( 'LOGGED_IN_KEY',    ']QHhZ}@6rr_Nc(Tn)[/dW~zYAG]Ki5.o].,[H$d2zqfQ_gD!JB~JQ5b7CuY5L}C)' );
define( 'NONCE_KEY',        '(eVMS:}b>1L<[zfld[<{A]oo|b^Y!`Z}y)}y1Tp&kiMK6&uMV3n_s&d!_^8t2{mq' );
define( 'AUTH_SALT',        'DpJ*6 wp 22E-2md.!Qi&}EMd9TXK[T=mr_mc:`q[#u;[t#z0{:CAkTj-.uU&@{?' );
define( 'SECURE_AUTH_SALT', 'QJ>/fYT,: /p`~z-UkDVUF8x8_T0QIAvM=Di.SwzJ]5kQ!oke}@#R9(Aeo7yKVvY' );
define( 'LOGGED_IN_SALT',   ',1u1&}7)`zVkoa72,iiD*6m,Ulz3q?hofmEl|hD%<04FN~|jb&TkB:b<_[6#<TFR' );
define( 'NONCE_SALT',       '9]Lv3l;>UQ$w[8qz!gB]-V7q/J6CZfpmu:2vf97L76?W?uD{+%&d(ydQD|7nLq%c' );

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
