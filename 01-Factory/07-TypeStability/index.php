<?php
include "Factory.php";
include "Hello.php";
include "Japanese.php";
include "English.php";

$obj = new hello;

echo $obj->greeting(Factory::ENGLISH)."\n";
echo "<br>";
echo $obj->greeting(Factory::JAPANESE)."\n";

?>
