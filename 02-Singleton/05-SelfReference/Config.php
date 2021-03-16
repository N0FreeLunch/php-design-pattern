<?php
class Config
{
  private static $Instance = NULL;

  private function __construct()
  {
    echo __CLASS__."が生成されました。<br>";
  }

  private function __clone()
  {
    echo __CLASS__."が複製されました。<br>";
  }

  public static function getInstance()
  {
    if(!isset(self::$Instance)) {
      echo __CLASS__."オブジェクトを生成します。<br>";
      self::$Instance = new self();
    }

    echo __CLASS__."オブジェクトを返却します。<br>";
    return self::$Instance;
  }
}

 ?>
