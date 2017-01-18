<?php
//1、打开文件
$filename = "zz.php";
$fh = fopen($filename,"r");
//对文件的操作
while($str = fgets($fh)){
	echo $str;
}


fclose($fh);

?>