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
define('DB_NAME', 'wampwp');

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
define('AUTH_KEY',         'XH0oN*0:o|;4<e>dh&xK2`X~7w~tZf.,0|v*}Y(s_:{%Z;p{%sE`47ODAWDq^~GN');
define('SECURE_AUTH_KEY',  'j-[q/1Zju54HwlYhu~2[C=;/NShpQPI|+>b|L_CD&H<SmF/7E{X$JVGNx1I_z--=');
define('LOGGED_IN_KEY',    ')F$N:U1%s9_KHXqMdGFPES_qlq!8mx1%a{%3VH|F0Qmd$)DT!oKEh2;m5vm7Q%-+');
define('NONCE_KEY',        'uY$qNCUL~B.Q,SOLnPb/$Xl8?h:$EopZ3y1py,vr|^?gG[S%>@X?J`.%^-&clrCl');
define('AUTH_SALT',        'T7%r%4Yt$m>{lz&cRUuvQ|r/H&;y=cj7d%d25uow4, Jx|[R Y| 3; :_wS2L&#7');
define('SECURE_AUTH_SALT', 'F9Q_a%FR=zu:&X_!q}-,GfUWUXdq+;l+qvPMDUkd,}MhA018{7+>r!mra-gfh>os');
define('LOGGED_IN_SALT',   ',P?.m&(<$xAtcxYf{xM-geX(A|kYw/5+F/-k2DDN9HPm<:zH4+G=YZqjWQY-|Bnq');
define('NONCE_SALT',       ')Q.eY#-W,d-aCo?nu_RRY%x}B+ISX*|$n])ZTb-UY m6n2h-za7)G-y-M#P/m=g`');

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
