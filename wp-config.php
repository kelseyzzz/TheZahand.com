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
define('DB_NAME', 'TheZahand');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '@=@HOrgNA1JfxdYb[PjE%*3V;Nf{Y[B0Jw)jfc<+b!%{*pAfjH%zqCgjNU{imokK');
define('SECURE_AUTH_KEY',  '30o%*dZ#,6_5vM#5uSl9_3V3z#*tL$ }V_x4P/Mnv>z<m[[yy8pER;deJt|`e?Pw');
define('LOGGED_IN_KEY',    '*k:zOR-~M)==wbS;dNX6c/xPD(uBEc5,X4EEZa[Db+QG+ymby-,ABSEgf+1<JKD0');
define('NONCE_KEY',        '?g#~PZ|s5mbTn&@M2r1*t>jnHEW|W(@CC:X O~VRT7_7)z&>sYw+<),7=v=V POh');
define('AUTH_SALT',        'iToa~])3C{WmUvZ-Ma#RMp0Fa_:Bh7@Ddy.mTK}%XfQ]9fA4)^PJTM2Al&7Fk>~V');
define('SECURE_AUTH_SALT', ',;ZRA^v`<${,vDL%+B[Bm6c1d-elRC@#P|%aT{liz/LL.1aTT[qbOS>J,@}<< }~');
define('LOGGED_IN_SALT',   't^GF4paW`xF]5}Ux/@#rCZQV+p_Z:i/v0TY1W1tyCn6gc}} oJ|F)PyiH%&`?5RK');
define('NONCE_SALT',       '8jhZG1<C>Ecvcr:|Ry{sktMt/F9[3U&^|R 5YV@-~8]0O9ts7z_5Zl?uA70tj?d.');

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
