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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fourniture' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':D>5}G6,muoAJ[Hq!6)C)0l:}u;%Sc)mtskz0>o4@iUb&^xCFf@HBr!O-_~!5Q`[' );
define( 'SECURE_AUTH_KEY',  'r}9iJbRBPX4T@51_{{o[HAZbHa?Mavvl^)bOy AHTz=5lL,-)S#POkslr`:Y;nXD' );
define( 'LOGGED_IN_KEY',    'PApbx_hndYFR/Q_AlA<Mj.DMd i+CihGo2WyTkP;p%Hpvn>(c[f:p}0&5z99 9Y[' );
define( 'NONCE_KEY',        'onRcePrLO.47%VE,d_;vWT.KxR{V ^RLNHT5^vI]c2R.wV|lNgV+u*2c7X4%-V2 ' );
define( 'AUTH_SALT',        '>WDhv+ Z[fw~0U*ci4l=H/P>Q03:dlriEy*KPe@qr,p{bah!a]5D[0=a=!6a`+Z1' );
define( 'SECURE_AUTH_SALT', 'Dtt}YJ>5q,  @Dftg`yzvET1nwtJ1_#u[5qcq=X].IFW/h d+D/Bv&Ox7ANeKu:Y' );
define( 'LOGGED_IN_SALT',   'VlMsX>{f:u9wS]!DOtXYm9auww6><5q;uf>C$prr{t^>]u-!TXAharr:TleQb>.+' );
define( 'NONCE_SALT',       '~I`m`0tFJn:B^6pNH (PJDZy$yT!XsO8w$Tf!zRQv&|C*)3k^Fp0T3-qsD? t8Ao' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );



