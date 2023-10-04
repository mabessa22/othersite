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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '0wf%;hkD1hknXA]2/P9@rT,R533#z8%DPuy8^ C-7>[P%NpG1cR;ko6(_y![#_V9' );
define( 'SECURE_AUTH_KEY',  'j88Grh?/sg#c h1[B, !vHbau@EDf)SxsG>R%OU<z[F`q,b9ok9CFPXQ hhXqkz=' );
define( 'LOGGED_IN_KEY',    'NyZ:Fl(y@sZz);ZKAilXOaF)EDcf`;!yHeD,?FZIv{<pqgRjX`Z8`OC6S?6|l-w|' );
define( 'NONCE_KEY',        'Fhb=au)<|CXoo!#4ur?*p_ 0.wSM.s9iBN_~RmKg%h>p~h-bvn~gA6,Fqx1_uFEe' );
define( 'AUTH_SALT',        'X&kXtuoJ2E?b7l#_t:8bx]Qz%#a=x)]l.K}w724sylh.k?q.BIh>~WVZIMe0.#&f' );
define( 'SECURE_AUTH_SALT', 'WpE}g1MdRT l)*e>`2&;&kOL<*gWwa$5vnz9RRPmb3Z(xxiHbIbGNwfoVF)J1r{q' );
define( 'LOGGED_IN_SALT',   'lOTO;`Z4*Cy6,9O$H&sqR3W5&|Ig^1?_R7|Y#wivx:<ugZAF,b@xNR:cy=xB3}%H' );
define( 'NONCE_SALT',       '~f(ZC4MZ2.-GKBlrDy(dD@uT6|qhy7^[T!ZiV.B<U&?Eo7GK~@oG,4uFt*AAzV=Y' );

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
