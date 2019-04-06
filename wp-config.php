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
define( 'DB_NAME', 'garadmaal' );

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
define( 'AUTH_KEY',         '_OhVpizqErU,I0=;dr^dgTT]O{Kpm#NI{O&}Y`M/j;|zEhHP=u %fYQ!:-L{rg78' );
define( 'SECURE_AUTH_KEY',  '8-.bPfz-qTV]0Il1<K?6st80u+4u7~}Kh&xp!b}7/Ws&J.BMv!Y+N@K!HkuUwoxR' );
define( 'LOGGED_IN_KEY',    'rRzTOsJrWznt6/fDFOu_|^uIgj;TOrdFY/-v0e36X#SKx<hw45QCc|l>VoEw*xF%' );
define( 'NONCE_KEY',        '>JhS^[ZI=Iu6yCy30}TUh>Uzit5`|=@OdB}7=Ie6)``MO&Fx^t?$Yf=A/[0P|-c ' );
define( 'AUTH_SALT',        'm2}+D8PhZ!2mq/z|oIH/W)WX=@rb%*6tWjL%@JMNRz|:wW96g._4e&.V>q}hZ8C6' );
define( 'SECURE_AUTH_SALT', '/%+><1hT]2D.$0[W!-UK/Dl0XD2/@++oY2r=z#DXfyqYu8K7|@mW2|*zH5pA89a5' );
define( 'LOGGED_IN_SALT',   'W<5$dXOajU.[~|)qa{f.v-p(/lSarzLWR%tMrg8M6/RefCABTp:0%#FST_H,rRZ*' );
define( 'NONCE_SALT',       'JVpU@=ZHrB9d!LuTNku,^.<Y?oKs}b _ERDf8Mh$kk]3h2aLyoHYdDkZ)d7K-KKv' );

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
