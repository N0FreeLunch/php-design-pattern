<?php
class Config
{
  protected static $Instance = NULL;

  protected function __construct()
  {
    echo __CLASS__."が生成されました。<br>";
  }

  protected function __clone()
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
