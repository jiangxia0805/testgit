<?php
//图片的旋转

$filename = "../../monkey.jpg";
rotate($filename,45);
function rotate($filename,$angle){
	/*
	 * imagerotate(resource $img,
	 * int $angle,int $bgcolor)
	 */
	list($width,$height,$type) = getimagesize($filename);
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	$type_str = $type_array[$type];
	
	$fun_str_m = "imagecreatefrom";
	$fun_str = $fun_str_m.$type_str;
	
	$img = $fun_str($filename);
	
	//创建背景色
	$bgcolor = imagecolorallocate($img,0,255,0);
	$des_img = imagerotate($img,$angle,$bgcolor);
	
	//展示
	header("Content-Type:image/png");
	imagepng($des_img);
	
	//清理资源
	imagedestroy($des_img);
	imagedestroy($img);
	
}

?>








