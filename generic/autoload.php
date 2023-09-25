<?php
spl_autoload_register(function ($class_name) {
   include_once $_SERVER['DOCUMENT_ROOT']."/biblioteca1/".$class_name.".php";
});
?>