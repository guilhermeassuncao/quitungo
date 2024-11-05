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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$]NdkW~Ej4E6KEJitQjnVn(1D/ ocLdU^C)!)(Kx4^W1`h_Wkr>wF/+ztJ)oJ+{f' );
define( 'SECURE_AUTH_KEY',   '/}&3d_zK1LXJtIK^(2L>=:QfVLfb*v&E%A2d#GF>svC^@@{3(df8FdVdx>bmDfV^' );
define( 'LOGGED_IN_KEY',     'Gf[]U+1rO`/2R/QVL6a*p*Cl769e(Iy.B]3:cDtny0c.}zd~_J:Dj>)0M!RKe6_Y' );
define( 'NONCE_KEY',         ';;dAWzf[ReG_r=4E[_u$ ([2oz@<1qcp:#`uZP#QY+XMx~T=~c5BX^P6SCA^dtW!' );
define( 'AUTH_SALT',         'dI:WlZ0D0=HENk_Z^fiu(^ya3@vm^57BOX5O+(pLza*qE0~fd7l7+Cg6*wLno#>R' );
define( 'SECURE_AUTH_SALT',  'rTpfP:C,6qW@aVK0hFGsGwe_az>DrWO9&-rF:>_J!SQ3}z>P%ictfAS1kCiQzCB]' );
define( 'LOGGED_IN_SALT',    'tKW4K[1Owtd[LdHwf6zp/GYA15U`(YqISfz,ak2u#s>ELu<7T^v1ZRRs`,.|V*E9' );
define( 'NONCE_SALT',        '+{h ]*.E^>A%o<owQ{CaU~grYIrz3`kT2lfIM0Z|K3;Go2#?nNq}NyR-4Y)qbKnR' );
define( 'WP_CACHE_KEY_SALT', 'fYx0*SUgG`O*h%s,*.^0|A5rlJegn]hKL>/fi-gtyT0:p(;?M@]nfVJi$t.<sQM_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
