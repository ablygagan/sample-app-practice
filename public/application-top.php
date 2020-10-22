<?php

if ( substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') ){
    ob_start("ob_gzhandler");
}
else {
    ob_start();
}

ini_set('display_errors', (CONF_DEVELOPMENT_MODE)?1:0);
error_reporting( (CONF_DEVELOPMENT_MODE)?E_ALL:E_ALL & ~E_NOTICE & ~E_WARNING);

require_once CONF_INSTALLATION_PATH . 'library/autoloader.php';

/* We must set it before initiating db connection. So that connection timezone is in sync with php */
date_default_timezone_set('America/New_York');

ini_set('session.cookie_httponly', true);
ini_set('session.cookie_path', CONF_WEBROOT_URL);

session_start();

define('SYSTEM_INIT', true);