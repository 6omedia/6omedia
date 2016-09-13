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
define('DB_NAME', '6degrees');

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
define('AUTH_KEY',         'Ec hf!C7&[o(+)`dE#5u1PWjSJjZ5.ZakC|j{<Fu1=-MOpqSkEk&clMM594[D_`3');
define('SECURE_AUTH_KEY',  'kAe@&|$q0x<*6,@=[Z`]1bI{^riGs}f)p,Ud~_qJ#n4X7IR<vz-n5Q4 /TA{qdXC');
define('LOGGED_IN_KEY',    'J`F%C8`])bHvyi,5Ij#xm(&UO/x@h)Uz|6R 3vrY^Uve^*XZJ:7rE%^;#.=8H@Kf');
define('NONCE_KEY',        'YZALm:[x;zl:uie)H$<MFF,~_|a.|$s#ddUK[mCnMM,>Hn(yI8Jw&8#$W%4hi09L');
define('AUTH_SALT',        '/(Gf)-0!k>mkN?WedcK@sva}T+}J$3Quhw-7~6yD>N=aOLEe!&iwNHNJ8!Ff=[cM');
define('SECURE_AUTH_SALT', 'A58Gm<ViXweKgm |:?H;s-a:eR3Lyr_H)H9u3PX_yhv08F=7]]:%YsZsWX]-XZoM');
define('LOGGED_IN_SALT',   'Az9|^`s{.+^]h]jQ$!CLEjUjmbYU[<bEYzr-rM{Nvv,Kx7WK75GqhC&.uBnfi8}x');
define('NONCE_SALT',       'pQb)8gIK)}$]`p1:I`m_WatT9Qh~5$H(pTpr6rnu}.F{[v1{X*5?A#rx4r,cQ>VT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'de_';

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
