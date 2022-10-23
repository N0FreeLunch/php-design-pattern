<?php
class Factory
{
  static public function getInstance()
  {
    echo "ファクトリー : オブジェクトを生成して返却します。\n";
    return new Japanese();
  }
}
?>
