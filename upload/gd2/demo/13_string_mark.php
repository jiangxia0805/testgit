<?php
//在现有图片上输出水印文字
$filename = "dd.jpg";
//获取图片的描述信息
$fileInfo = getimagesize($filename);
$width = $fileInfo[0];
$height = $fileInfo[1];
//1、从现有图片上获取资源
$img = imagecreatefromjpeg($filename);
//2、画
$green = imagecolorallocate($img,0,255,0);
//写字
$font = 5;
//输出的字符串
$s = "hello dingdang";
//图片的宽度-(字符串的宽度+希望空开的距离）
$font_width = imagefontwidth($font);
$font_height = imagefontheight($font);
$x = $width-($font_width*strlen($s)+10);
//图片的高度-(文字的高度+希望空开的距离)
$y = $height-($font_height+10);

imagestring($img,$font,$x,$y,$s,$green);

//3、输出
header("Content-Type:image/png");
imagepng($img);


//4、清理资源
imagedestroy($img);















?>