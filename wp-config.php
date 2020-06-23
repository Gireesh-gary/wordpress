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
define('DB_NAME', 'gary_wp');

/** MySQL database username */
define('DB_USER', 'gary_wp');

/** MySQL database password */
define('DB_PASSWORD', 'gary123');

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
define('AUTH_KEY',         ';+W,aMLP=3=o(TmwMULyGw^zKW1=r(]Z3TkoTzM90;.LfBVcriR1mGT/.~v}[Q;F');
define('SECURE_AUTH_KEY',  ' |o>)>A=n-/,UV|OBbS~#{RLO)mJ<`?5JgYHsJ#.]K_RI$FQr<LveY}VBw=K(W0p');
define('LOGGED_IN_KEY',    '|N68,aLGe|80+[[steS}$R,~+`ygF^m6Fe$c(cX_B4<NC]N/[{!!l%%Vz6Y]ykKA');
define('NONCE_KEY',        '(xoS$4&Dpfps<{l@sRpKB}EYX4K=wJE`M4Ow&AI2553.J* #[@r{w ~D)g6^:28T');
define('AUTH_SALT',        'CZjnqLy&6g$+0{3!ickW%?4: I{AS%_ownM: r3rh=:q8_-%sN{3(mC),w2N g[S');
define('SECURE_AUTH_SALT', ')#Kb,&LbInz;^@XQ^GBr;DO{KHD6]sH~&.(>/KE78W:-}ZTY,}+f${|v9JDtv+.o');
define('LOGGED_IN_SALT',   'yhHsXk^}W,^-M*aC;jnZarhmb*2>4JG$Q6M>Qc*. L#cF1O+4;J[w{*hJN,}36d7');
define('NONCE_SALT',       '*A5/G$wzi^~^oCUWj#UJ.UL<>g-4zq6KX5*5a?Z:b^,vLKbf;(ooAB}23,>=t-]<');

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

