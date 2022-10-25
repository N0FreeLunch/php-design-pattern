<?php
class Factory
{
  static public function getInstance($type = null)
  {
    echo "ファクトリー：オブジェクトを生成して返却します。";
    if($type == "ja") {
      return new Japanese();
    } else {
      return new English();
    }
  }
}

?>
