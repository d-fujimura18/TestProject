<?php
$file_name = "test.csv"; //ファイル名を指定

$fp = fopen($file_name,"r"); //ファイルポインタを指定
if ( $fp ){
  while( !feof($fp) ){
    var_dump( fgetcsv($fp) );
  }
}

fclose($fp);
?>;
?>
