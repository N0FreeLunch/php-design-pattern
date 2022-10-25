<?php
class Hello
{
  public function greeting($type)
  {
    $ko = Factory::getInstance($type);
    return $ko->text();
  }
}

?>
