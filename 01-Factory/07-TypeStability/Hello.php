<?php
class Hello
{
  public function greeting($type)
  {
    $ja = Factory::getInstance($type);
    return $ja->text();
  }
}

?>
