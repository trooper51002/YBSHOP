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
define( 'DB_NAME', 'YBSHOP_db' );

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
define( 'AUTH_KEY',         '+H}5wqg.{LkS;+D+ 6 s&aP9^G`Mxu@A=Ff<KV4QLU?eypu3d07ta6EdiAhLq$<V' );
define( 'SECURE_AUTH_KEY',  'PC.-ZEmkI ?Yz8 x0^V8z9^.2wGKCQp|P4wNE8RLL`W<cM_@4oBOcvY9|V9V_Nt~' );
define( 'LOGGED_IN_KEY',    'C[]iGBo[bP9dm]]D.EDeR$5!oOcPoV/xgFe`>+R<ZB^=)IUA_FxxX[[qH%qPz[>R' );
define( 'NONCE_KEY',        'S|JgG2BQA=g+utUo} W7XqZAn1:>+uoDf98-><`_hxzFCn4kJi~Yw+tan)f){YU=' );
define( 'AUTH_SALT',        'w,CRrqlrQzZ?5)jbM_.[#&+Ve:Lc}J@15Vvp9[,H]tT317v=9nj/J9g$TuqW>Mhg' );
define( 'SECURE_AUTH_SALT', '%|1`tY;wu-LpuE_{X=N==.?2-6tQfqPE0kEsUm<@6A.nsA~3ll>}-!xTW`,%ijF%' );
define( 'LOGGED_IN_SALT',   '(tJljAL9s1HJ)kp;PLoRk+wnA>s?E!iGBZWt,d;}n#C@Fad73P)~q_xJsz|7:PLY' );
define( 'NONCE_SALT',       'By^r|sw&Y8+S_ W2y?+QjKEX0Bh4}).@; gM[SgV,TTWzu~!15sYXGiZSY=%|2YI' );

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
