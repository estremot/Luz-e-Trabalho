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
define( 'AUTH_KEY',          '^B [E_#QW=ki1F7Z:G#8I^%ayF[zY!QZ%%nh:EC$jZqq]dHmDc5E8t)8YhS]BiA[' );
define( 'SECURE_AUTH_KEY',   'dfFjs#g!&k;L=I=t]2wq4$Rerz{)9rJ{`PICSDk0hcRf7INmgBmD(bM]KL-3mx(e' );
define( 'LOGGED_IN_KEY',     '.VY-!DrbCc(X8/i#^,&QYw#UPEyF5Y2s|XoPM9qSbe$S+{hx(MpW69f[5<e{C7mN' );
define( 'NONCE_KEY',         '`Bh;#:b4Xue`/n>dVad S(6#+^9Q,f>bF)uT@.{y6,mXd#.cul /D+H9.ZV6wpq<' );
define( 'AUTH_SALT',         'WMYV!&4ha7q/|xnfWk}]Xt7kt(8kIIP<*D%[qV+>2~fId?I.?nC4x6!`m)hKye@|' );
define( 'SECURE_AUTH_SALT',  '@-(3w`e@Q,+l_{>;xg^!~dp*N^EiklDaZS-/@1WtOGi^4wdu!zgju %rDcJ[)&=m' );
define( 'LOGGED_IN_SALT',    'Odp/;LW<CIvRjvGoHzK=+E?fOK +<m5-z-ITdAoS3))`Dw+vN@YX;yAI)LT9J+;$' );
define( 'NONCE_SALT',        'j;BqsRm@2eio0%AFPr/`Pav3+BwsROk/)Faiw@dJAlTV/<TEi 6;;AEfzCcGqAK]' );
define( 'WP_CACHE_KEY_SALT', 'F2]E/vUrEE?$CZshQPwn7VV04>$0^.zRF{.S_+oXL6G[Mjn^5dR0cJSgdBYG2}[y' );


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
