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
define( 'DB_NAME', 'EpicStudio' );

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
define( 'AUTH_KEY',         'q<bqeE.cuxm%k@u]~-bPpTR^-]MPr%z#C[h[dx5]m7MhFx*@jd[F1S;4lF>#@.f=' );
define( 'SECURE_AUTH_KEY',  'h}oSWC.!.Tkb(%[~v}f9mNcU52M&q&jKSPy0 :Qm-PG$m6aC@{!DdA0(N~,ISq$`' );
define( 'LOGGED_IN_KEY',    'l9|>BQf>d*70F:oRd{/Gu`FIH~0k9w!Hc3^N-Z.tAg=x+%=L`H,mA u^w23AB4DV' );
define( 'NONCE_KEY',        'htYb[7j| 7cRy4);*Ed:i%a2N>X%Tz<vI%&R)btgD4&=/b pTtb0@FY)lXIF8rF$' );
define( 'AUTH_SALT',        'qK*vej}-or7o1Ir@9Nf%t+R=ORx?G-BD).DM(XW+}]:)%U;(M8~q]}U`eK&Y(?fG' );
define( 'SECURE_AUTH_SALT', 'k*>@i>>!U A^wzHS^.JXhZc~Eo#t,g>SrpnAV1/-Ypd`k)BGd(F|K<(@7q7J-o?h' );
define( 'LOGGED_IN_SALT',   'jY7;dRM~Zr5O( _/qurs/xv!-N;=v<^N?cXcJt{PLj[t<Hdpv)1Gl$U4Fxy~ [<l' );
define( 'NONCE_SALT',       'vygz$ _3v1c2k~!@*.tn/l&0.c0G@y%v:;RPA3kz#:TLkwO.kOVLC?fPF_~m;jAi' );

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
