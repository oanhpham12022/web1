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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web1' );

/** Database username */
define( 'DB_USER', 'web1' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '(?1VW10owE^y,2NM5,#eXAQ75j0*syfr1I65)T6Mq(}IFL3woW=EGf~)A2i@S&Y>' );
define( 'SECURE_AUTH_KEY',  '=)4B8is98&B5GpZxDIgZ/Pq%p;KJhBhWRmQrL;Gkvw0#9C>|aY } W^H$ +S8Lm*' );
define( 'LOGGED_IN_KEY',    '4L^bRyF?dZqS1vB5sEXG,5uZUo6Y?9U=#}4|`23rq7<ZK36##~gSc$zY~Z/J?6z ' );
define( 'NONCE_KEY',        '5WZA 9{.k~zi*/P#=t,yJQ$v |1]+V~]`E>~p#Lsb!JXv,=LULyk[}TL21qf:-Mu' );
define( 'AUTH_SALT',        'Oi`+xD<b,FU=We@SWv V Ge^N0{;31cHpIdLDwO[1|jlyu6~egto2>*`yfWXUoP`' );
define( 'SECURE_AUTH_SALT', 'eMLw~1sgUnyGQ01H2IF#wm}3B}32OKS;_R7z<MdRh47dYL+{W_BjmN#c JOioW/b' );
define( 'LOGGED_IN_SALT',   '^|q);,+gf`_pyZ6oC#qL{e/B!R$|0d}%K*9f{K3*Y0KnOi?3&?bGb*oS?9s{d!n3' );
define( 'NONCE_SALT',       'AQZ2)I(Ms/Jj>-RxWcI?-J`X]*&7v W[Kk!4Vc~!-b6WFt!Hf/Nx~49+8_bLBoxV' );

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
