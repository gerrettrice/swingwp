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
define('DB_NAME', 'swing_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N8GedvyTX/ekRl9*/(v9qcc66wop!0;w~Pskrou 8%ru1dZS]jBo[]NNhbnAdY:z');
define('SECURE_AUTH_KEY',  'q2u1/OCN0Q4*gtahXtH}T|@{>_24ruxY*DYq@$eI[4o|<}4H];$N(Zn1/CA]B-;^');
define('LOGGED_IN_KEY',    'd+Hx9*H.^moO;dNJ#4jMd1nfu{Pe]]i&)wI~fwV2NsVFI(<2ugSi0C&T0>cuP]&o');
define('NONCE_KEY',        'g)hB:]m~~<#r%>DV%0_9mVH7qWzNt;v@sD~EM{}O!1{]$n=HBWXon7J6<IALJg.n');
define('AUTH_SALT',        'A.nW@yI-W()!YrC}A)60#,xL#R&LXZ}]g^R4o2IIl.w73Q[/$>Rm#+)!FE*n`DN6');
define('SECURE_AUTH_SALT', 'tGILw4O bz}OYzOj^b 37(%BT4s(RYH*)%xFbPAii=^,bE+DS7w+Qc59uhlg[G4e');
define('LOGGED_IN_SALT',   '6+i^Fdxr G+Xc!h.7C[hE.4wh@xb*@GJi?WycG&N;^XPJ+uBVgY+9Lq9Ue<P-i!?');
define('NONCE_SALT',       '^a5_3`.=>$IKX>*8i,-4}Zl#Z| >qZ+i*{T5cG#1ku?/^Wu.`SWd<xVH#B]Mylk=');

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
