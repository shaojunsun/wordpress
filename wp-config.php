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

/** avoid ftp login*/
define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'weblog');

/** MySQL database password */
define('DB_PASSWORD', 'blog=Group1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'abFb:)B%}Yz47vxOX<CH+)l9VtD&;gGx_%~J[f|R*riq7&j@@aIq-ZId2zKo#:8t');
define('SECURE_AUTH_KEY',  'xZe3v)h@35D+vy.cI!VBr0DyO}5xsA;X[<LLoGI9}Jz6oe9.U(cbZY[NxgTvAU5.');
define('LOGGED_IN_KEY',    'IT0?s)YU2V$P@ss8]0SE.1l_sbY#% 6$XaGKQvlGb$k%4N)lFn^/KC7#kuIR30t|');
define('NONCE_KEY',        '+Mls1[NaUj(hB .k$LJ=-gn,;6?QMRsZFj-=QAdyuJgq0=,<by]|dF`)P0K%TV/U');
define('AUTH_SALT',        ':=Y-H9quWy0-U-G}6 ))&m4OQ(d*ah:o3rz1@m[ nY<-;W&P@lSXG*jALS3bvn(N');
define('SECURE_AUTH_SALT', '[`2`RD/>(6! HMIpv)QP;c%5wzsd?[}sM7%s7C.b>|:Jm|4A2mB->~b{Dkv`i_S ');
define('LOGGED_IN_SALT',   'Xa%jfx?Hwm:y=KeMjFr=&Ti/ eIs*Nn9#r/C1*TK*-9-x9fsQLT^Z1[^m,S3{<1m');
define('NONCE_SALT',       'mVV5)I2J7}~FGUy=3>;LV@U(ov)ckbwiHqu1BPG!F:qJq,kdSr:Xv)mW[ 3(a*e`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
