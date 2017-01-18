<?php
//遍历目录
$pathname = "./test";
$dir = opendir($pathname);
//读取目录下的内容
echo readdir($dir);  //.
echo "<br/>";
echo readdir($dir);  //..
echo "<br/>";
echo readdir($dir);  //1.php
echo "<br/>";
echo readdir($dir);  //2.php
echo "<br/>";
var_dump(readdir($dir));

closedir($dir);
?>












