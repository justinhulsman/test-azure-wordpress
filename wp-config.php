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
define('DB_NAME', 'test-azure-wordpress');

/** MySQL database username */
define('DB_USER', 'justin@test-mysql-server');

/** MySQL database password */
define('DB_PASSWORD', 'S3cur3P4ss!@#');

/** MySQL hostname */
define('DB_HOST', 'test-mysql-server.mysql.database.azure.com');

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
define('AUTH_KEY',         '/rX~FT.Y^;=xV-^pw++B/_/($o|EL,l#8xG5QZN]b*ZXzwSXsBO@tuL@97@u>}&I');
define('SECURE_AUTH_KEY',  'Hag`-8e>6N,]f~exzHd65kBo1/fU},6&Aa77D@V%@d[/:5sDbC@6t@sr++mt~>Q4');
define('LOGGED_IN_KEY',    '=?_/5]w1KA{BbY{QWJeK;E$T<N$mWCN_VcHjq+[n-]$3t-~Uh!rTG:}|GL)Zi6~4');
define('NONCE_KEY',        '#nhNEqWv[)hBFxW`=qT5wXv~EdL>fY@o&G(#u]x3L6k{2I>|m/(cl-K;HL+.on+a');
define('AUTH_SALT',        'gJ%<+r45DC BEv*/aF{AO.j)x]a+-.Gc=B@K<7nwGE2YW/4+7f)Nm}<,H|dk)~7*');
define('SECURE_AUTH_SALT', '<B~8~]8JxI~w/<#9rYb?7$zx1iAo@3Y,QNh4#@nUy@5j&p&E3$ tNMx_#@:=_m[+');
define('LOGGED_IN_SALT',   'QX`c$x<(367n?^}+SV?[Qo@B|P*zF|Gg.6SrkVAGjlSJ}[VdqNk&Sk,`NHQ?n8Wk');
define('NONCE_SALT',       'EN8#?A92D`pQTT|<zTG: rbi`BxyG&#f+J@.$H-Y0@Up}0?q|U>8@IntMuZBtZ~W');

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
