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
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'wordpress');
/** MySQL database password */
define('DB_PASSWORD', 'wordpress');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// ** frock81.wordpress settings ** //
/** Home location **/
define('WP_HOME', 'http://wp17.local');
/** Core files location **/
define('WP_SITEURL', 'http://wp17.local');
/** Disable WordPress Auto Updates **/
 define('AUTOMATIC_UPDATER_DISABLED', false);
/** Disable WordPress Core Updates */
define('WP_AUTO_UPDATE_CORE', true);
/** Language. */
define ('WPLANG', 'en_US');
/** Forces the filesystem method to facilitate plugin installation **/
define('FS_METHOD', 'ftpsockets');
/** Disable the Plugin and Theme Editor **/
define('DISALLOW_FILE_EDIT', false);
/** Disable Plugin and Theme Update and Installation **/
define('DISALLOW_FILE_MODS', false);
/** Require SSL for Admin and Logins **/
define('FORCE_SSL_ADMIN', false);

/**
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ig[Q>L*g-k4OHVA<zihBR2<kETDK>eX@9jR%=X7b/chZTHZQ}C1t?u]=@_+mdba)');
define('SECURE_AUTH_KEY',  'G<Y#|ysa)3t2}`hsymIhp{sEwI5?9u1?[@UYX6F+*1+ow4EV$}%4H%?R0,b2QoAT');
define('LOGGED_IN_KEY',    's&{9d;+;$O&l6UH+dLh>VE<n5~9M/h?mZ u]uJU2}+mjK::L;9JsW/- aN}gi1I.');
define('NONCE_KEY',        'X~ndXAMTzC<D7f`rkr..76&Eqw0Ds-9#3Wo}S<+~^S&})8?Q=x9-kJV&&]j[^+R*');
define('AUTH_SALT',        'f{p)>3GXRAaM@n(ss_jkza7;W@Hv5_&DXgD,q*J[n|/(eG$U(eJQ)3Av/N/IT%$o');
define('SECURE_AUTH_SALT', '=Ga5&#|CXg6&^ta%jghq89] _(5fJH$>W3|LU2<l1niMd@W{?NgS]PO-g R)8_-A');
define('LOGGED_IN_SALT',   ',U+GYA2(*cDZGaE;I<[HT-uB+9GsqOSCu[+NHx3 GZ6SuIC?<|I-d?pKG>0o&yMO');
define('NONCE_SALT',       '^5M~jK,lte.TK&)W+Dn(SgX>S9<fm5a(5Y|YQ$?FTy8Ia]*SjT]K{lJO@{_%*uLx');
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