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
define( 'DB_NAME', 'wordpress_new' );

/** MySQL database username */
define( 'DB_USER', 'aditya' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mongoose' );

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
define( 'AUTH_KEY',         'UU.q,q`]GB/!u{8a1JZTbeu5InAmX@jWIua?10}*WGpYu8]S#]^^z5m]2mcOS%y ' );
define( 'SECURE_AUTH_KEY',  'bcXA7N%36i-&QbqJy+s??S66P(1J!d=~InH.itTUB}/b&P0>m-u&x9evxOatC?bc' );
define( 'LOGGED_IN_KEY',    'Q3M BX]iW;HH7WD&5C_bIcuJ/Sn3M!j8R$`FFq$vJttmw(=%A$5MK)4Pq_o1]Qn%' );
define( 'NONCE_KEY',        'vn>fRl:5$F(d@3MSk>{(cT%((v^:d<.KB#x(!7y{Ky~]BEu;`KGo:JDie<^&Y>1$' );
define( 'AUTH_SALT',        'R#~*lRxy!|2<ys/$AZ+QZR!t<xjx*.GA49Fjjh/8!DWF/qKULq29QglW%?Qye5y6' );
define( 'SECURE_AUTH_SALT', 'WiH <KCD~~<BQCw:H#!D:sWxzv|Ra.F|3%pAAk34^,q8{ lKH~4sN4yl*dZ(0 wK' );
define( 'LOGGED_IN_SALT',   'C|&:NdXx6GIn6 o3Sbe<Qzc[|bbE~9#eVB_(~nl|PN7XLQQlo/Y rph:xBR)[4?]' );
define( 'NONCE_SALT',       'Q3L$O^74a8~lq#b:l&x8UM0bVvbtBv,yrCNhz4_a!}B7/{{1s,Ldkr}l}ab~|W;E' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
