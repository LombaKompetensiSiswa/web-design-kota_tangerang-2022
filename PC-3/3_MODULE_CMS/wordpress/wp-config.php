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
define( 'DB_NAME', 'module_cms_db' );

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
define( 'AUTH_KEY',         '<Ke41h9FS!ET+OeX1RmBQei,isJn>KkVtB_!xK;oSVWU=`/*-ehNs.96$+#mu!ce' );
define( 'SECURE_AUTH_KEY',  '(woGFU`%RpDpw4YEs,Lc-,,;H`u^Z]x|RDL71q, 0Xd|ZiiU_?F4.X%]f1sSF@I<' );
define( 'LOGGED_IN_KEY',    '+;v@s*>&$yr=p8m/n4W(1-?~-Eh)y}J~~YPMC{u[@?7Mh^`7mU-[@8XWZ!*Usx.%' );
define( 'NONCE_KEY',        'FyO.=w18K;> X;.e}]mzCPH dD,fQl8*?_Z DZ[JV&gMn*;oiPS6T*<X_$Hb#qy]' );
define( 'AUTH_SALT',        '>=qVg!|YR:U[a~arJNlUpG@-7D;Evo,Te<l05UB^%2?({{a+zq}T>u)e,fBefwPW' );
define( 'SECURE_AUTH_SALT', 'a*K@zc)u%4XP<-Upmy;FD&XgK3h |!oXEO;4$`3y@$YWX?n6gTc`6UYKBG)mO;>@' );
define( 'LOGGED_IN_SALT',   'g,Tq|Rp[;6_9] VuQRssdX5?[([~1_-V]j}@MN r-BER5H!kY:0adNR`{w:YrWl(' );
define( 'NONCE_SALT',       '$Z>1K7eU>,.qmwor]%A.$Pc`g+Kq99a~,vX7qLDu:N xkB($[|R(lYLPc{DJH$g.' );

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
