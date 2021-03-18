<?php
require "factory.php";
require "AppleProduct.php";
require "MSProduct.php";
require "ProductFactory.php";

$fac = new ProductFactory;
$pro = $fac -> create("Apple");
$pro -> name();

echo "<br>";

$pro = $fac -> create("MS");
$pro -> name();

?>
