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
define('DB_NAME', 'le_red_bread');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'eC(i]qFIHGGKAV8cNLMohhGp0.}0nYZ4:9cy%|x0H4g~_Uiv!{;n>wugT]16d$bf');
define('SECURE_AUTH_KEY',  '|-!J*Za(S[_2-S-(f>xV1Fz1@pZA:h2{+RUG4CIl+W*<7V|`]ywPAOiSn^x.tgYN');
define('LOGGED_IN_KEY',    'nO<+?_0Ku&WSA?ZL)Pn1Ac$FyT$p9^$I~H|Sm8$AmiaxQ@^7PY3c-d/TT -rz-+{');
define('NONCE_KEY',        'FC40|q<&*m)+h~ia-e+|pxQGpRLnTkSuWZ@3)t5y@T(hk@]-RpANao-Y=hxKpGsy');
define('AUTH_SALT',        'h (v+cB!6CSBQZ4W1_rL(U6:]i tZf~oQxi.zd/ZFyl6p|oj5}F>;~qX-bFath/7');
define('SECURE_AUTH_SALT', 'zdTwV+^H^Xhv|6LN?Dv;jN<ZY~Z!+#et^0}TCH[!UzOOdN|K__wz+=yU{7|8u??M');
define('LOGGED_IN_SALT',   '9;*FafYGU;-I?c*Eu>+`squOJ,uk^s5b<A$-{KdRMRg-0deb^$[X2paQ5=/J|kWl');
define('NONCE_SALT',       '! dmI.$!GA,G1#HGOdBR(l6LP|,YE43lO6[4-3oBDHT_3t$rr%}z/#TmJlXa2GB/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shka98_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
