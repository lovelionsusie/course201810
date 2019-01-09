<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wpdb');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '{n)$,my?;yseu4BrM/+Y+)kHSO~FY0;u7#x@~zigl[J4zKvqU!~A@i_>,>W%Xg)*');
define('SECURE_AUTH_KEY',  'ce@Gh_+=Pw|S?%cGA<ZlRKd.~-s-&Bj6gw?s>Sc1g XbRa`mO`t=jzlI(Km(._6R');
define('LOGGED_IN_KEY',    'Poj^q)I}UiD!ftRz}3}O2G5KI-v<cGIdUPI31i/V-/)v~Zj-K])-eT=}G; +fB~(');
define('NONCE_KEY',        '29q1ZALtVJ]YSBs*n:UPmLzqEL9aD;PsVUpOg9D,sbWHDG}%+uGINyn^+Ms1BGaE');
define('AUTH_SALT',        '^geN)CzRUS32~t.[B--zhEA%IFw,D195Sid,bxNuW38vi&boaW:w7>!|8u[,FaI}');
define('SECURE_AUTH_SALT', 'QsYP+=i./F5t7u!SH9#L0K=w2ht`<oK}1#qvXN+t^e./ALt2:Vk$f5#~J==2Yoc ');
define('LOGGED_IN_SALT',   'P9?!A?uV7*tRaIz:%.|q1qm1@f1|Tbfp,~C)a6;1?X:T?UHFUOlFW4q!NwvQd;_;');
define('NONCE_SALT',       '(^zZTH.k,|xz=vFhYoM,)pk?{r7qd&1i!%l13af/H5!Aj6w3LgVE8v!}QG||MDg!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
