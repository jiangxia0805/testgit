<?php
//图片缩放
$filename = "../../dd.jpg"; //要缩放的图片文件名称

thumb($filename,80,80);
function thumb($filename,$des_w,$des_h){
	list($width,$height,$type) = getimagesize($filename);
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	$type_str = $type_array[$type];
	
	//拼装函数名称
	$fun_str_m = "imagecreatefrom";
	$fun_str = $fun_str_m.$type_str;
	
	$src_img = $fun_str($filename);
	//创建缩放后图片的资源，宽和高就是希望缩放到的宽度和高度
	$des_img = imagecreatetruecolor($des_w,$des_h);
	$des_x = 0;
	$des_y = 0;
	$src_x = 0;
	$src_y = 0;
	$src_w = $width;
	$src_h = $height;
	
	imagecopyresampled($des_img,$src_img,
                           $des_x,$des_y,
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




