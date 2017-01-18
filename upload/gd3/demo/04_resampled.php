<?php
//图片缩放
$filename = "../../dd.jpg"; 

resampled($filename,100,100);
function resampled($filename,$des_w,$des_h){
	list($width,$height,$type) = getimagesize($filename);
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	$type_str = $type_array[$type];
	
	
	//创建剪切后图片的资源
	$fun_str_m = "imagecreatefrom";
	$fun_str = $fun_str_m.$type_str;
	$des_img = imagecreatetruecolor($des_w,$des_h);
	
	//$src_img 获取原图片的资源
	$src_img = $fun_str($filename);
	$des_x = 0;
	$des_y = 0;
	//剪切的原图片的位置
	$src_x = 50;
	$src_y = 50;
	$src_w = 100;
	$src_h = 100;
	
	
	 imagecopyresampled($des_img,$src_img,$des_x,$des_y,
                          $src_x,$src_y,
                          $des_w,$des_h,
                          $src_w,$src_h);
	 
	//展示	
	header("Content-Type:image/png");
	imagepng($des_img);
	
	//清理资源
	imagedestroy($des_img);
	imagedestroy($src_img);
	 
}
?>




