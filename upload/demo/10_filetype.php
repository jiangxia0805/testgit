<?php
/*
 *   3、判断给定文件类型，根据返回结果输出文件类型的
 *   中文解释。
 *                file = 普通文件
 */
$filename = "test1";
$type = filetype($filename);
switch($type){
	case "file":
		echo "普通文件";
		break;
	case "dir":
		echo "目录";
		break;
	case "block":
		echo "块文件";
		break;
	case "fifo":
		echo "管道文件";
		break;
	case "link":
		echo "链接文件";
		break;
	case "char":
		echo "字符文件";
		break;
	default:
		echo "未知";	
					
} 
?>












