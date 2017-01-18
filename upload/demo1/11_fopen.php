<?php
/*
 * 2、应用上一题的文件test.txt，打开文件，
 * 读取文件中的一个字符。将读取到的字符输出到屏幕上。
 */
//打开文件，文件模式应用举例
$filename = "zz.php";
$fh = fopen($filename,"a+");

//读取文件内容
echo fgetc($fh);
echo "<hr/>";
var_dump(fwrite($fh," tom"));




//清理（释放）资源
fclose($fh);

?>