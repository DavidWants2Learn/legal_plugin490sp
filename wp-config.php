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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'DavidWants2Learn');

/** MySQL database password */
define('DB_PASSWORD', 'Hydroxide08@^');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',py]C9PD;% *HY2b(yi>r3:++I@0lnddC+;|[*|oTr$sX+f~(+:j4Lg)jsR@})0+');
define('SECURE_AUTH_KEY',  'Pl;<qoQ&G#T`D$kW4]&H3f.pDgXt|ktSv%;bx2J$&PL0;Wzw/{:p^a+2+ }J[mco');
define('LOGGED_IN_KEY',    'jznFh#e6pWsh!}=oe,Q7N] $^ble_Qrsj$y-2UY~Ht}$?ZG.<h0/K^c$Q#-8*eGW');
define('NONCE_KEY',        '|cX,TMOcoRnxCA[^*d;wWKQzv0-VI0 `F7~8$Hutuul&|PX2/Q+bFn$25&OI{6,b');
define('AUTH_SALT',        'CSOqF~,8:$$~ja0:qrfbr;?vWyZqEV.~mTv,i&7+a&x{-tZ4pBrUUBR{6dBb*Z#`');
define('SECURE_AUTH_SALT', '`otgF#$d >bSL~V|x&u<@K)/sYrEkGPx+0MUH5COxSMNySB^^qM+x#D9u|*+WGA*');
define('LOGGED_IN_SALT',   '<d~t+pTt&-[Hc?M~LXPpNU?{8Y0e0jrg|Y<6?,e?I<_f=C4)W5I>5zhm-s*pw@J/');
define('NONCE_SALT',       '%>Qs/:xB+/|R;&I|}r_pd>` O^X(kAl{7fK3.M{PT9t#e/|iY~J+CzK.y7&bu wG');


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
