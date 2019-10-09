<?php
# Database Configuration
define( 'DB_NAME', 'test' );
define( 'DB_USER', 'firstvotenc' );
define( 'DB_PASSWORD', '33S4oChLZ451BotpP6fp' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'g#7.4~WXG}u@2n|b|oIX2/tBW*>Y:C-sP (8D!=1iFCe-*T%]@8uH.jdA`[(;+tM');
define('SECURE_AUTH_KEY',  'Ar^[./FFsT:AT`v:5V}gS3_;hj`!_@7y2TKOxNoL,?ic&cUXO7 Q&~Npm`q.]=E{');
define('LOGGED_IN_KEY',    '6~++DT1_-+*7prI7V?Gc0W51Rkj]-$+8Gn]?YW2vvd_0~Z#GR-Dy}5W;zf+Zmqs6');
define('NONCE_KEY',        '<%u?2fS3y!rI!9 @@@ma>ZW!Zi>+R,e%H&(NUEI]mvzkcR.#]o$?iQe v$9n#:2{');
define('AUTH_SALT',        ':eFvQ^NR5-VP3,A*hBY~LcR)G*@nV<*sQO(b-pAY*C|.7lp!++`%sXF-?*Fc`1h&');
define('SECURE_AUTH_SALT', '9>^T[W}c+X$eQ?qI^(#3xT^ m/NB)}#@hCt2J_D@S)uq_S9 ]4.d,5i;ULw&1qvZ');
define('LOGGED_IN_SALT',   'FTBi(@sT;Plnn^LvP|(ENoE+OF|05/yqKh=bU n1,__JECxeVgafG6q%7VM5v_UJ');
define('NONCE_SALT',       'a?gButnb8#c+dFPUV@thfa^6|L/vH<?xS-|5G 3^8|2- 0YcO:@%&:Dsv;7<aM|,');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'firstvotenc' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'a0a89c36d1d8fdd159c3815c02024e4a9fd628a6' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '100557' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'firstvotenc.wpengine.com', 1 => 'www.firstvotenc.org', 2 => 'firstvotenc.org', 3 => 'www.firstvotenc.com', 4 => 'firstvotenc.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100557', );

$wpe_special_ips=array ( 0 => '104.198.110.24', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WP_SITEURL', 'http://www.firstvotenc.org' );

define( 'WP_HOME', 'http://www.firstvotenc.org' );

define( 'DOMAIN_CURRENT_SITE', 'www.firstvotenc.org' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings




define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';

define( 'PATH_CURRENT_SITE','/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
