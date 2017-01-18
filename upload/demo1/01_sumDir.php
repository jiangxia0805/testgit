<?php
//统计目录的大小
$pathname = "test";
echo sumDir($pathname);
function sumDir($pathname){
	//定义一个用于累加文件大小的变量
	$size = 0;
	//打开目录
	$dir = opendir($pathname);
	//读取目录中的内容
	while($filename = readdir($dir)){
		//去掉"."和".."
		if($filename!="."&&$filename!=".."){
			//拼装目录
			$filename = $pathname."/".$filename;
			
			//判断是文件还是目录
			if(is_dir($filename)){
				//filenmae="test/a"
				//此时统计目录下的文件大小
				$size+=sumDir($filename);
			}else{
				//是文件
				$size+=filesize($filename);
			}
		}
	}
	closedir($dir);
	return $size;
}


?>





