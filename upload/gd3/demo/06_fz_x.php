<?php
//沿y轴翻转
$filename = "../../dd.jpg"; 
fz($filename);
function fz($filename){
	//获取图片信息
	list($width,$height,$type) = getimagesize($filename);
	
	// 翻转后的图片资源
	$des_img = imagecreatetruecolor($width,$height);
	
	//拼接函数名称
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	$type_str = $type_array[$type];	
	//创建剪切后图片的资源
	$fun_str_m = "imagecreatefrom";
	$fun_str = $fun_str_m.$type_str;
	//原图片资源	
	$src_img = $fun_str($filename);
	
	
	
	for($i=0;$i<$height;$i++){
		$des_y = $height-($i+1);
		imagecopy($des_img,$src_img,
		          0,$des_y,
		          0,$i,
		          $width,1);
	}
	
	//展示
	header("Content-Type:image/png");
	imagepng($des_img);
	
	//清理资源
	imagedestroy($des_img);
	imagedestroy($src_img);
	
}

?>




