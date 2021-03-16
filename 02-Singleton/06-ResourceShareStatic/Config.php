<?php
class Config
{
  static public $conf = NULL;

  public static function set($val)
  {
    self::$conf = $val;
  }

  public static function get()
  {
    return self::$conf;
  }
}
 ?>
