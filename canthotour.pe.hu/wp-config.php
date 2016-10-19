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
define('DB_NAME', 'u743600956_csdl');

/** MySQL database username */
define('DB_USER', 'u743600956_root');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.vn');

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
define('AUTH_KEY',         '`LG?U(#iG._BhI4moZ7ue(9,Qm1=JcU_2(^&D?p]Q^Ui[Q@&rK7HF;kJj8.2ybqR');
define('SECURE_AUTH_KEY',  '.mXRLuS|M|{&mRa9MbXB%<fg;GD;<jdyp76@cM*~et9=dOw*m4LF#j?j> ujU=%U');
define('LOGGED_IN_KEY',    ';NOts_6}_M_Tj83j/ZYh1L*?zXb:bWH[D(d>8sK-_PifZ|HG|WeX!a1(0^(Qd6U ');
define('NONCE_KEY',        '4z1DRdIobw4[[3{&ov`h9gv3=sB1q6}N)B;)bs.19c<Xak<NpQC u3W+#vInB@V9');
define('AUTH_SALT',        'F[F V i4+a5:T2A^%3V}~le&P|YL#`(l=}qFOox,v~@*Ucib R2/5D`^%WtSW9N5');
define('SECURE_AUTH_SALT', '|Im Yat*W5osU SF*$I/s9O1@QZVA&^s?=diCY$sZKUzJ%HwCz^t<mCLh+plwVli');
define('LOGGED_IN_SALT',   '9}pK>5/O(dm1~{(}P=azOU]ad4puu +9S%:94nbB7FL#O&iKG3(s^Kw-p,S.8dWt');
define('NONCE_SALT',       '>o~}tsx-4Xp`a+_fzE:v8ipp;q 8]xu}GMes67y^PoaU#kI%W3oO:.b<kvEFiC6;');

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
