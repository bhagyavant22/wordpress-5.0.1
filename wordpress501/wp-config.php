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
define('DB_NAME', 'wordpress501');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E?cX+-o/Ivcsu/,Y>yD^]B!;jX&),4{(QRkz:jwVsQMRAKl`j@j8WRqu+&#bl0dP');
define('SECURE_AUTH_KEY',  'YRPqJ0Rv]D|Gl;mH)fU8kI<TUqZEQVqBoi!NR{]CZ!ihk2ClAlu%m~rJ-%5aRw>E');
define('LOGGED_IN_KEY',    '_uykL?TRqIz2 Hnk ,(nY@NJx2DFr&-GIXm?WJ+sD#AQ8q~]3#2Kp6~ihX{Vo)Gi');
define('NONCE_KEY',        'r9T=S/yTrhjMF0 +-kOi%6R *Ip4S5NJ/E;_x%s.ehsLci5`6ll1U>=WY}0@c;sp');
define('AUTH_SALT',        'rQ7UIi>EwNdQ?4n*iI.|lv=GtNcO/i%gu#BIw(]nzo1+!qn7$wg$d]f3*l@+kAk1');
define('SECURE_AUTH_SALT', '?B,yD/uR3do(tUk*m`&P,RD}j*Cu@lik-PGj!{uq`.+?r z%mxoF&oyBNbM<dr}D');
define('LOGGED_IN_SALT',   '+6V!W3Jf3(<!^$|x-JE%0chm4aZ9:nI)ZCgnK_>8VT*It2uZ^)c^bcbH[E?Ibyt(');
define('NONCE_SALT',       '_->iVx4UGuX|*NBL+A6N]32<j<2$ AyoOuLUn3CC4SlAE5Y2 hP%tjY|z!@(pgrv');

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
