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
define('DB_NAME', 'bloging');

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
define('AUTH_KEY',         'fqZlH;^<[XTCpKW491`AJR^wVz`tTr=*UZJDqAstxdc9+BCxvML0~nsU7uv%(X#r');
define('SECURE_AUTH_KEY',  'ZaqY/i|dRy>H7W,xnLG#9|rPMMloQvrG%Dnrt=sbL `Eds6 =*8eD]`HQT89%K~D');
define('LOGGED_IN_KEY',    '{ !tV_;2=E/-$D$cv+!k>wv9v#%%eO{<]*o>;@yP+ms_+y95U0)XCmh.0[bMgnc!');
define('NONCE_KEY',        'lt|Y(D2Z^AhygA&C&PjB*K>G0E=iy!npI6cZo4by|(TaiWk8AEt@)9L.Jfp5Fy-R');
define('AUTH_SALT',        '`}QA0Rhm#Md) g8`XR0U:)j6N-wXsFAzu2$H!VB;w@8qpZP)zP%NwR`P;S3i40{e');
define('SECURE_AUTH_SALT', 'MpW#xXm/58}~Jn0@/sElX%/K!D%2tmO!*8xD@,_D^`Bqg;o>peFOuLNf)?%=#^pX');
define('LOGGED_IN_SALT',   '&ZW9=pcbg:Zvhv~^)WbZIQ_#-FBM >GCw2NI[`w(^|8gnF))nE{}pw^HU#ZN8cy^');
define('NONCE_SALT',       'BqKkK=nU=omY?dC#>)#x)E_kfAj.D&PDU`j_Hjoey*^`L)3@6;uM-JP)hZDFPUV5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blg_';

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
