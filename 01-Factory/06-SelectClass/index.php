<?php
include "Factory.php";
include "Hello.php";
include "Japanese.php";
include "English.php";

$obj = new Hello;

echo $obj->greeting("en")."\n";
echo "<br>";
echo $obj->greeting("ja")."\n";
 ?>
