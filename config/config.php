<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Kathmandu');
	if($_SERVER['SERVER_ADDR']=='127.0.0.1' || $_SERVER['SERVER_ADDR']=='::1'){
		define('ENVIRONMENT','DEVELOPMENT');
	}else{
		define('ENVIRONMENT','PRODUCTION');
	}
	if(ENVIRONMNET=='DEVELOPMENT'){
		error_reporting(E_ALL);
		define('DB_HOST','locaslhost');
		define('DB_NAME','magazine');
		define('DB_USER','host');
		define('DB_PASS','');
		define('SITE_URL','http:://www.magazine.com/');

	}else{
		error_reporting(0);
		define('DB_HOST','locaslhost');
		define('DB_NAME','magazine');
		define('DB_USER','host');
		define('DB_PASS','');
		define('SITE_URL','http:://www.magazine.com/');

	}
	define('ERROR_PATH',$_SERVER[DOCUMENT_ROOT].'error/');
	define('ERROR_PATH',$_SERVER[DOCUMENT_ROOT].'class/');
	define('ERROR_PATH',$_SERVER[DOCUMENT_ROOT].'config/');
	define('ERROR_PATH',$_SERVER[DOCUMENT_ROOT].'upload/');

?>