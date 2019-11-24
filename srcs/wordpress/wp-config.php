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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'padmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-hL@9?db`/HTd(<wt(@4sg>{0IQZPq;xLL/=df-j5V1fU?!GI%xH8(q(J*CueY)m');
define('SECURE_AUTH_KEY',  '<bNHQbHEQmD-H<=S<tx1w=>>cbU(/~GCTAq$U,_G5lo|b(.Ytd<-~&_cv!BZb]yN');
define('LOGGED_IN_KEY',    'rj;6>~EBuu-Z~hJ;jm-c#$*IIFRC.xM]#)RvOTDdby_|:7r5-D4d=2+!>zM-q]y(');
define('NONCE_KEY',        '+# lw4Klp+XMw|K5Ot%3^=0@T$Ypuw--qq[ueoqs%;#*huJMj@ll/:d>b7&X)TAn');
define('AUTH_SALT',        'g+KPb#m1|?7CE])fW;H+d:FpP`l(S|B-yk|9Rg34P>o>ml+CJvN 47f(4mPCe{VD');
define('SECURE_AUTH_SALT', '~]$r7,;J]yq+4C;9y@K{NIVy <M|ru$+-vDTel(Fdz#0sj`.qzzCa9n/%71Q0Gcx');
define('LOGGED_IN_SALT',   'DM^~N5yQ{8~a+%pb.$Zo!HHhr?)X~e0v#&T+}.hTyZMDXFp?%|!z[#2W<4]q6~=<');
define('NONCE_SALT',       '`zL+3{/jb93OJP?&cN7X64TgN~]MBl_R0f#EUlrA Eb@:^V2x-qQBjUeZ_8hV|gu');

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
