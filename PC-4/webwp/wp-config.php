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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'akunwp' );

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
define( 'AUTH_KEY',         'qpv^;.STS9pyO,Jq=16g,9~^h~^Na2yelYu4P01Se5)Y8:o&HJ4DVg&#5nSt&H9E' );
define( 'SECURE_AUTH_KEY',  'CGQdZ0bZfQ@B{`Cuer9{fK[[^xtJ|!a,`3X4Y[OU+u-C+5wZ1d1qQN6e?R$_>(qY' );
define( 'LOGGED_IN_KEY',    'Z4u@#,v]c{Tl+ukWs-E4-8j)4CyUDn>/11]#37[s!#$qP+A~$(gfp^bUA=`)p8-#' );
define( 'NONCE_KEY',        '[-]y/45E}>&SrgEmEY^(BkeqB(6;}yC1V6|b8u$.M.<NEaP=ZmqV;:osn$ZMfdtW' );
define( 'AUTH_SALT',        'mj?xyRG+YNtz+*HT%]W^r{Z3@zesLIw{9k(d,_+hx%_ztHY<PC>fvoaZr.8|Shj1' );
define( 'SECURE_AUTH_SALT', 'K)R#z|o>TK&T,[TwMM:TbhwK5KsTJzu)5BQ5fvjo6ilya1FeZ<bf%$Z Oi7n,1#I' );
define( 'LOGGED_IN_SALT',   'xAu9(p;Y00wm#%D?qN(+;7pMJ%w?}^P-YO/JOx~?|Wx:S;V#<iffBMZ`=B* ^2a5' );
define( 'NONCE_SALT',       't+@x|)mD9[6{c~Ra0X383azFX-O$ABOH7(LdrLcwqqBh+NW(NYgLHl*IHEcAZB8x' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
