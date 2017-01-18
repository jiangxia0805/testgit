<?php
//在现有图片上画线
//1、获取图片资源
//７、在现有图片上画一条横线。
$filename = "dd.jpg";
$img = imagecreatefromjpeg($filename);
//2、画
$green = imagecolorallocate($img,0,255,0);
//划线

imageline($img,0,0,159,220,$green);

//3、输出
header("Content-Type:image/png");
imagepng($img);


//4、清理资源
imagedestroy($img);






?>


