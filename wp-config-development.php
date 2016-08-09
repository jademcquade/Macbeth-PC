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
define('DB_NAME', 'macbeth');

/** MySQL database username */
define('DB_USER', 'macbeth');

/** MySQL database password */
define('DB_PASSWORD', 'mactheknife');

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
define('AUTH_KEY',         'p4#IX OMUGHa(g> A^fvaYXp_diII=gMOT+kDrkAmDp^dc)M,y_!HL?&1)5`#}|N');
define('SECURE_AUTH_KEY',  '6}}+5vH:j%8?$fR=juzfhU)?`<<9}qbb!jR:oW;fI0)MUH.v$5fPzcG6pNPV//hw');
define('LOGGED_IN_KEY',    '0k/||O.-:bPJEJhrG{Ep,~>r_*`}$!Xr.y.}(*mfRo*JA#[>i:WPlpm]jn&v,ZqL');
define('NONCE_KEY',        'q3kEkB1NEp|NF/[R.cc>iRg,-h! }>M+uQVC%XEm G;zy`=X{%@io,;L$Y6|2dDG');
define('AUTH_SALT',        'PLTnnZb;S(O|rj:K[,2sfa3y0U<X.&5N|KiSp<M%g|UoMoYZp>bWB#GqT39&z Yd');
define('SECURE_AUTH_SALT', '1ThPnree,-}c6_K( %FLcH9g3q<!qjasX$b|fdrMH6y. G%1JtYy6[}!:=D@6]99');
define('LOGGED_IN_SALT',   'WJF3d{F3}/A`nL ee9:P1DMpX-z _.Wcjx=vQ e6b:n[O2SF^Yw1>RZH&.=?rBpl');
define('NONCE_SALT',       'FW73^E}6TKkGWkSIX!_-QvJsE;-&[a;&5 OmWb>%BFV-LRuYF[48?W+F4?dYfGH;');

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
