<?php
/*
 * 1、创建一张150*150的画布。给画布填充背景色绿色。
 * 并在浏览器上输出。
 */ 
//1、创建画布
$img = imagecreatetruecolor(150,150);
//2、画
//创建颜色
$green = imagecolorallocate($img,0,255,0);
//填充画布
imagefill($img,0,0,$green);

//展示
header("Content-Type:image/png");
imagepng($img);


//4、回收资源
imagedestroy($img);
?>









