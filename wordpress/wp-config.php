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
define('AUTH_KEY',         'j`.Maq|h1vHvt|7eJ! Rryr(U&*a|Ms6u-;;!+.jeUW`xZnxl+vh[c1288na6eQW');
define('SECURE_AUTH_KEY',  'prKg[wO.*(j)Y=6pyoyE[K#`{N_76W9l)$<3B5ld|DBSib8JzwD9{D.9-J%u.#Hw');
define('LOGGED_IN_KEY',    'CzLFGY+M;+sWS?9-hO_?yRPPE[7O6iTnrR9bNf|Y$]YR-<MWXmQ_+HoNN2~>Pl0|');
define('NONCE_KEY',        'zd.l}l/<p`kl~$,V_]iHCU%EN)NayWu+If`D%U2Q-k1-nB[<#m|[r 4MzV|z+-FV');
define('AUTH_SALT',        'zJ$*O{JZ+^Jg+X>YG6qKL-5avPc4Gm+2RKGlH`&)40>/UIF74v=5+5[?<Z]%6=O$');
define('SECURE_AUTH_SALT', 'hM]=!F+7A.(/>b~Tk6wq-LwmX@7CVpS@QGkz#jD}&{0n>|m0K[`Ig $cJ)bk&k.E');
define('LOGGED_IN_SALT',   ':,NH?s9^YG3DNFKwTDvPPlLKR4pg@+WT6_Z2+_M7_q4M2yT!9i$23-{*m;|OMyKS');
define('NONCE_SALT',       'J@Og1k:)7AGO`O_rNiKZW}k~#mG7EG];}d<<=@MF0g}]|7/:i1Umtf2|7? -+=ya');

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
