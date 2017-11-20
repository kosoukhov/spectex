<?php
/**
 * Local configuration file.
 */

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// specify error reporting level
if (YII_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
} else {
    ini_set('display_errors', 'off');
}

// default file permission mask:
umask(0002); // invert of 0775