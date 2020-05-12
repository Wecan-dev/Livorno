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
define( 'DB_NAME', 'db_livorno' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ut5w{12`k0~.d!~?VFSa&~>IFe8Lp{vCX]O0xF$`f?4rn1$p<X_1W-s[:bm2li*,' );
define( 'SECURE_AUTH_KEY',  'R*k.83&D91~1To+(QM{m-,q0rM|Q3r?^~MY2yn@3|>FcMY<6bwE{Kg^x$OLbk&5a' );
define( 'LOGGED_IN_KEY',    '/}Xj||KF>P!DL%toeM|??Nw%3y/1rU:WHAZ5j?iM#G{vzdP}p<s>4Uen5DoGcu;X' );
define( 'NONCE_KEY',        'c.&MrwgVjf>9$pKe=n[1x<XNdKodqG50csU]r^ Em!!]7,5xKx.wJSQY)i<emWKo' );
define( 'AUTH_SALT',        '{}eG&C$FHT4PyE}gFQ@>MxuJUX2jgz@tW`N7B7H&:!Z I[lqCZl,^j3}g&z8cDo5' );
define( 'SECURE_AUTH_SALT', 'KHlQ30`m%xJb3uZWxxNEqA/)_]1WC;p~3!7H[)I8l_lrW>3`I-BTR)k~ji`lnh;M' );
define( 'LOGGED_IN_SALT',   'Fz<]<T/Dw*BHXBa[?m1T)2l2!g#2HBV]?X3;R~$Z|[iodlc1z1Bxw[H!!a`J-FL(' );
define( 'NONCE_SALT',       'B9dq2[8MF$R1AoPf I}#h1mse#6GC(8J!#?B15y}~e/P&bh3G(c,Aj6wM{B3v}.t' );

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
