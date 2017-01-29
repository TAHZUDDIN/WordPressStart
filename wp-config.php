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
define('DB_NAME', 'learningWordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '>NdY/jSSrW;. EIkT6jZu{b#s#FL66W8~z*ReUb8GC5F[iRNDT@Gn`}Xj{;J:;`n');
define('SECURE_AUTH_KEY',  'b&M[=qjgSkLNm>@r).=TlaA+T*e*KC^3EJ_@^=~:/F))4u5L1|,^KWOSg=.akx9-');
define('LOGGED_IN_KEY',    '{p60d9{y3D,XLg4`Vbs YktE!&!uY6y}Ij~{tOoMh;V.2C=3k[~<8iqnZ#NKk[&Y');
define('NONCE_KEY',        'lpton?:HW6ekaldAP59;e/5sFkI=AQ.Y@(CdK,} rKGPSI}bFSuK^/OFsS)K=F{+');
define('AUTH_SALT',        '1imwNL&BIo{r~V|@Di3P;DKFC-)j&aIAj`jSr08::E?KtgQ=*6C;M>omR?5cGA;W');
define('SECURE_AUTH_SALT', '<bXfHx-0%7Aun*H^h(vR]0x~suEO!)J;8at9t4bWS=Xa?VScQNCN#o`Ed-eWDcTa');
define('LOGGED_IN_SALT',   'Ug?oXZ+%MUBJ*u?PY-O{i2/}hzX$J)EvTx,`gx+R&Lgl)SjP<:0Nzw7=[n5$jFi~');
define('NONCE_SALT',       ';q8hJCV1<VFgz:6%yTVF+`p_|ts0L52<;Yl#X]_tJPqxlqax5cqeHZNIMM,{f+k]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
