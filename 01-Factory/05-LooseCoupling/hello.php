<?php
class Hello
{
  public function greeting()
  {
    $ja = Factory::getInstance();
    return $ja->text();
  }

}

?>
