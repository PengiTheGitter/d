<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'singlesite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y>v$yc:kt<xP&OUmHsxZ?7_*jP14bhc|qPo62Pd@9OGv~$11[u}dxE8&I.J^~Zp~');
define('SECURE_AUTH_KEY',  'T&=pT?Ewj-R%I~r{L5U7[NhJ^HIr+}[vg9)/QLWI0~68[oSA&?67f@vFXT&)mE9<');
define('LOGGED_IN_KEY',    '2Pf8T7jR(TzW5vXpNvqywjYxj`wPd.7$}eutl1;1:; G~^T`>d&WxcMUJio)6D1(');
define('NONCE_KEY',        '5`ji[~F+x dEgTee+T.b-IjVE+]9 `e#e#rBE3H[Mz|XmC$0>[[Z]CG;}-PO=&*F');
define('AUTH_SALT',        '7~ivfS>n;D1Yo}N%~uA}r$z=;|)&YMFP7;7#; 6l!VwNX::| fY`@.bUmHw1:Uk)');
define('SECURE_AUTH_SALT', 'nH-0IQy47{*OwmRs!/ s;q..z|;/c{VhcY:UK;L 5,oYh}vg]8@i=>~,+Bk&,J{f');
define('LOGGED_IN_SALT',   '>;#l(m;BsDS(/hvIKFBvtY3`*Q(s479(S)!HoMI6gy2uf=<SdTwMS*Fksd(v;;CF');
define('NONCE_SALT',       '>cC>NqQiz,f6qtM_|sb68tQfz`pX(%O(o%Xs:P?V6!?q#{=THJZS!*Bz>_:GlkM(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
