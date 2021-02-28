<?php
include "Korean.php";

class Hello
{
  public function greeting()
  {
    $ko = new Korean;
    return $ko -> text();
  }
}
 ?>
