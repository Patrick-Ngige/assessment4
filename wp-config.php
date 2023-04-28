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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assessment4' );

/** Database username */
define( 'DB_USER', 'assessment4' );

/** Database password */
define( 'DB_PASSWORD', 'assessment4' );

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
define( 'AUTH_KEY',         'NZec1=&-7oZ?e8]i90H+5Mn#XNEenozj=-Ul1zl6&)LNfK>cOm+Et^aE=9nk*O%}' );
define( 'SECURE_AUTH_KEY',  'oVah3g|xYx=6fQaPdk3RK`sMW~;HegM/k72vtXNXpWb=(qmtB5G#L1z$b&I?e[P$' );
define( 'LOGGED_IN_KEY',    'xWCL89zQvhf>$]ZU Yp@L=M3(=tS&Y`1 -B7}f=rD-X)`L Eu}(m,WnkP%uG*28&' );
define( 'NONCE_KEY',        '=JA:)FB?wiU.#?9$U+aD]^`1vXq51YZTDnoDMRL-kE1b(%{H,)vJ2{M8zX1VVWa=' );
define( 'AUTH_SALT',        'Eb)R?7,)i7}Y7GTp0*XQW0]]JC0_u/ C}7,XBRo(=USYKz$~Vn]Q]*EjCgk_Utv@' );
define( 'SECURE_AUTH_SALT', 'Axs,4no0]%_i,q.x1R`R$n(vV>Xy5j984[ebEdNYFdGe_;m0XY@2R~8}<=YfSEt5' );
define( 'LOGGED_IN_SALT',   'ILUWf}D|:$(X|{r|YCF0O$=7Rm.9@^O$JlJfyTv:8(v1gO@X9;4#&i3-Ef]LkG.*' );
define( 'NONCE_SALT',       ' >w}pnNJI&dHE91$yrX_/VOMU%D9?I{Du Z*+S{$VMv)?~E/I$l&z0!3X*VxYnS&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
