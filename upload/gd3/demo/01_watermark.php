<?php
//图片水印
$des_filename = "../../dd.jpg"; //大图片名称
$src_filename = "../../qq.png"; //小图片（水印图片）名称 
waterMark($des_filename,$src_filename);
function waterMark($des_filename,$src_filename){
	//获取大图资源
	$des_img = imagecreatefromjpeg($des_filename);
	$src_img = imagecreatefrompng($src_filename);
	$des_x = 50;
	$des_y = 50;
	$src_x = 0;
	$src_y = 0;
	$src_w = 22;
	$src_h = 25;
	
	
	imagecopy($des_img,$src_img,
                     $des_x,$des_y,
                     $src_x,$src_y,
                     $src_w,$src_h);
	//echo $src_h;exit;
	//输出
	header("Content-Type:image/png");
	imagepng($des_img);
	
	//清理资源
	imagedestroy($des_img);
	imagedestroy($src_img);
	 
}
?>






