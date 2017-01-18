<?php
/*
 * 3、应用上一题的文件test.txt，
 * 应用fread一次读取文件中的全部内容。
 * 将读取到的内容输出到屏幕上。
 */
$fh = fopen("test.txt","r");

echo fread($fh,filesize("test.txt"));

fclose($fh);
?>