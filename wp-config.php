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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

if ($_SERVER['SERVER_NAME'] == "sem3valgfageksamen.local") {
	define('DB_NAME', 'local');

	/** Database username */
	define('DB_USER', 'root');

	/** Database password */
	define('DB_PASSWORD', 'root');

	/** Database hostname */
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'amalieandreasen_comvalgfagseksamen');

	/** Database username */
	define('DB_USER', 'amalieandreasen_comvalgfagseksamen');

	/** Database password */
	define('DB_PASSWORD', ' Gruppe3kode');

	/** Database hostname */
	define('DB_HOST', 'amalieandreasen.com.mysql');
}

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          'Hb(]7t}<<j&7l!l&;N(6#`J[!FDRK/|taJ=RziNv]K)j!L-R6[k%mQn-DGPW/C^#');
define('SECURE_AUTH_KEY',   ')oJpEat9&|+@|{{Nyf>#H<_SkAV y6`7+|Fb$cb5F6~pjGAqV0L{!DbTEql~f83*');
define('LOGGED_IN_KEY',     'Zj2$A/lb X.}|frr{$R64R[n%|$0R/r,&0q0rAWOZi8{-<.@B%N{sei|v`<d9yMX');
define('NONCE_KEY',         '<BdAcjvu8 >~*AmhdTBvYHaPN`/~3)p{]dI+LMRT&jolj3*AJa%<K;cm8U)8F5-#');
define('AUTH_SALT',         ':T?Q3Y6re_Iv#0>f(15wc YmPtkMjypf5/VRC%JU 9v$Iv1b.LYS2L|im~0+3[2+');
define('SECURE_AUTH_SALT',  'l`Wf[gu4$]+<p)2#tBq|BQj!Wp~YFv9lc4,{zsEO|6I6)$*;06a6q/GMJ2]SHR#u');
define('LOGGED_IN_SALT',    '*Gy8ns{a~{;m*NYWN;g*(Nwd PD),RL&z6^yEd9g6loF9V2?RM(iOC.q^#~TBqs5');
define('NONCE_SALT',        'IHzwHRo:q}Fg*DjtnZFJMo`U)/g|<%!?3:+B4[/WNX8kw;Y08}<d0]dCpqnjokwn');
define('WP_CACHE_KEY_SALT', '89-]=<qEv7lYm2ZM>qq8*wR3*LVQ_asX>Xr$TzbXyf;o9PGg8k%E_vctB>n<w?Cw');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
