<?php
include "Config.php";

Config::set("hello<br>");
echo Config::get();
echo Config::get();

Config::set("beautiful<br>");
echo Config::get();
echo Config::get();

$obj = new Config();
$obj -> set("world<br>");
echo $obj -> get();
echo Config::get();


 ?>
