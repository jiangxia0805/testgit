<?php
//GD库 画线
//1、创建画布 
$img = imagecreatetruecolor(200,200);
//2、画
$green = imagecolorallocate($img,0,255,0);
$red = imagecolorallocate($img,255,0,0);
//填充画布
imagefill($img,0,0,$green);
//画线
imageline($img,0,0,200,200,$red);

//3、展示
header("Content-Type:image/png");
imagepng($img);


//4、 释放资源
imagedestroy($img);
?>






