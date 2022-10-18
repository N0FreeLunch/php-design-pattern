<?php
abstract class Factory
{
  public final function create($model)
  {
    return $this->createProduct($model);
  }

  abstract public function createProduct($model);
}

 ?>
