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
define( 'DB_NAME', 'local_wordpress_test_env' );

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
define( 'AUTH_KEY',         '&1jHKec6rtxv9F47gzBQg!%c+: Q O5A~4NL$h:ffhnaz*Zy_y;*oB0!vdkrAQkN' );
define( 'SECURE_AUTH_KEY',  '[{I::a._P.%Q:br/p}=*R4%1{{]bhvxM&2=$Vav:^oEuLp+J?b)Y&)6a;*rMbGh/' );
define( 'LOGGED_IN_KEY',    '`8X:6vd3_I(zV4%Wn[aEAXs((9=,x-A|8m3CnF:^d3]3s9%=]_YWvcix_BlMoX~N' );
define( 'NONCE_KEY',        '(LIbVtGo&e9Eq{X:o.d]kJ|,X7z#)px^i%_dQv1.1LiGH4>KZ=5->`$:DX0jrIES' );
define( 'AUTH_SALT',        'uZ<m5(Zyy+%qd<lPR=Vi4a!9g6_~)3@0M+Vr&G@6AXK+)0eBArK)6[}V@Z4PAbl ' );
define( 'SECURE_AUTH_SALT', '~J{ea@M2<[89X8%E^Y0b7(Oy@XkqerF,#:s#Fz<oA8`?]=L~BB7FtxmMHo<49]t[' );
define( 'LOGGED_IN_SALT',   '@?DZfx[yD!o 8(+/7Oeq)6]:=g(AN/ReNB:Cz3N&.uS^(e|$)q*[;@lA=42Z=WB%' );
define( 'NONCE_SALT',       'HB|@wB}hP=*&<z_4mT:p]4IRa1MfoLI[y(`E8g`}%p@`eayIx8&w=~cY8Vs38+<e' );

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
