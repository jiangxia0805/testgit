<?php
header("Content-Type:text/html;charset=utf-8");
//获取文件类型
echo filetype("test");
$filename = "SogouExe.exe";
//判断给定路径是否是一个文件
if(is_file($filename)){
	echo "<br/>";
	echo "是文件";
} 
//判断给定路径是否是一个目录
if(is_dir($filename)){
	echo "<br/>";
	echo "是目录";
}else{
	echo "<br/>";
	echo "不是目录";
}
echo "<br/>";
echo "文件的大小为：".filesize($filename);
echo "<br/>";
echo "文件的创建时间：".date("Y-m-d H:i:s",filectime($filename));
echo "<br/>";
echo "文件的修改时间：".date("Y-m-d H:i:s",filemtime($filename));

echo "<br/>";
echo "文件的访问时间：".date("Y-m-d H:i:s",fileatime($filename));
echo "<br/>";
//判断文件是否可读
if(is_readable($filename)){
	echo "文件可读";
}
echo "<br/>";
//判断是否可写
if(is_writable($filename)){
	echo "文件可写";
}
echo "<br/>";
//判断文件是否可执行
if(is_executable($filename)){
	echo "文件可执行";
}else{
	echo "文件不可以执行";
}
?>















