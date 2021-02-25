<?php
  $path = getcwd();
  $handle = opendir($path);
  $files = array();
  while(false !== ($filename = readdir($handle))) {

    if(is_dir($path."/".$filename) && strpos($filename,".") === false) {
      $files[] = $filename;
    }

    if((is_file($path."/".$filename) && strpos($filename,".php") !== false && $filename!="index.php" && $filename!="directory.php")){
      $files[] = $filename;
    }
  }

  closedir($handle);
  sort($files);

  foreach($files as $f) {
    echo "<a href=./".$f.">".$f."</a><br>";
  }
 ?>
