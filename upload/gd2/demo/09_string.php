<?php
//GD库 文字
//4、在上一题创建的画布上输出文字：hello world
//1、创建画布
$img = imagecreatetruecolor(300,300);
//2、画
$green = imagecolorallocate($img,0,255,0);
$blue = imagecolorallocate($img,0,0,255);
//填充画布
imagefill($img,0,0,$green);
//输出文字
$s = "hello world";
imagestring($img,5,150,150,$s,$blue);
//输出
header("Content-Type:image/png");
imagepng($img);


//4、释放资源
imagedestroy($img);
?>







