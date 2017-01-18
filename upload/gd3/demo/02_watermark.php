<?php
//图片水印
$des_filename = "../../dd.jpg"; //大图片名称
$src_filename = "../../qq.png"; //小图片（水印图片）名称 
waterMark($des_filename,$src_filename);
function waterMark($des_filename,$src_filename){
	list($des_width,$des_height,$des_type) = getimagesize($des_filename);
	list($src_width,$src_height,$src_type) = getimagesize($src_filename);
	//图片格式和图片类型的对应关系
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	$des_type_str = $type_array[$des_type];
	$src_type_str = $type_array[$src_type];
	
	//拼接获取图片资源的函数
	$fun_str_m = "imagecreatefrom";
	$des_fun_str = $fun_str_m.$des_type_str;
	$src_fun_str = $fun_str_m.$src_type_str; 
	
	
	//获取大图资源
	$des_img = $des_fun_str($des_filename);
	$src_img = $src_fun_str($src_filename);
	//des_x = 大图片的宽度-（小图片的宽度+希望空开的距离）
	$des_x = $des_width-($src_width+10);
	//des_y = 大图片的高-（小图片的高+10)
	$des_y = $des_height-($src_height+10);
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






