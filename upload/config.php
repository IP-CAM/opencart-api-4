<?php
// HTTP
define('HTTP_SERVER', 'http://opencart-api.loc/');

// HTTPS
define('HTTPS_SERVER', 'http://opencart-api.loc/');

// DIR
define('DIR_APPLICATION', '/var/www/opencart-api.loc/public_html/upload/catalog/');
define('DIR_SYSTEM', '/var/www/opencart-api.loc/public_html/upload/system/');
define('DIR_IMAGE', '/var/www/opencart-api.loc/public_html/upload/image/');
define('DIR_STORAGE', '/var/www/opencart-api.loc/public_html/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'opencart_3');
define('DB_PORT', '3306');
define('DB_PREFIX', '');

//API
define("API",true);