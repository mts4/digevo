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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         'W00khU&8 Wp/62I?i~%JLq#Y?(Dtu21oS)`2v+lfQqq,Ved1s$74iYt]kUmiQfl*' );
define( 'SECURE_AUTH_KEY',  'nS~/1!7R}LAt|;4|xWHDR&%;v]S1j!MBWbh^{<Q ZIAgG9S@7-yOYILg$AZz9d6S' );
define( 'LOGGED_IN_KEY',    'iKA/iDn=K{v/@F925/6C-du3kI|^~F8zCu5T1h`3`-DLO-mqhM/<s4ys&7#$uJ5t' );
define( 'NONCE_KEY',        ':+|xPp;^s<Y{K8^1]r4v>E&Z (,=jD^2,63WI,TbbJ(t]{j$B3ux6`$<nvo{c?$i' );
define( 'AUTH_SALT',        'lWfy.H3?b?A?JU<`@GwM3I/;QZ#(?!{o9&[<ZB!mmP`/FQz*JpV0!bR7mLhueU0m' );
define( 'SECURE_AUTH_SALT', '3VQF[0X[xmwP!KanT?UpIB5tf>3DQG0U_?VF2H,{jjF^fbDs?^yrdlM1pitWUi!I' );
define( 'LOGGED_IN_SALT',   '_+BN]JVsxa.|__[rb4ugQx V[&V8itX9#!:dUzjyH@oiqohJJ7c)kXU_A-x:L19g' );
define( 'NONCE_SALT',       'B>ebX[WZ 4D&<q5Zy/IJdqgMj#MKZ(9W0<YA],HoF{bhVz(5]iCSzl:xuX~6XC5e' );

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
