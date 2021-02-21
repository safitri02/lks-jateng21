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
define( 'DB_NAME', 'wp_cms' );

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
define( 'AUTH_KEY',         'UY*R)5CqoZiUi)$SP;GYx]Ymr?7=77?u4TBBydrU(8OTW2o?&ua=novG84Sj`PPA' );
define( 'SECURE_AUTH_KEY',  'qeV|TVmm#ei3t8K_M(kStLDmLfyUdXf7)xp(bKv:=&[fsV~,-ssE$vrV}k#DXA(^' );
define( 'LOGGED_IN_KEY',    ':1]C6=IAr[P&%Ji5J9QF(Uc}%qOM!<kFx:=./ Q>^k4C%R&v[6-AUQJ4jGcYD0ED' );
define( 'NONCE_KEY',        'lht37V0Xu4!cr=o5:Hl|5xFhP`MY$eQk x.O__c.vdp%kXY ;8UC)4.M]Ofg]}J)' );
define( 'AUTH_SALT',        '0D;? ucw;T-gd/g>t nbh>9+?:xTHX[ycW8h xVMUp*c9p.d#Fc*>MO?A}I]]Z`[' );
define( 'SECURE_AUTH_SALT', 'g~#H_ns]szPt=>(c,0&ZSLX]3Fx9Xf^9Du|ujSgqA^((>%)gcfnPg^1X+G,Rv+5z' );
define( 'LOGGED_IN_SALT',   'M=k%$u#Y{[*90=*LFF8IzZK=znO*Kz3oTey]DR0qs/FNBmlWexr;{h!@.MFp<fn6' );
define( 'NONCE_SALT',       '&zM3ifRMn+W+x_.)ry-iA(6vd u3k7=Ld6XZhX_QI/x]{K$eR9>XTjo~y>dv}LvU' );

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
