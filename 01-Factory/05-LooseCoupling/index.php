<?php
include "Factory.php";
include "Hello.php";
include "Japanese.php";

$obj = new Hello;

echo $obj->greeting();

?>
