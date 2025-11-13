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
define( 'DB_NAME', 'bd_proyecto_comercio' );

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
define( 'AUTH_KEY',         '.f+}>H80KFDaRZnnxsiWZ(MAZ,$fx)aHC2PH9Er(0*7#rx^t](&hPtEJTjB<?IvK' );
define( 'SECURE_AUTH_KEY',  '*JPB,.S5){iE$zm.7NRCg~9&aQ->c@Q2L^n_5+7t<&W@~eBf}!UJJMz:3EC2C6KW' );
define( 'LOGGED_IN_KEY',    'S.229k!%fD7|Wp-,:~[+)b-2B*%/zuY=rv%VOJ|Omk8<iD-qdw[QrQ@D_UA:p~%E' );
define( 'NONCE_KEY',        '^oDj;[H.hPL@?M`=q2WcNIM@/ 19zu7Fo1Uu0J^acA?LN,b{5C<dA8fptP-<.% G' );
define( 'AUTH_SALT',        '8]]l88ibxHh.Gvqd[E5K;;-qh_swQq5YUuF?5@.hdZ,Y&SR7V083]tO#S*3vr^=]' );
define( 'SECURE_AUTH_SALT', 'U*,hGg$YIv.p*Zn!x-bgt1`LH`f$f,/!wsgH;6%YQ`q2S/`az~QAoq-?,D8RETFk' );
define( 'LOGGED_IN_SALT',   'BBQ*9inVE,PfEtA0Flpq]5<FmJDtdi->%> `#@D+I879sTZezQ+^Gw9e%ar}}AS(' );
define( 'NONCE_SALT',       ')(grGS&Yk<W|Eicd0=DWVnx528gXRhg%+m^C&cQbvA<vASPbv!O3?v9fWzm1L7QT' );

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
$table_prefix = 'comer_';

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
