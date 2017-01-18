<?php
//GD库 圆
//1、创建画布
$img = imagecreatetruecolor(300,300);
//2、画
$green = imagecolorallocate($img,0,255,0);
$red = imagecolorallocate($img,255,0,0);

//画布
imagefill($img,0,0,$green);
//画空心圆
imageellipse($img,150,150,300,300,$red);
//画实心的圆
imagefilledellipse($img,150,150,100,100,$red);



//3、展示
header("Content-Type:image/png");
imagepng($img);


//4、 释放资源
imagedestroy($img);
?>