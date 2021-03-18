<?php
class ProductFactory extends Factory
{
  public function __construct()
  {
    echo __CLASS__."を生成します。<br>";
  }
  public function createProduct($model)
  {
    if($model == "Apple") {
      return new AppleProduct();
    } else if($model == "MS") {
      return new MSProduct();
    }
  }
}

 ?>
