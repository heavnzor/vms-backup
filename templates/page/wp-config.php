<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'WPCACHEHOME', '/home/clients/401d7d679f340dbbad22db2798bbcc82/sites/presta.viamedo.fr/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define('DB_NAME', 'mp46d_WP671384');


/** MySQL database username */
define('DB_USER', 'mp46d_WP671384');

/** MySQL database password */
define('DB_PASSWORD', 'HORXeEZ431');

/** MySQL hostname */
define('DB_HOST', 'mp46d.myd.infomaniak.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '?K.Pk;=0=q01Gh)5}*@#AQtRMy3j`VnwmR-bn(%59d-Mz;EKcXyQLnT2u`EjJASz');
define('SECURE_AUTH_KEY',  '^Dm|^aKCvj+0gW_JS-#:./DL3I{L}Z`Swo^aT1C,)BIPDZsXb=#pAiJ(<NfZN<LN');
define('LOGGED_IN_KEY',    'sS@`OL2Ux6#H&B@t4V|Zv1A@((@qxS#6Lq|@Q~*MdsN,H3%sUg0&R9PYhGbv%0>=');
define('NONCE_KEY',        '!7_0/jHLZ7Euy=eZ.O}RYdKj<g,qy/vChW3P~*VaFu#Kou!dA3p{SQCI#<aj;=}7');
define('AUTH_SALT',        'kJSD#M/g;yT<.N.y8(,08_1MDC`1khfhbE-IxpP*k2K!u)bcg{NOV_y>7_f+AwKO');
define('SECURE_AUTH_SALT', 'c*<=#vC1u_&X9v1D9JwWk^^8+qeBCVB1*0;|X0-/2/L+E9WVX:a.Xa_%w%6;a#lp');
define('LOGGED_IN_SALT',   'q0w0|ql9|leGz7pGy|JteY`iuEXo-n5.7Xbpr63W@>N?U:*&9E`UptBr/CU7@spg');
define('NONCE_SALT',       '-KE-Ud#JxE*8MV~,9,V/B`~yD_7B?X%n4XZuFU<:#+k<am0?!HeWB/ed<4-+zoYg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_671384_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');
/**
 *Thème par défaut de WordPress MU
 *
 */
define('WP_DEFAULT_THEME', 'Twenty Twenty');
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
define('WP_DEBUG',          false);
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
