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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TP21-gw-db' );
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
define( 'AUTH_KEY',         'p?VE=jr=l.g^*?W#;D0,QVS.FXbBggkoi7?]E({nO%O2m X+w!me)b?RU5?v<;Lm' );
define( 'SECURE_AUTH_KEY',  'F#hWh%T]o$S)rxI-Z1x(^S`:fFp)<*2[oZ<:;moL/4MZXC&T|O=lA)Rv!>67xOcD' );
define( 'LOGGED_IN_KEY',    '-hUH,%8EaljMpr3+]3vaO4E@mP6*=(|)BO@}43*X|si/|MD@,<O*q[KARA{E %AS' );
define( 'NONCE_KEY',        'a&!sk^,P.0Gx,P3 _naw}db +C-*wpT9**K&LE)<vx4-%pJ734nJDD.+.S:SIiav' );
define( 'AUTH_SALT',        '}qSo>yLYKP6~D4o@`R;IIb~U_zmCnR?Z}BMR*:FTK_OWyEI[eiHEdlMZ=D|/0 NL' );
define( 'SECURE_AUTH_SALT', 'U%0I(.<05su>9T/kc62zF5@cM8xrQ8G&3*8HwnP+G$ce{D:j?(~ZY3!U7E];)cJw' );
define( 'LOGGED_IN_SALT',   'Aa@Dzq@CgtE;HsU!<P8l]BtT<xDg(Vf9houKRbj;Ry[~&^@.:($J?GB_Fki]A-8g' );
define( 'NONCE_SALT',       'y%LOVb,K0f2+/0Bh1|w5ZeX?u>|RKb8~9t&7U8(x9vO|bx}y2fsDy&3]v{a^CAh}' );
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);
require_once ABSPATH . 'wp-settings.php';
