<?php

require "factory.php";
require "AppleProduct.php";
require "ProductFactory.php";

$fac = new ProductFactory;
$pro = $fac->create();
$pro->name();

 ?>
