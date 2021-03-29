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
define( 'DB_NAME', 'grocyclub' );

/** MySQL database username */
define( 'DB_USER', 'grocyclub' );

/** MySQL database password */
define( 'DB_PASSWORD', 'grocyclub' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`wTJ,qHwNH5j)jVabh!T]?re{}.{unAkBFDt#b5g;blc]-l736P=ct=~PM1{j?Dv' );
define( 'SECURE_AUTH_KEY',  ' F%[2Nvu+nC`7;j17m1Rm{`-e3v[f ]Y`q`cj&CD1q7/aWvgKc7eejXr:SBkfO.)' );
define( 'LOGGED_IN_KEY',    ')-`/n^WV}l-`EPWI]2?G0jhDBp0h1#-%A]}*~/A>js`$>dV/s`!)shx_nWMZQQ>D' );
define( 'NONCE_KEY',        '<R* rh5C8~&<Rc)]IY,SO@Qbnw72(D84=}Y<}XSO^,F5@BT(EutXk/x4>b#fO5h6' );
define( 'AUTH_SALT',        'A8X^sNfj+~J(CCmF,uCKo1:wjXRp(,Pg@{V=V`LC2D-aR<C4?n:51Ji^,Yt85}`>' );
define( 'SECURE_AUTH_SALT', '%C@`Y$3urHCh)|fEe*Q#;-d,dlNQ@2:DSLJSyc Q>mo,E.{Krm3+5=5NHFk9_dTQ' );
define( 'LOGGED_IN_SALT',   'KbwD#g&rQk>}PtH3p=T#:i)fNP=lK?M|,5W0J9BPFhB{s NOPb_{%jZshRN#:|,$' );
define( 'NONCE_SALT',       'DD7y@,_L.gmU1w1ak-MOx1cHA|{30zanKu~Y}BLP?t DU3FkpXiFq_jBsY0lcN5r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gro_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
