<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gfmcludd_wp222' );

/** MySQL database username */
define( 'DB_USER', 'gfmcludd_wp222' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm]t7S10[qp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rqpa1wvwxk6usdb0a3ui4buiy9cwukkigfjdfio6lsghzzcbvcfn5f7fnrr3zmyn' );
define( 'SECURE_AUTH_KEY',  'hteumml8ei0vgehksjmvczuymwsldznjbl5nhx2vhpeoxeubi7arg07u6wtljt8r' );
define( 'LOGGED_IN_KEY',    'hxctirasdgqdmfsghw5ykjd1oag2furhhv3cbov0jfqz8yivedva4q1go0hv5ck1' );
define( 'NONCE_KEY',        'whzyuxpobc7vk7guczl8s2aq0fh0avk0grwhduwounqcniyl1ugo5batvcz36viv' );
define( 'AUTH_SALT',        'fjgviqruspsacoogcquujkitjfmx6twuhiqz1moiidu82fhvbxospurnackvuiuz' );
define( 'SECURE_AUTH_SALT', '33yuwfy3mdrkuj78erjmcamyre3kvblnsueyauxhcz6mc3708hhsnbcaung96b5f' );
define( 'LOGGED_IN_SALT',   'tiqim6oiaajbqwjnmeaanmvjxhjgbtet5yiwebcv87zk9fjjltbnvp23rkkz5wyo' );
define( 'NONCE_SALT',       'wwpwpzgz14kmyxxnkkeoy2ooehfy2oyoslghg6vb0we12c6m9btqedjcsewezqdd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpys_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
