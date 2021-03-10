<?php
$conf = [
  'name' => 'jiny',
  'version' => '1.0'
];

class GlobalVariableSideEffectLisk
{
  public function conf()
  {
    return $GLOBALS['conf'];
  }
}


$obj = new GlobalVariableSideEffectLisk;
print_r($obj -> conf());

 ?>
