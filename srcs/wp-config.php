<?php
// ** Arquivo padrão de configurações do Wordpress, com algumas modificações (https://wordpress.org/support/article/editing-wp-config-php) ** //

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** ALTERAÇÔES quanto a nomes de usuario e configurações ** //

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

// ** ALTERAÇÔES chaves que podem ser geradas: https://phpsolved.com/phpmyadmin-blowfish-secret-generator/ ** //

define('AUTH_KEY',         'tfv{E01KB09X]f6zNLZsDplIcFOrvEdBzPr5K-eN55N0T18KfKt]R8VpSYPB0MVD');
define('SECURE_AUTH_KEY',  'ArDKE.kO;u}u8f/Wb65E]f0gHMVgahWphgLT7[Fy9i4tA/kVW34A]LcJLp0iKGuA');
define('LOGGED_IN_KEY',    ':Ex0[jX.A15vxo:aDoD;[R46qx{-D-71ZBDjyF.SKaGDj298D0oR=;GGDextWIRj');
define('NONCE_KEY',        '6;{D,Zkj][uwUo=Q05SpFVv2No:rF0lX5PXTHFiP1cE}kdHicmagTn;piL9{],js');
define('AUTH_SALT',        'y1gx0/jvVZlD0C=DMVO/x7N0s8]1U8Xe5oIRhNrb/lGT}uD}hcxElgQrf0EN-PPv');
define('SECURE_AUTH_SALT', 'R3qpoHl]848D-;EzJ0T[o4-ZVM;5E;JOlQDO3Jj{/m52wF93W4t]D[3B9lOLs43I');
define('LOGGED_IN_SALT',   '=x}pt9a8[cjk2WK=KRFMazQB6eXy0{GmGrVIBBNVaJr3vNY9-qTNHPe=6jHQugMV');
define('NONCE_SALT',       'qC5aeEcknLE]9DcJrKn7e,4LDJquyJT57DQtMOmnqMb]xOm6zz]YjH[wp3-:Iq:8');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
