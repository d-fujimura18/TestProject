<?php
$file_name = "test.csv"; //�t�@�C�������w��

$fp = fopen($file_name,"r"); //�t�@�C���|�C���^���w��
if ( $fp ){
  while( !feof($fp) ){
    var_dump( fgetcsv($fp) );
  }
}

fclose($fp);
?>;
?>
