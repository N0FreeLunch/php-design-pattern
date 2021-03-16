<?php
include "Config.php";

Config::set("hello<br>");
echo Config::get();
echo Config::get();

Config::set("world<br>");
echo Config::get();
echo Config::get();

$obj = new Config();
$obj -> set("good<br>");
echo $obj -> get();
echo Config::get();


 ?>
