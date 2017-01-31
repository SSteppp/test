<?php
$file_path =__DIR__; 
$file_path=str_replace('\\','/',$file_path);
//var_dump($file_path);
define("MAIN_PATH",$file_path);
ini_set('display_errors', 1);
//require_once MAIN_PATH . '/application/bootstrap.php';
function __autoload($class_name){
	require_once MAIN_PATH . '/application/core/'.$class_name.".php";
}
Route::start();
