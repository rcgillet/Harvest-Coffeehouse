<?php
/*
 * 
 * This is the first page you come accross in the program.
 * 
 */
ob_start();

define("FILE_ROOT", getcwd() . '/');
define('DOC_PATH', getcwd() . '/', false);
define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'], false);
define ('SITE_ROOT', realpath(dirname(__FILE__)));
require_once(FILE_ROOT . 'includes/main.php');

$main = new main();
$main->run();  

ob_end_flush();
?>
