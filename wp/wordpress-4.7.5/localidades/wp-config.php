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
define('DB_NAME', 'db_wordpress');

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
define('AUTH_KEY',         'Cf7nj_?B_#h}{H5BopqgX6vWg1U&GnTL2v0>I0e1:e>(w>=!|9}(Yn9R77Xa#aY=');
define('SECURE_AUTH_KEY',  'YZb1?hONxS2]dk>I,N0MW}ASF`oWEn)R[@^lW3/JCs$vvZuy46Oi3|:xDLuzrAiQ');
define('LOGGED_IN_KEY',    'Zez6ywZA_ve+P*d3q;5G`x`bADpDv53]Fn21!h#W_(<*,8;3HF*eG6#!GM&xlE*o');
define('NONCE_KEY',        'H`?!.@d~2: x1n)i7n-yn#VHc`&6|xHX@{X_vq%`7,y}s`ro|nH[(Czfk,k(QqEK');
define('AUTH_SALT',        'bcvrdN7~Fq/9L2(XlN,B]NoYR#U@b`^{*Ax;#`d(L4:+rugQNh%CV^vU$Z_F y=4');
define('SECURE_AUTH_SALT', 'c=$iWuAUv^oi{:D9]NqG=mC?W@4FrDn1m^~d>(6B=<Dou1M1xuwr,?1 PTdQ2jq2');
define('LOGGED_IN_SALT',   'm%+_O+tnR$@sJW[f?=LZ&5Zz5 5JBcOF[Ek.+/Ls^$HI&AH|=L6XU}^yncFUM%|g');
define('NONCE_SALT',       'Schd]/UJoBAu}el4/LwY!RVc];) xAG5O:!{vf3eAGa 0|A%~&/b:3jGRN+#vG4C');

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
