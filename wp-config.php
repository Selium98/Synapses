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
define( 'DB_NAME', 'synapses_db' );

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
define( 'AUTH_KEY',         '/>o2c(7BBke-?MKnJf_MX-IFfj6:d&e~9pN(3f}Y#4if;~Qtr3Y-C2S/II5Ry&IJ' );
define( 'SECURE_AUTH_KEY',  'og/3K<hJEUocLG-ZM:4Ha(`grhLF_-Zc+wPST4PgiULw2hR;[o0v#//(Ltcjd}qv' );
define( 'LOGGED_IN_KEY',    '0w{iYZ(IIxtj9z3&Y~p|hT3!ei{0In&OZ7HCxn0(bn}8u#.M`s2q%|#a8ip+$7kT' );
define( 'NONCE_KEY',        'sy^iS0FC-^1r4[ n5.x<V0f}jqYrT@LbPH#0/e}aU?<wX)McX%1AvED1)M734Rvy' );
define( 'AUTH_SALT',        'cBSF[d>|B@Vw?Qi4#HJ.r&I!ZM(/}Ga6lBe5h.P)>Ls?ym,uC/D d$p%VfVoFl<-' );
define( 'SECURE_AUTH_SALT', '[z5MTyaE}X$7)s`u:&4IwbS~hNhmMp<ABI$207Yha&EnOyO9UH%4Vg8BH_#^f Sp' );
define( 'LOGGED_IN_SALT',   'rnxZ+ .L.^BxN{*V[9Dzv,%4w?Hvid<i(F_Bp;71sF+M-Mhf(hL(H~^0Z!v$2H*5' );
define( 'NONCE_SALT',       'AL*lrVGMa)Z@yq,orS#zU@dm6J4 a_,.?Fz>)U1#@UO6U|Q1&[l`F(,B?k?+]`fl' );

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
