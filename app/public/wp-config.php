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
define( 'AUTH_KEY',          '5Z{z[4&=3+sI1Sz}O(T2S_Yqn>,LVW?<_Y{a#-5>Xnk-QJT=H3F%?tL~fP A&]@#' );
define( 'SECURE_AUTH_KEY',   '_h#?iWoyU,`7`WJe/H4}H$;tu<OhxloIH0ca],jlSh]6P~R[d*dk|(D2Hn<U<->g' );
define( 'LOGGED_IN_KEY',     'wD}]hO*Wmn<p#SxOh,f}p`Hxsf|w(Z[F-ENGi4zzDj>SBQffXkcK[[R1-&M``s33' );
define( 'NONCE_KEY',         'o(onXJDbN8f!xpO6$+~i+G#RZzVS>V:/ soV>dG2+wgz2w<Gq+o[lhJ#v0LeNW$~' );
define( 'AUTH_SALT',         '^#f<1#>3`b]oAcgxBKp-a:{{_pM{>K>QUe!CIv31xY/IL9HL 0>!rxlRi;?+>>:Y' );
define( 'SECURE_AUTH_SALT',  '49Z04W[iXM=)Gw5gmuidar,L3|/|3%,mx``O>+gj&Q?k:<Z.0XSOU=N:So`K%Ah3' );
define( 'LOGGED_IN_SALT',    ' C9k0!,AS9n.fV*`=do N&psZY)PI4x|Rs44=trh:RgRJ|@w; >HPq#_optS7.oU' );
define( 'NONCE_SALT',        'mBRwc]7S]t0;j#TEc`KQC6^bcQ#5rJ<=o|h1[h.) Cthq[1Q@$3PmkxmiZ{RWHlc' );
define( 'WP_CACHE_KEY_SALT', '4F-E<NQ!y>P|)Y#gev:o`(Q?,BQi%bw8iJ@~,Oj~Eo6oUzta!@WofHt$^jzW8_rE' );


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
