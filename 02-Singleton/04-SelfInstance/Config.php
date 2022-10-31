<?php

class Config
{

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
    echo __CLASS__."オブジェクトを生成します。<br>";
    return new self();
  }

}

?>
