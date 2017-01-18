<?php
//获取文件内容
//$filename = "aa.php"; //获取本地文件内容
$filename = "http://www.baidu.com"; //获取远程文件内容
echo file_get_contents($filename);
?>