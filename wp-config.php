<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'efuel' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J8a1W(`fJ1b+YUa|IO34I]4_+F]DXH+FT+N.*JV]K?xgRmWy+*`c(zk50-yQ(-Q$');
define('SECURE_AUTH_KEY',  'y&3&igB=K&Zz{E[6x6>S{l*RZ=s;`v-s60&I|I_^O1WcyH$?U ZjT~YYZ)Y|R]-l');
define('LOGGED_IN_KEY',    'EfDyK|hB?r-qT}+FK^$4g(3wYdX`k|WJu=n}PYXtp+![tn/Q,2j]:/LUH-b!Db}d');
define('NONCE_KEY',        'Fh[lds{S<<]^,bARk7RZ@H,^z ]jf|f<1|.5C2>mEj@K9q%w3-W$qi|^-j5E:Yp-');
define('AUTH_SALT',        'w--LI$(j#[+-vmoe?$h2j]=/|6[IL)t$u@-QfqSKI*0wFnv-[@Du|{oIUjUaPcsz');
define('SECURE_AUTH_SALT', '-Balm/)sFWpKT@WvbF+YtfV_$}(AW7CZlgAg$MLcXWLHN>2(POp]XE-4>#YC;,oF');
define('LOGGED_IN_SALT',   'PDgwQ_R]xGyS8+5VgADeH=+QE=u_p aiIX=>!V8.O<6I9zo.5.V}^ydMCe:~=6S-');
define('NONCE_SALT',       'cW~(}s=SexA(!Y(/fDrc5}=<CmCn1THUSx}-X{akBn;~eIta>|-6o^?weaQP2p~[');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
