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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         '8Yr@ViP}+pF. f5N{w!5=uotM3j|;uP26qc50>;boB!I4{#mnvQ!^ZDcZ;S3 )JP' );
define( 'SECURE_AUTH_KEY',  '`WTvtbQ/~PRuguG6<9(w_3o_gkt^Lto`I/,n{ xzMU,G6;uaUk[^8W/`q6OJ}.[K' );
define( 'LOGGED_IN_KEY',    'zk$U>sKY$Ec&M+nl{.0z1SQvc;HR-Y%]{WtA]%n?FAP!tr#+k_;JGGDug{84eCBe' );
define( 'NONCE_KEY',        'F8V9m,$Bu,{bW}yv4z@!#8NS;1UZ$6UrZ6h<fVGBBU;)b8[^}4#`,!yi}jC=jE4x' );
define( 'AUTH_SALT',        '?5_s}dw2q;:f&TzYE$3i`h~(6}v|_CHn8u.hYY+nIV*>g2-X=b3_Iioa@tWV#wf_' );
define( 'SECURE_AUTH_SALT', 'Bxj5D@X>.5}Kpxs_]SP{JgW4Y;$sXP]s~C~(5PCqK=r;E/|1Bm4swo4r96[[Gh3(' );
define( 'LOGGED_IN_SALT',   'q0!+<!)yX_7Z|<eH2mlrJLFUIE&U#.Pq+t@t=XF93Ehv%$ xAQ-Z@~+OrxcC%5O;' );
define( 'NONCE_SALT',       '_}xkiD2x3UM#Ru]5)-_4D&Y4Nmk_QhXL$Bd>k/f4VMo2]~oV~%O/C|QJ]eJep^u?' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
