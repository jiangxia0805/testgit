<?php
//GD库 点
/*
 * １、做一个300*300的绿色背景的画布。在画布的正中
间画一个红色的点。
 */
//1、创建画布 
$img = imagecreatetruecolor(300,300);
//2、画
$green = imagecolorallocate($img,0,255,0);
$red = imagecolorallocate($img,255,0,0);
//填充画布
imagefill($img,0,0,$green);
//点
imagesetpixel($img,150,150,$red);

//3、展示
header("Content-Type:image/gif");
imagegif($img); 


//4、释放资源
imagedestroy($img);

?>




