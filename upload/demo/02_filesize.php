<?php
header("Content-Type:text/html;charset=utf-8");
//计算文件的大小，输出为人类易读的格式
$filename="ZendStudio.exe";
echo getFileSize($filename);
function getFileSize($filename){
	//获取文件的大小
	$size = filesize($filename);
	$dw = "";
	if($size>=pow(2,40)){
		$size = $size/pow(2,40);
		$dw="TB";
	}else if($size>=pow(2,30)){
		$size = $size/pow(2,30);
		$dw="GB";
	}else if($size>=pow(2,20)){
		$size = $size/pow(2,20);
		$dw="MB";
	}else if($size>=pow(2,10)){
		$size = $size/pow(2,10);
		$dw="KB";
	}else{
		$dw="bytes";
	}
	$size = round($size,2);
	return 	$size.$dw;
}

?>















