<?php
/*
 * 2、应用上一题的文件test.txt，打开文件，
 * 读取文件中的一个字符。将读取到的字符输出到屏幕上。
 */ 
//打开文件 
$fh = fopen("test.txt","r");
//对文件进行操作 
echo fgetc($fh);

//释放资源
fclose($fh);
?>