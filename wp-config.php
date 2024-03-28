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
define( 'DB_NAME', 'wordpress_ecom' );

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
define( 'AUTH_KEY',         ':Dczt$>Ogf0Rs5gA0,)]$nsz+{c96ln9n$Wcg`wMk?.gZa}Pg?<pct>*]G#1NUPb' );
define( 'SECURE_AUTH_KEY',  'Zs&d,{z/,U*[)zNo!MaVMDUlOD6ruLK|<$/.@C;4n.,&L;!ojvEj+o)yDrZv!Kjl' );
define( 'LOGGED_IN_KEY',    't?,hE*F16os&MVI:]_Wq<SS)BF$Y|5;+E/ET;2rfOOW$SPQt9.O%SjuSi<&3/GY9' );
define( 'NONCE_KEY',        's<CRI`_5YW_Q)H0e&sEXe$VkS{d-$sF&(KDk#}+}Y]!s+{vE7/BTm|w*{y!Z7LG=' );
define( 'AUTH_SALT',        '&s::4W_P]zstqGiVi23hRdti=}I8IbP2m+COm5!eD874?PTZD2aVA1ua<cC&:Knq' );
define( 'SECURE_AUTH_SALT', '1~]06yvk.$>)|q:2>[3KnA&ZPB1D&DD$<SSY]JbqF,6Dz/c0wKQ~t$]vb0PymLgS' );
define( 'LOGGED_IN_SALT',   'GocJZy:sZ$3{*K$81=_|}}}r8e)T7-e;1F{ph8dt*A^V%j4?A<#iG&!bOKnok8p7' );
define( 'NONCE_SALT',       'zAb/8Rb3SHTcrbjaPIssR0NwM,4!peF0,]N>n.Q:-K|UCrYd>,yx%cPtZ2^j?0[`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ecom';

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
require_once ABSPATH . 'wp-settings.php';
