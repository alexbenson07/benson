<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '8}Ry}Irgywa+,uQ+3>==$2K|6dTknRc%Sy~;?>o#,HF`P.W6h8|d?lIeO:_rdbP&');
define('SECURE_AUTH_KEY',  'YLX%g`PaUP (11optw&h_+ENTB+fKENuY1B:ePo;`eoY8x&2>Wm@c-!Yk%73@eDx');
define('LOGGED_IN_KEY',    'rn+PT7u:31Ro[gv9KCpJ/Q.V(~Q|wnLOC.S3mb# j+RW`%+Ij]!0$K-6Y{i5v+&j');
define('NONCE_KEY',        'zvB7ry|-Tu{g+`0S+vA`F~s+d?752oC,#ISX ]jp1Ep}/G:->[i)eU]U5W$eQB q');
define('AUTH_SALT',        'm$_>#L6u^kr=6#Cft!^ouPy$r^+gzaHg@y5<tff93r,T/Lk=y75CFs=k@^{dyw.F');
define('SECURE_AUTH_SALT', 'p_C ;Fa+_B-@+D+L:YkVq_^BQrShxs>QpOG)(h8m..[9y_$2*15w7Isd3s2|Ht-|');
define('LOGGED_IN_SALT',   '#N=fnoSE^XTgGTL-dcfF( SulN|61({?;DGGD$4Hw1D(:PkNb6+=a62694sD(tJ:');
define('NONCE_SALT',       's;3<_|H~jbYo|dXD#;-VY+&XP|H7-C+rL[O8E@3zyH(-Qu-ELMc`Af9`]Dki&JqG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'scs_';

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
