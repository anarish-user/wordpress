<?php
/**
 * The base configuration for WordPress
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings ** //
if ( getenv('JAWSDB_URL') ) {
    $url = parse_url(getenv('JAWSDB_URL'));

    define( 'DB_NAME',     ltrim($url['path'], '/') );
    define( 'DB_USER',     $url['user'] );
    define( 'DB_PASSWORD', $url['pass'] );
    define( 'DB_HOST',     $url['host'] );
} else {
    // Local fallback
    define( 'DB_NAME', 'local' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST', 'localhost' );
}

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Authentication unique keys and salts. Generate new ones from https://api.wordpress.org/secret-key/1.1/salt/ **
define( 'AUTH_KEY',          'H?o$a0RCnJhuMkVr)S>WXBOCyQ@W{uEjhKa1DI;{k##i-dCR6DV1_N~!w~e@B?ia' );
define( 'SECURE_AUTH_KEY',   '^:]4_cw?GB<9_6!`iWJ2iD8jxF/>mQu+.CFx6Q2oIF95d.qW0vA;~x6r &-FOn-d' );
define( 'LOGGED_IN_KEY',     '(|?5FoA 3OJ-VxZ+fHV-T N?NPPCa7ei2Rm9ewk<mb55V3n~&4GDVCl}>KmnMqeg' );
define( 'NONCE_KEY',         'ykr*wQcN~Dc0DB=B~aa=twYG0bjZ2yxx3^-*Qy&}DTYk #Ia2R(BPMfuPr:/oZ ,' );
define( 'AUTH_SALT',         ',{S8+LT`Iu0T1Qx|KcPcY^D`5R[{qbwoBoe?:4AL*%=XT1_T;ew)i]dfbO]B?p)[' );
define( 'SECURE_AUTH_SALT',  '>Q?.1Q|1z;B~wiB&0u]f9?^SZzP9g<I.:TT%yPCy0X;*MGa//4/~p~hb57[QsU6L' );
define( 'LOGGED_IN_SALT',    'tnUJ?S,Pd#!T/%9M3o#3)q}y1C%/3fY@(P OPnl-.80Yefj.W-3*meFPGO=EvW[q' );
define( 'NONCE_SALT',        '5h)dR_4MT<#03$Uc}p@d.T@nXBbyq3y,V%M-Inulw|gD@;Lw)=F?L_Fu9T3u/C@o' );
define( 'WP_CACHE_KEY_SALT', '+m&WX4q!$q5~aaOT6~YeDe!DBzw,BlT(}12Hzan$?Rh$IB0ZY8f^eJ!HDg.xx1xb' );

// ** Table prefix **
$table_prefix = 'wp_';

// ** Environment-specific settings **
define( 'WP_ENVIRONMENT_TYPE', getenv('JAWSDB_URL') ? 'production' : 'local' );
define( 'WP_DEBUG', !getenv('JAWSDB_URL') );

if (!getenv('JAWSDB_URL')) {
    define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', true );
} else {
    define( 'DISALLOW_FILE_EDIT', true );
    define( 'DISALLOW_FILE_MODS', true );
}

// ** Site URLs - Optional but useful for environments **
define( 'WP_HOME', getenv('WP_HOME') ?: 'http://localhost' );
define( 'WP_SITEURL', getenv('WP_SITEURL') ?: 'http://localhost' );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
