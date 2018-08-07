<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/kakpovi2/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'kakpovi2_wp');

/** MySQL database username */
define('DB_USER', 'kakpovi2_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Ndppcy79(');

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
define('AUTH_KEY',         'dL;m%xh|2-MYP]RZ0j%KsM_yFL]U%H|%&. z$`ro;l@{$dqNn6W{shIp#v5^LM~z');
define('SECURE_AUTH_KEY',  '3^k&JQ_v8q7]UXWj`F-Qq#vKox!4vdj$_CcQnN}rdKj`XR_N4mk@nAMkbzP%_Q7V');
define('LOGGED_IN_KEY',    ' ==4>>[G 1OJ&?cxAlyLlyOhY[0d-,~f4a[78H,l2O1f:~&EiC@/IMRl.Pc-yDIE');
define('NONCE_KEY',        '+]#-%_Q!e.,[jiFn{FNcethB;/cmnD`<x/i{Raj0*Tr}<vJ/LG-*%PSRKpFp{WV1');
define('AUTH_SALT',        '$]H7k-M/kGOTp&n]Nm#p^5Em]hfC r6-XgEM pkSC-C}]nD15pN +m=>2=.jk>!h');
define('SECURE_AUTH_SALT', '!O(!.~Vf!s*)T3;4qeJA%ABDScQn6+<t1`6sj2`bMzs9ZH0}CZc8gi}d+@VJPNT^');
define('LOGGED_IN_SALT',   ' B+PnEb/r>HA;iW*Tjw>-UiTl1K>n5+C;H|08PjJdM7B8K{x5&>VK#xpA<306aDs');
define('NONCE_SALT',       'NtU=$/ OXLQ}8`6m_K)$R{T3mVrG%wZav}<$<vu]3( ]B`(gy]^7vXpIP _wXknB');

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
