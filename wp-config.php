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
define( 'DB_NAME', 'vikings' );

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
define( 'AUTH_KEY',         '/-bXnNZ$:l799G@~-&!,.VM3g`2BISq?I}|-rV^bw,tssf[YgnmkWFqg@[rwFW`g' );
define( 'SECURE_AUTH_KEY',  'N?j<bGYs#~`A-0c@abcKg|f7$WH,(/rn65XN;:leVYrEgxmOV@i2md!0({miR/h5' );
define( 'LOGGED_IN_KEY',    '4K{_I-yct1ul^n%@n`6`U+D!i7LC|1a)@6vYrVmwo7p&aGkQ/}L:k?Zlac+~+8a;' );
define( 'NONCE_KEY',        ';XQ9LM[VKi}*X6DN`qwx0R{<A2L%?F.%hT4.1T.Z}DIsR<VW(R*v! JJlK6Kmz)7' );
define( 'AUTH_SALT',        '`4T@o)8w&g.a%]G(785Z7ScKz8l4mAfR!=ak7$t>|!vHRZy8}OgK)`M+9If/3Iq8' );
define( 'SECURE_AUTH_SALT', '&1Os_.P)5s(= !frX%qx^s};_XqnzpGW;MwoK-m8xH0j6eis5TqrPKI*hRIlf(:V' );
define( 'LOGGED_IN_SALT',   'n*;avOnm+|W`Jdu[$9su(AZ)<?rNXkVbmn.CM1G1e-Hy^ZTs3yEDsD%EMsa,X>4+' );
define( 'NONCE_SALT',       'Z[PB=NX^,`O!#fMx;|^d;19F,Xkfd#AOz7 zL-FR@.C:9Y7lYz#a:E~k5)N=`Y%I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vk_';

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
