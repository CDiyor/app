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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '2,Bn(pdrk*S,#cPbPF!Jz,R&6xE!1iu~) Qx%=Yblk0(Y}kP?HWM/sf:Bh`:wY);' );
define( 'SECURE_AUTH_KEY',   'Qs^h_tua^_!$MPEwv_^D3%ziNGL@%Sm_:%N,7?/)+if6<v(3ub/2!A,kkQ^=(df^' );
define( 'LOGGED_IN_KEY',     'iAW&hM570DAY~<<~TtTP5gM2GN=r:O~BEJ30yW2Gn(NL-O3[*vG5o=GHR<3dm6bm' );
define( 'NONCE_KEY',         'No/gQJ7`;lpdgAm;=ejY|[a8W[(1l|b+O<+gkk*tPbH-|gA<v>vteP!,kT.)Uri=' );
define( 'AUTH_SALT',         'sXtw)Qd}^|645|+gDr3Fi#DbdrQ7CY{eeh<PD%|,AF:.69wog]k/GTw,jpsZ6zwJ' );
define( 'SECURE_AUTH_SALT',  '![&pvc?R9vPTbmDCus@CS&IgJ&)SrC(!LuY[}v3V-X-aqBs.Q46-{yD?;#7NAwoV' );
define( 'LOGGED_IN_SALT',    '7+VoPgT#a_myKSBZb#m67^af:!z,.5QE K;aQi#)c>~bcrPSv13Yl3AF:tTaC(P|' );
define( 'NONCE_SALT',        '(u|nMhY[ktDxWL=kCf-Q-7p2e{FHp1WG@abzLV)E_NJd@Hl9>U?@=${R._g1UI<8' );
define( 'WP_CACHE_KEY_SALT', 'm7iZuNq}ywap $X/Uamn?GpZ85@=-eI)eibEwv%~2d/EszKu}JagL@?#9%*XJ6H|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
