<?php
// Version
define('VERSION', '3.0.3.1');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

if (!defined('API')) {
    start('catalog');
}else {
    if (API === true) {
        start('api');
    }
}