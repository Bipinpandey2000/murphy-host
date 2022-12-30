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
define( 'DB_NAME', 'hosting' );

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
define( 'AUTH_KEY',         '6aojl&KVd}(i!E8]b0t+=[*2&BNSSNR#WdIW*LLgkMbv+(ub;nv!{I!Q/=ALMwed' );
define( 'SECURE_AUTH_KEY',  '&GB~y{=NuK*n+9Km E12B=/l4A;JTX^,!q8K2yf`IPJ<o#rE(%]k5`lz#B;IT#i5' );
define( 'LOGGED_IN_KEY',    'PsYz3NpQL-~Q/u))mtqB?FAGE]rQsPn=^tw7/YuIz|1OQsTVzH.jpp!n2Xu(dM?E' );
define( 'NONCE_KEY',        'sp;1Zvh{_d^VX,df!Am`H$5A69 C8rqCN|A9OG9OG^+4y~L3g#baGs73i~e9wv*a' );
define( 'AUTH_SALT',        '_mf`J1dQs&qrjXv2n,ekd3clGemN-CQVj|G^}yJ#9QR$ReoxL/NIsZ`MamE#A!%}' );
define( 'SECURE_AUTH_SALT', 'c@~vR?3m3lpq7-?M+k_;4Pv`WGQhH*1H/fA2%eQ!D_u[B 7w,.I|4)6eE87r@.Sg' );
define( 'LOGGED_IN_SALT',   '%|AR6s#+eW$u8OV5K~!kX.9?B4XsH.U=x`#)~,^f]@Kh5g5d39w~#| +AY;AetH:' );
define( 'NONCE_SALT',       '=!M><a7+7^FxN#B|h hV02qm*9?iC3+G6_ p!a>|<;DMJ(P*wbF6ec}I*^C]gZ))' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hm_';

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
