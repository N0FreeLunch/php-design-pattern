<?php
  function directory ($dirname) {
    $path = getcwd();
    $handle = opendir($path);
    $files = array();
    while(false !== ($filename = readdir($handle))) {
      if((is_file($path."/".$filename) && strpos($filename,".php") !== false && $filename!="index.php")){
        $files[] = $filename;
      }
    }

    closedir($handle);
    sort($files);

    echo "<a href='/'>..home</a><br>";
    foreach($files as $f) {
      echo "<a href=./".$dirname."/".$f.">".$f."</a><br>";
    }
  }
 ?>
