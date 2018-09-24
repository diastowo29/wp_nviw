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
define('DB_NAME', 'diafar3_ei');

/** MySQL database username */
define('DB_USER', 'diafar3_ei');

/** MySQL database password   */
define('DB_PASSWORD', 'p9JClC15hd');

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
define('AUTH_KEY',         'W=58st=?y`n(xO!N:Y9MwpkUYX|tlTAF`6/sW$A<}.N]j^EMRY@]rV;+Bh.<Y#>B');
define('SECURE_AUTH_KEY',  '^~y=-Yp:*C*`eS;{pAu0B(T&c+c0a^e.I[1(KVgQEYd ds*aX7vUo-,=OCu[|dz?');
define('LOGGED_IN_KEY',    'TJXSj.x!iSY,3U!>Py2/MIFq{;TkH&@@2?R^eI@(;0HwLvJtPh4&^$+C}*i~)>n)');
define('NONCE_KEY',        'h7;N{S;>iNG,25/1FN}$^(v52rSWndjzA1UK:bR&u2%I2~@XnrWevxf9J/nSO~c~');
define('AUTH_SALT',        'G`.rhG*tWxxfD=ZRn1rV{1/dJ$rRRT0RGNE- s6NzxppLwcpx^Nm`4il#&p[&d~?');
define('SECURE_AUTH_SALT', 'mXGXa#w3tI8%Bh!StmFR#mS#?, },xfEHscK|=P*R2-qdvp&ynQ8c BU4FTB*a%r');
define('LOGGED_IN_SALT',   '@4L89Sk<i(+N^e4!pf`~3>4kC<ynhQYaQGiy)O7h[S@U[N}{&-}Mb@;X;6W!a}ZT');
define('NONCE_SALT',       'V)vP0Nd|0y(~/yYd@10{l$0xvkf.gsm8R[4JD6U$hHMy;r+cCnW0-.5/,V&5;PvP');

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
