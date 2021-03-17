<?php

class Env extends Config
{
  public function setting()
  {
    echo "システム環境を設定します。<br>";
  }

  public static function getInstance()
  {
    if(isset(self::$instance)) {
      echo __CLASS__."オブジェクトを生成します。";
      self::$Instance = new self();
    }

    echo __CLASS__."オブジェクトを返却します。";
    return self::$Instance;
  }
}
 ?>
