<?php
//1、打开文件
$filename = "zz.php";
$fh = fopen($filename,"r");

echo fread($fh,filesize($filename));

fclose($fh);
?>