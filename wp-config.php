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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testWP33_db' );

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
define( 'AUTH_KEY',         'S~p_rS*AW/TqR)`TS-%:# ~uZ_D0g:IfACrU{47zw&VjPLxXv2i/`3(sk>tpEKSq' );
define( 'SECURE_AUTH_KEY',  '#0>Z~*y_$(: G?Zs8!hTEBk0zZ_.eSJFS.- #cUf@9_ZYEu,~62TPy_%Yg|+6Q7C' );
define( 'LOGGED_IN_KEY',    'Uu#=qS1kH{xZ&};Iey1KvDJxQ.n$gR Fn}+&QnTFMkq+L$4jGK-5$d4NlV3rIOOP' );
define( 'NONCE_KEY',        ' aiao 9L1t-BiV2WJ}!:E2X4X>umH(SIK4Oi4#bSJt;,N$Is[Y6N(|1BueiI4:g=' );
define( 'AUTH_SALT',        'eUChk^{A}Q{fO7gD$[N~8(t];8<Cfl$7#V#oG?u%9-<8(iBsKY{]j|0o,Ls/6fJ5' );
define( 'SECURE_AUTH_SALT', 'Ibk3(T7h-n`Qu_}N|3A5xlT4E&o/l4F5Mo#=uC-0GpqCynCyy2O@/AsY&ue`#NoZ' );
define( 'LOGGED_IN_SALT',   'M1j>BX;1Xs_V-wr`jlIB2#ED4kan@A-9.$4Gx*HD($O%Yge0u3*S7KR%MJanY5-p' );
define( 'NONCE_SALT',       'b_?~ARq}3}{)9z<:qzipnNW$SaU)hG>ZA=juAx7/#a~~wEgP!jD.qiISHd?u@J)K' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
