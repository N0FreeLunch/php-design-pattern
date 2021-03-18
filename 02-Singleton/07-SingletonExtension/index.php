<?php
include "Config.php";
include "Env.php";

$obj1 = Env::getInstance();
$obj2 = Env::getInstance();
$obj3 = Env::getInstance();

$obj1->setting();
$obj2->setting();
$obj3->setting();

 ?>
