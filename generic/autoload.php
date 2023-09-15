<?
spl_autoload_register(function ($class_name) {
   include_once $_SERVER['DOCUMENT_ROOT']."/mvc/".$class_name.".php";
});