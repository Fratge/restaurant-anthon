<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'restaurant_anthon' );

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
define( 'AUTH_KEY',         '9SKB;P~/=w$78(X~EJyZJC= t;U/T4<Yda8rAt?ioeYEKP{m%CR)yZkeFW~$^m|W' );
define( 'SECURE_AUTH_KEY',  '/.[(sY-l]#o6)b@bnFe4t#nTUY1R;}3wAb{9UxtSml9QH0b;hX:n_!L%3R!B`}Nj' );
define( 'LOGGED_IN_KEY',    '00Fskm^<N#S&{h0gE6^xq=W}1phj8OJh#zCk#@W{j.+@j+Y2dul:/ wiOb``#Rda' );
define( 'NONCE_KEY',        '@81i)()Vu:LWI7r=E%wK9xE+OT4Cudi-0?i]VlUBC;eq%qLtin?7lK^L6,=_q{:b' );
define( 'AUTH_SALT',        'rLf}_=IO,nnZu=(SX<(wj|y^8sh<%HWa-?s@PQhN5iq|:^^H!kdGk:b-U.li1+MS' );
define( 'SECURE_AUTH_SALT', 'e!N<jf+FdEDaGBJCfA5AOzgyNZ,qXGRR;Iybw PmJ33J<lcYA(ip%YVA;cIR=inS' );
define( 'LOGGED_IN_SALT',   'Ge2V=@uj~!UM1N>mYi+=JN9doFC,A? emXP?2U6gIBbjH_0ZRi.w<@I.Pa*Eu%B*' );
define( 'NONCE_SALT',       'J2^:$!;0ZE;~+ZBR=@j?@|h%B6.Sl{$?BG# y@yG[G}v3IT8Z@Ym^/pGkhz81wn{' );



/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
