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
define('DB_NAME', 'fostersk_wrd1');

/** MySQL database username */
define('DB_USER', 'fostersk_wrd1');

/** MySQL database password */
define('DB_PASSWORD', 'LYnkT4r0bQ');

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
define('AUTH_KEY',         'zV0KU2FTuWUR6sxVQ4EA6B67kaVGCqfDBnhepsO5wEEsNsek2qiuUrPVreeH7ehk');
define('SECURE_AUTH_KEY',  'Gt6PZ9MkghkoSDgT9SUSluVnM0CgLYiAQ2mMHDtFrYAA8Yhptl5CgGfkrAVwGQsy');
define('LOGGED_IN_KEY',    'R2GzJKHnERdLoGuIzDJCbU52sBHlEDjtCgwntPU6gFicuoucHb94ijJTZZXCZzEl');
define('NONCE_KEY',        'uyEOF4zDgqmLRqxETyEPEs2Y80QwlQcxR2SGPZ3GnKaxWkPHTdu4Dz0NA1xioBey');
define('AUTH_SALT',        'NU8iUtZckFViwpAzgrafHKCwUqiEtibMbPiGx1hEvbZNxwGpI7QQER8GAqOSBdMd');
define('SECURE_AUTH_SALT', '8Ib57zVI9dMGCSqHqw3bo08Ej16YEvZMCpWHDcjZYnCUV6FoLeaqNALZ7btei1nT');
define('LOGGED_IN_SALT',   'g2I2D0vujb43WwuI3Raf6W2FZJ76IhzGM1wD8Jny1EFSATSgH4kLieVcr6cuIVHM');
define('NONCE_SALT',       'p6x9ThArF3WSiSLh0R8htJLP0bEuXQY2a8NO8X3oTqNYdlWhKlzv9OblZrdJ462r');

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
