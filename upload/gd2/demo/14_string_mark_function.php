<?php
//在现有图片上输出水印文字
//$filename = "../../dd.jpg";
$filename = "../../index.png";
/*
 * 将文字水印功能封装到函数里面。
 * 要求背景图片可以为参数。
 * 水印文字可以为参数。
 */
$s = "hello world";
stringMark($filename,$s);
function stringMark($filename,$s){
	//获取图片信息
	$fileInfo = getimagesize($filename);
	$width = $fileInfo[0];
	$height = $fileInfo[1];
	$type = $fileInfo[2]; //图片的类型，整数 2
	//已知图片类型和图片格式的对应关系
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	//获取到了图片格式的文字形式	
	$type_str =$type_array[$type]; 
	
	//获取图片的资源
	$fun_str_m = "imagecreatefrom";
	$fun_str = $fun_str_m.$type_str;
	$img = $fun_str($filename);
	
	$green = imagecolorallocate($img,0,255,0);
	//画
	$font = 5;
	$font_width = imagefontwidth($font);
	$font_height = imagefontheight($font);
	$x = $width-($font_width*strlen($s)+10);
	$y = $height - ($font_height+10);
	imagestring($img,$font,$x,$y,$s,$green);
	
	//3、输出
	header("Content-Type:image/png");
	imagepng($img);
	
	
	//4、清理资源
	imagedestroy($img);
	
}















?>