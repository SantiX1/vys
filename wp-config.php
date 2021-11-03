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
define( 'DB_NAME', 'vys' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'OJ799O_?TF|C1zzNyFuZTU<_umyuDU=nvrOnN#^yH2i-;__eLY~km^!J,d?.Y;J1' );
define( 'SECURE_AUTH_KEY',  '+,JMrS=+FaKH~Pp3`^Qp23;hCo%gOEGvG<*X6W]srQYrf6vu3vnkL)E*#alumw5Z' );
define( 'LOGGED_IN_KEY',    '_hst!S9Etp0t+m- vt|{UMH;Eo=|]WPB^`M>}HwHwDieC@A{VU hBhotj01~|2]2' );
define( 'NONCE_KEY',        'LM$#bYgZf3Yb1>hvIlTi_}9=jNOGT^ZIJ#@H :=Y[uV1im]}C?%WH<<:~Q[0xB<U' );
define( 'AUTH_SALT',        'E^dz^c!97!+sys|=~3u~^ur?<j9<.Z?^N2Z{@v4ffk}im;ZfWK]C##|vvNM|)U, ' );
define( 'SECURE_AUTH_SALT', ')3yDjonrPD<<=I4Born];uW/X]>AQe|PV_4|p*KG`(R>z[Iry>7GW,~H3D0es2M6' );
define( 'LOGGED_IN_SALT',   'O@UBLDvz6]F2)Dt5,JW!^d1o>@ 7t=:y0%E?@YQeF(,-Ul5`Oh71reO3Y*ufB9[^' );
define( 'NONCE_SALT',       '$1(gkcorvc5fR7I~f)e+4V;!HN9L_Z3?nH-[IVKJ=nc$BFIY=?VE=p#b$2=h=AKA' );

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
