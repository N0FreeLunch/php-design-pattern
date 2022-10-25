<?php
class Factory
{
  const JAPANESE = "ja";
  const ENGLISH = "en";
  
  static public function getInstance($type=null)
  {
    echo "ファクトリー：オブジェクトを生成して返却します";
    if($type == self::JAPANESE) {
      return new JAPANESE();
    } else if($type == self::ENGLISH){
      return new English();
    }
  }
}

?>
