<?php
include "Config.php";

$obj1 = Config::getInstance();
$obj2 = Config::getInstance();
echo "<br>";
$obj3 = new Config();
$obj3->getInstance();

?>
