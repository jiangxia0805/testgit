<?php
//GD库 矩形
//1、创建画布
$img = imagecreatetruecolor(300,300);
//2、画
$green = imagecolorallocate($img,0,255,0);
$red = imagecolorallocate($img,255,0,0);

//画布
imagefill($img,0,0,$green);
//画空心矩形
imagerectangle($img,50,50,150,150,$red);
//画实心矩形
//3、 在上一题的画布上画一个实心的圆。
imagefilledrectangle($img,150,150,200,200,$red);




//3、展示
header("Content-Type:image/png");
imagepng($img);


//4、 释放资源
imagedestroy($img);
?>