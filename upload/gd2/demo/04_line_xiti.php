<?php
/* 
 * 2、 在上一题的绿色画布上，画一个十字交叉的图形，要
求线颜色为红色。
 */
//1、创建画布
$img = imagecreatetruecolor(300,300);
//2、画
$green = imagecolorallocate($img,0,255,0);
$red = imagecolorallocate($img,255,0,0);

//画布
imagefill($img,0,0,$green);
//画线
imageline($img,150,0,150,300,$red);
imageline($img,0,150,300,150,$red);









//3、展示
header("Content-Type:image/png");
imagepng($img);


//4、 释放资源
imagedestroy($img);









//3、展示
header("Content-Type:image/png");
imagepng($img);


//4、 释放资源
imagedestroy($img);
?>