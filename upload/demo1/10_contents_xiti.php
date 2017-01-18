<?php
/*
 * 1、在本地创建文件test.txt，输入内容hello world。
 * 用file_get_contents读取出文件中的内容。然后尝试
 * 将文件中的内容用file_put_contents，
 * 保存到test1.txt中。
 */
$str = file_get_contents("test.txt");
file_put_contents("test1.txt",$str);
 
?>