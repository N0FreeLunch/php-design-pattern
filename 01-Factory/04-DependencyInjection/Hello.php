<?php
class Hello
{
  private $korean;

  public function __construct($obj)
  {
    $this->korean = $obj;
  }

  public function greeting()
  {
    return $this->korean->text();
  }
}

 ?>
