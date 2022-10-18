<?php
abstract class Factory
{
  public final function create()
  {
    return $this->createProduct();
  }

  abstract public function createProduct();
}


 ?>
