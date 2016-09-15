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
define('DB_NAME', 'sonev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost/sonev');

define('WP_SITEURL','http://localhost/sonev');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Pn720H>_U1_u>NAL@pneRxskG&%Lf#gDahfx(=&`CrbGj8!=zSIN&fRq.RR{0:^s');
define('SECURE_AUTH_KEY',  'i!16O=xYnDs vpDZ]L97y46RsW/&?8bM*z+8P_@6fTH~AHR^DU3(RZpb<yam=eKy');
define('LOGGED_IN_KEY',    '6{RL;ut%_*sx,FvAgyxge$FB6PvCa.= Gv9lLCv$< &lWt`(d6DX<#%hN{YL>QR_');
define('NONCE_KEY',        '2zA*.2H 9!{0;4oz<2/4*p]hs[Lw/kw|?~F@C-Nt^qtm5P:(P/EjV{$n[wc7eiK-');
define('AUTH_SALT',        '$>lfqEJ6oF}/=;^RH}N>{l^vL@$`ye]#B7R8B0W;T}+6aw:i*)f2rRCX*f;l1UKH');
define('SECURE_AUTH_SALT', '3U=m%kl_U@ZKc),atAf}b./ZP8M?n<0w5Sk}YM(=`<a>u(#Ojm]TLHVr}yJPNzo9');
define('LOGGED_IN_SALT',   '@cY%cy[:uFR[^Wl_DPl0Yf#:$#YEoXP4owSN,$9;q.2DO8E-FB{`_hK31,=0M/]W');
define('NONCE_SALT',       'oSMG-hCcT3S&}8d%j3mv:gTy>oxm|?8/aj3po#j}GY6EJ=}>p9_fk4)J;2*}!&*U');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
