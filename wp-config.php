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
define( 'DB_NAME', 'cv' );

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
define( 'AUTH_KEY',         ';~@{:i7df{e){z3w9%2/Y,m.e%x`z:bqqQMz|HMT#r^Mb&33DaJ-j&7zwQUNH:*:' );
define( 'SECURE_AUTH_KEY',  'oF%+4IVHje~s=[>_TP>v5wHIJS:=rs2n}7(8=<q/U)R*&E4Vtfl;iynCabJwhEI~' );
define( 'LOGGED_IN_KEY',    '8Hvup_H]xX/S h{U!6i:f-Ui}VM &Y+YSb<Ia2ZV{B4LVP},` 1ue57ZfKG?GP^}' );
define( 'NONCE_KEY',        'c^9ve$QCGI^kxHdDV;brw3=<FG)(j|2liCck3f=c7dsBViKnXPC1>w&vQVT?y=sW' );
define( 'AUTH_SALT',        'n@@)iG<9Z:L@$?ViW.ix>Om=?<DI|}>Z*4Ty]$]_$]xGc.Mz%~JMf6Sz]@c~~5/w' );
define( 'SECURE_AUTH_SALT', 'KfGtT ~rW/E>l>7_a^wKFbi>_D0a6wpB*?WI $?6)VUx8T%jMlupYq*a+8`Ma~b+' );
define( 'LOGGED_IN_SALT',   'X]9C{w1|j~7VcG`_48z}{kT@671hV|fbqZiVr)Ui;C7FOJoP::wP?j%){Ts_VYbK' );
define( 'NONCE_SALT',       '3dpDU6dv^>Tp3aAJl7XT8#9%keKWh_rQmG!:5_94M(tMsKz7MUz~Lk-v[hUUFHka' );

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
