<?php

class Config
{

  private function __construct()
  {
    echo __CLASS__."가 생성되었습니다.";
  }

  private function __clone()
  {
    echo __CLASS__."가 복제되었습니다.";
  }

  public static function getInstance()
  {
    echo __CLASS__."객체를 생성합니다.";
    return new self();
  }

}

 ?>
