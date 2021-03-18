<?php
class ProductFactory extends Factory
{
  public function __construct()
  {
    echo __CLASS__."を生成します。<br>";
  }
  public function createProduct()
  {
    return new AppleProduct();
  }
}

 ?>
