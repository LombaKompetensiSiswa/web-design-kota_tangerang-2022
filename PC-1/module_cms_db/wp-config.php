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
define( 'DB_NAME', 'module_cms_db' );

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
define( 'AUTH_KEY',         '<t<?~eeFw8y{YH?8?Sw>FfUJEM0^j{rg0V~A<yHbqAes]I<(_bIg`m81c@^a4P3Y' );
define( 'SECURE_AUTH_KEY',  '_j@M4C|(kW:@Pi6Q{) J}%*$-nUb~X(M4H*21tO> ;<./9YOV^g_|bh+uZs_G(Lp' );
define( 'LOGGED_IN_KEY',    '=c<hfh^B5altSj{4l0;y!_,-ey9$> D_WKtFg/6*PBF)W;zKZI43(=IJtoz3:2E=' );
define( 'NONCE_KEY',        '6A`zqn1pt8u_U_ V~&lJM-/23GIq6]c9Q;xh*1HG?@l$7EI~^|Y{@`RdvdCc:2To' );
define( 'AUTH_SALT',        'ky!B[!f~E!;jHFX-_Net.rB;E(>S?+z-i[2Z:)P2__@;0o)MhDhK!ZQlr3m/p}s}' );
define( 'SECURE_AUTH_SALT', 'cviAc}bgx%Z2/2Cn0E$f9p+1R34N$.K-KS!d)Cj>|td|@3Nc.}r*3nmO_z*S>ib.' );
define( 'LOGGED_IN_SALT',   'G85OftD=O;0KvAGY_&)uLcgz!qcNdLRsBIq80qnHvGw$VS72v|pGv+2kxiNq%2qg' );
define( 'NONCE_SALT',       '.0cRW[W%%Dr6}KE}Uo;q9RR9|A8,j~{{.{v}CWbp`z?Y]&.^E+i3DVqR* IQ6_lg' );

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
