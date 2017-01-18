<?php
//遍历目录
$pathname = "./test";
$dir = opendir($pathname);
//循环读取并输出目录下的内容
while($filename=readdir($dir)){
	/*if(!($filename=="."||$filename=="..")){
		echo $filename."<br/>";
	}*/
	if($filename!="."&&$filename!=".."){
		echo $filename."<br/>";
	}
}


closedir($dir);

?>












