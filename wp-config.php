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
define( 'DB_NAME', 'wp_db_midterm' );

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
define( 'AUTH_KEY',         'ZsU9$V!Tpj#KdD#AwYP{1(|6f%WGT+.n2!oq;{:9-Nf+Ea9%cRlY].7,19{*];f4' );
define( 'SECURE_AUTH_KEY',  '_$,E.y2[QqC*!(o.eRPtg$D~0oCNk&j)]PTp5my6N:,i>gx/>=_*7KVp|26T,Cz:' );
define( 'LOGGED_IN_KEY',    'W^cM7Mr)t>LD%uwHB rV5E:V<Gmf>paT [ sXR@hpFg9FKEqGRK<{*7w~jO~rhuR' );
define( 'NONCE_KEY',        '?g4a6%9,N/uN!w#@6O4<5- %<i<sK&Nu4));!9#D(A&iK+2|Yh$1z^TE-WFSUEd%' );
define( 'AUTH_SALT',        'w({vVmk.oT(P`1|%tU6eG.=6CR]#hy/rV-YUSk`|UYr|eBbDfSjj%-/[+!-0QFGw' );
define( 'SECURE_AUTH_SALT', '3BRi<ug9bO[Df;/{A_{$KomOaPC^=W7?]Dkjrg0xHKa2RO7%[ILDpg,8|vb{xauE' );
define( 'LOGGED_IN_SALT',   '8ySDMD0;VD7eVJRO=DcmZ8*P/TL&Oe(/kK(I9D(,X04BV[Y22Jnt#ogmdq_VSp!&' );
define( 'NONCE_SALT',       'H:{#j;Y?VES{c-1$6SH=uD8I@0kl2Dm%lICPPj ]{=iO)7L<b1_=Yk/@o_.%d){1' );

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
