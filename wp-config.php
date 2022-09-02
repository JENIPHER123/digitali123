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
define( 'DB_NAME', 'digitali' );

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
define( 'AUTH_KEY',         'vtyS~+p<Z<S{6!0R#{a;(Bskgjxzpza`[%YAaIJ:BhT-7I,|o:]-nf }&c :]e:Z' );
define( 'SECURE_AUTH_KEY',  'I}Q;=i,cH6BGqI6~D>#wGY?v:w]6^[Eo2R.F% K0v,Z! (JJqTNE!RlrltyQq:z.' );
define( 'LOGGED_IN_KEY',    'XGg!XBv@ijCakg1XSlP{39eS)l7oO/W}|JJ0/1$DHK,n9->508]vrO%5c{i%O&Kb' );
define( 'NONCE_KEY',        'Z37`^]-;QKpO|w%UC_IXEm{Bx3UK;JX~1l%Q+]|.D6{4!x2&bI[nXF}F<_s}7st,' );
define( 'AUTH_SALT',        'JO3YkM8}XN!cIFD}c4dT~t_>/Or5fqTk0#`_}> 1a0anc<uA[8J%.eW2-nP[T#6J' );
define( 'SECURE_AUTH_SALT', 'Y%gDG*fcm%G.+U6[?dL%9lC4D+428GoGJ:)Z|5Xp[iqi^;YgrTY|sG,;yMNoFxG.' );
define( 'LOGGED_IN_SALT',   'Q]VxgM{kk- s|)+8>5C8TaMsRfbFC-nRuJ3U.zX%PCZBQKOd`A2oGusSUQ`c<,ZR' );
define( 'NONCE_SALT',       'T }~].n++]kGee>WfN^Q@r5O:#wD%#{=fM?0wLIw}nJ;d*$SIshyNRFf6l^POe_]' );

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
