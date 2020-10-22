<?php
require_once dirname(__DIR__) . '/conf/conf-admin.php';

require_once dirname(__FILE__) . '/application-top.php';

define ('CONF_FORM_ERROR_DISPLAY_TYPE', Form::FORM_ERROR_TYPE_AFTER_FIELD);

FatApp::unregisterGlobals();
FatApplication::getInstance()->callHook();