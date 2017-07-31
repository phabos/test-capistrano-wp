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

define('SITE_CONFIG_PATH', ABSPATH . 'wp-config/');

require_once(SITE_CONFIG_PATH . 'wp-options.php');
require_once(SITE_CONFIG_PATH . 'db-settings.php');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/o(`$8MdVWQF{>r~dbnlrlO%+|Ggi1y4nOE7F2l{7T$fuhnu&mXpsi!cHF21H:(n');
define('SECURE_AUTH_KEY',  '3u]TK(y&-d/Dpo .5pTHU-ZZ|0rU  MW$5B<)GEQt#`CdSi.kDo^%_!G`I[E^si6');
define('LOGGED_IN_KEY',    'Bz*=-aB_s?:MP%Ah!q9ytN@5WQJ>|1#h+3IaCuIZ:KR8oNymx<tNc&JfYJbGdyxf');
define('NONCE_KEY',        'F^E|29-w<OMCuxeum`7K2NOf10<#^0J0k*9ez-:k1e9te*.J^:}I~dJ @#{*VIP=');
define('AUTH_SALT',        '=qe(/]AY|Awg1>=`,6%`w FTXFy_PlcAt+jz0w)9Z#%K+Df<#vqgTD&Id8RK.X)Q');
define('SECURE_AUTH_SALT', 'F}q6iBh7|^6E@Q_YX;$EN|Vm{sdkq{pHhC]:-c;o5eCrbLHDI@hSs?Tqv1VbDhRJ');
define('LOGGED_IN_SALT',   '[O(5a2aw^iW$i# +>qq{dph*nN`6bo#{]d(a:RtLkb_FCWm&kd|x>iAD-~A`($mq');
define('NONCE_SALT',       'XA|p_t$Jw(}h%~Ii@K4y;2jkeMdwJzEuV<v%s:]@|&-Ej1h1]NKEuv]jf eOf**8');

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

