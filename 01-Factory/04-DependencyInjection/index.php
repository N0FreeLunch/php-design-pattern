<?php
include "hello.php";
include "korean.php";

$korean = new korean;

$obj = new Hello($korean);

echo $obj -> greeting();
 ?>
