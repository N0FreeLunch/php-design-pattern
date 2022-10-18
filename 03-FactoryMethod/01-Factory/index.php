<?php
require "factory.php";
require "AppleProduct.php";

$fac = new Factory;

$pro = $fac->create();
$pro->name();

 ?>
