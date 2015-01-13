<?php

// it will hide the Error Notices and it will let us NOT to manually configure our PHP.ini
error_reporting(E_ALL & ~E_NOTICE);

// it will set the timezone to Manila and it will let us NOT to manually configure our PHP.ini
date_default_timezone_set("Asia/Manila");

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
