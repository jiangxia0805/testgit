<?php 
//1、创建画布
$img = imagecreatetruecolor(150,150);
//2、画
//创建颜色
$green = imagecolorallocate($img,0,255,0);
//填充画布
imagefill($img,0,0,$green);

//3、保存图片
//imagegif($img,"green.gif");
//imagepng($img,"green.png");
imagejpeg($img,"green.jpg");


//4、回收资源
imagedestroy($img);
?>









