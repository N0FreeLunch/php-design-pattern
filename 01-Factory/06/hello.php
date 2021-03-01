<?php
class Hello
{
  public function greeting($type)
  {
    $ko = Facroty::getInstance($type);
    return $ko->text();
  }
}

 ?>
