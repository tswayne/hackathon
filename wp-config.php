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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'hack');

/** MySQL database password */
define('DB_PASSWORD', 'hthon');

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
define('AUTH_KEY',         'j&ZoDG?(LbeH@6Tc+DTOdU@8:8D]XF^tSG>(YWd2g0~gfzVs|::07)kFb,?m<)~h');
define('SECURE_AUTH_KEY',  '.0-XGkvs8m%W[4gP!:Z2icVSd/)REv8` Oeyu,Y!/A$Gcmpg]TWo}|fimvVASi|5');
define('LOGGED_IN_KEY',    'OB_r&!GY$% H=}M0v_:3=1x,7T|pG4CZE5}wXxsVUZ#7+[W+DcpJ#Qz@C)vg`-vo');
define('NONCE_KEY',        'g|E)YJ(W$zq5c@BfL6T5/qft5gdN!#mcbKz12O@@.+qEUl7dfu+JT|QT|#P|I^~6');
define('AUTH_SALT',        '*K{/b-$g_vmC|(|qF<J_Iv|3>xQi&S[Je0-Ff{h,KbdG619$DlAry_V,<l%eN91+');
define('SECURE_AUTH_SALT', 'x&#b#bus+4He85+!O4])Tk,%bxFJS]E3X~E{].vXGnKa~|-fiC vS7};6k4NY=_G');
define('LOGGED_IN_SALT',   'O3{e-AnU+8Xi|GlF9t5V 0cleG Lg[2@-Z9v?|>WRJafFaui0DLc9jbR3%+-=o?8');
define('NONCE_SALT',       '-rnQo>OmLS|.{%@-#S=)#7$(4Qf0JAMRhQ-LUmJ]fV13W]J<3Cf2mfJc~3n3neI`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
