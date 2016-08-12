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
define('DB_NAME', 'techmarbleswordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a');

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
define('AUTH_KEY',         'U+|lS/IK7oJARrLfw@G>;RPCO~|.#j`zRaOX@}V DV xyGBvsEH/J8wg*#ZMj~L9');
define('SECURE_AUTH_KEY',  't=%r(Iw>Yg aIDC(hnhOsa# CN+d4_6:{hX]^.865q0k}XH~s_sV|+KOV78-LHJE');
define('LOGGED_IN_KEY',    '1G!]pq?gR=,aEwS}g0M7^dF:VHI28u;mf-a}A9b4,/<K4lH1=<>E$!*zPE9Q9(y?');
define('NONCE_KEY',        '}=Tj9HbF5Kh@H#Uk+z/.h$E]aOf&np[!~2Xp_PXt+jKxePx}TR>+|-||Cg+$wYAG');
define('AUTH_SALT',        'C-!iktS@SfK4*TrxOR!8_w]q[of!dP5xn5X/N8>cynx_$=Yuh_,YHtxH>.2u,AK`');
define('SECURE_AUTH_SALT', 'STM[?+?+i-=?4Z]58-Sz!mP5Ls+hV?|dG,)|KB&1SE< @u`p%mweWGvnxB?u;784');
define('LOGGED_IN_SALT',   'Z;3Cm:Nn7@M<E.==V%yd4Ua-}CvRm^PX0TQFurX+|/D4E2`Vy6W=B9jL38K,lJ1 ');
define('NONCE_SALT',       'Vt1jyt]TEH,prBx$!|pLwHeZY){1L ShNWdXt/uvlE:uX[No~IkV#fNYx;y8z1wS');

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

