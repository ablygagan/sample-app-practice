<?php
/**
 *
 * General configurations
 */
 
define('CONF_DEVELOPMENT_MODE', ($_SERVER['SERVER_NAME'] == 'sampleapppractice.local.4livedemo.com'));
define('CONF_LIB_HALDLE_ERROR_IN_PRODUCTION', true);

define ('CONF_URL_REWRITING_ENABLED', true);

define('PASSWORD_SALT', 'ewoiruqojfklajreajflfdsaf');

switch ($_SERVER['SERVER_NAME']) {
	case 'sampleapppractice.local.4livedemo.com':
		define('CONF_DB_SERVER', 'localhost');
		define('CONF_DB_USER', 'root');
		define('CONF_DB_PASS', '');
		define('CONF_DB_NAME', 'sampleapppractice');
	break;
	default:
	die('configurations not set for live environment');
break;
}

define ( 'CONF_INSTALLATION_PATH', dirname ( dirname ( __FILE__ ) ) . DIRECTORY_SEPARATOR );
define ( 'CONF_UPLOADS_PATH', CONF_INSTALLATION_PATH . 'user-uploads' . DIRECTORY_SEPARATOR );

/*if(strpos($_SERVER['SERVER_NAME'], '.4demo.biz') > 0) {
	define('CONF_CORE_LIB_PATH', '/etc/fatlib/');
} else {*/
	define ('CONF_CORE_LIB_PATH', CONF_INSTALLATION_PATH . 'library/core/' );
/*}*/

define('CONF_APP_URL',$_SERVER['SERVER_NAME']);

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
define('CONF_BASE_URL', $protocol . $_SERVER['SERVER_NAME']);