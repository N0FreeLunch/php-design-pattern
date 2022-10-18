<?php
class Hello
{
  public function greeting()
  {
    return "こんにちは.<br>";
  }
}

$obj1 = new Hello;
$obj2 = new Hello;
$obj3 = new Hello;
$obj4 = new Hello;
$obj5 = new Hello;


echo $obj1->greeting();
echo $obj2->greeting();
echo $obj3->greeting();
echo $obj4->greeting();
echo $obj5->greeting();

 ?>
