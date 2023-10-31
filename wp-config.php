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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'talhadb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '<E>5) B7XUwr=^- Qyqudl& Jb;QX9<S KVAK8O/V^*Q:0-|G3iUA.@PoFyOjC8}' );
define( 'SECURE_AUTH_KEY',  '_uKv8On<KM$R.d17q>8%vAMp1{#Sdz#!WUy/!bv=[aMeH>]2Glp{c?LNVhAi!LWw' );
define( 'LOGGED_IN_KEY',    '`>/%)Tk;IC{m(E:C*LEk`_r3<[8 Imk0Wi .Lm]iaEQ]o (|ugVNquczH(eg:Gob' );
define( 'NONCE_KEY',        'Psh^ $>T3M+doG_PFY&r=P&pu9;4P~+mlC3fUQH,g($7}ubuK/{q9U X@XZ5F&_+' );
define( 'AUTH_SALT',        '@f?DMA^0U((7_%qjJ,u8^F%J%)1C!`*.d,<Mc4?S8O=dzHaG~h[I6QWO}zY3dBX>' );
define( 'SECURE_AUTH_SALT', 'zGI;@4$aJhH H@WM66zcyDUV%@b32a9QCoo9!1cG~B7,Mj%#_.-!SFdA{pq2f?Bi' );
define( 'LOGGED_IN_SALT',   ')^t`]CTO+<29XPHi=N)=u5L@(gg!JL.b@@pF_}r8Guz Rp)UjJs^]9|c_$|J.%SX' );
define( 'NONCE_SALT',       '4%?csJi=-kly[W/:v|<.A>%gc:*g](K3S9M]D];HN%_FTF38.;lR! p#p`m5{#!=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
