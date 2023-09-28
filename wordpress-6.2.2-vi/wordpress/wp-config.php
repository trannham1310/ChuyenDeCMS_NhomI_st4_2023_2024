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
define( 'DB_NAME', 'wordpresst4' );

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
define( 'AUTH_KEY',         'eUMJu,|f8>vBvw`,QG|!k=-yf:NC(7is?!iBS&W j~QJe8-;2gCVn+$zFE[trg#2' );
define( 'SECURE_AUTH_KEY',  'Ft6=w:oIUh qi`#ROLzio<9R[)MOll9$!-mtGsdhky?8CAF@bCwN?WHW|`3BZ&-w' );
define( 'LOGGED_IN_KEY',    'u{@uLg~Tn sw9ApB:o{i+HE`IJwyxj>}-28LO;S+Fa eec1,Qfc|e1ghExkbg S(' );
define( 'NONCE_KEY',        ']_4p8pD.OklIW@-X!N*Gq~.=<:n^REN::Mxbdbd)bSwO/2mEX2V<#(@&AfW{e(.r' );
define( 'AUTH_SALT',        'jU(,FUzi,MVQ8]UQ~6-*(N9S?I%B()=a2S*v}Bmxb`B::!EBQ|=4X],l?Q%LM!i?' );
define( 'SECURE_AUTH_SALT', '=&6R-~2x :d~xNeEKr+hU g&qa9859a6|=[[gsNd:$bfIrRVZA&N2 YJ?G!&$%J@' );
define( 'LOGGED_IN_SALT',   'Y,7$/I?Yq4wkd[J8 [DNUEdKH^LNs0NK0wcr.5Y$.3o<Y3~)gM?_AhdVYA8U;PAH' );
define( 'NONCE_SALT',       'vsbKD[3 U(S?lMZ6;-Pyc|fax<aKiEOg#,DGZo7&RxcszLy ;,g$dq?>X=SFc`/c' );

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
