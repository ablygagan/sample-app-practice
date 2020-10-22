<?php
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'conf-common.php';

define('CONF_APPLICATION_PATH', CONF_INSTALLATION_PATH . 'admin-application/');
define('CONF_THEME_PATH', CONF_APPLICATION_PATH . 'views/');

define('CONF_WEBROOT_URL', '/admin/');
define('CONF_WEBROOT_URL_TRADITIONAL', '/public/admin.php?url=');