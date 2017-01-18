<?php
//1、打开文件
$filename = "zz.php";
$fh = fopen($filename,"r");

while($str = fgetc($fh)){
 	echo $str;
}

fclose($fh);

?>