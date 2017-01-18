<?php
//遍历目录
$pathname = "./test";
$dir = opendir($pathname);
//循环读取并输出目录下的内容
while($filename=readdir($dir)){
	//过滤掉.和..
	if($filename!="."&&$filename!=".."){
		//拼装相对完整的路径 ./test/a 
		$filename=$pathname."/".$filename;
		//判断出文件和目录
		if(is_dir($filename)){ 
			echo "是目录:".$filename;
			echo "<br/>";
		}else{
			echo "是文件:".$filename;
			echo "<br/>";
		}
	}
}


closedir($dir);

?>












