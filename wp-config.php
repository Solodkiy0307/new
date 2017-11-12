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
define('DB_NAME', 'solodkiy');

/** MySQL database username */
define('DB_USER', 'solodkiy');

/** MySQL database password */
define('DB_PASSWORD', 'ssik88kissAAA');

/** MySQL hostname */
define('DB_HOST', 'mysql.zzz.com.ua');

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
define('AUTH_KEY',         'a9/$7T:WAx6@7m7ydo%7 =,9C-2t@H??Z.zNKBeh;Iq;xTy]G:XVi~V#CtSUQ@7#');
define('SECURE_AUTH_KEY',  ':zS)nO}DMvkd42H.%TK<dC/3DM!vs-$f2V9*%_EUW9#:PJd:ze;rk_WIg0p=3e)3');
define('LOGGED_IN_KEY',    'bdx~ql!w4<)UGvAwC0=/aJHme`Q>Ay37>=%W!X?J>(pmmlYsYrHB^#D}KMr6|ro?');
define('NONCE_KEY',        '|NxGtw_6^F^])u9yho}p;<+*h8+{Q>zequEQb5 7YVuwNTok*cnqv+{}Ys?Z^T6x');
define('AUTH_SALT',        'c)S15qd]v7Vi-/Wjo$}j-J(z%uN;a, tpLdMDHI=-zF.&>.ojwcF<bI4zv v.<An');
define('SECURE_AUTH_SALT', 'o/Z:I9i[]GqL`T8R}GeEk]isRsm8lJ~{6FEBLS%ZpgeY+fHdZQIMkNZJv]u5YlPS');
define('LOGGED_IN_SALT',   'wW/B-_]?n_fW#l98vsi{E<$!dxfS@h*2+L3J*EtP}GOtDa{=$*t6 lVPy3@k~8[[');
define('NONCE_SALT',       '>d#C<>0rhNO9y|$Idw5hb&d4[sU 81Hb=bwXAkct,tb8mx8UifY@d?RWtIpH#G|a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('FS_METHOD', 'direct');
$GLOBALS['_wp_filesystem_direct_method'] = 'relaxed_ownership';


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
