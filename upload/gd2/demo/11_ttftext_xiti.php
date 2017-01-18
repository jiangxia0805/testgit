<?php
//GD库 文字
//1、创建画布
$img = imagecreatetruecolor(300,300);

//2、画
$green = imagecolorallocate($img,0,255,0);
$blue = imagecolorallocate($img,0,0,255);
//填充画布
imagefill($img,0,0,$green);
//输出文字
imagettftext($img,30,60,100,100,$blue,"simsun.ttc","你好");

//3、展示
header("Content-Type:image/png");
imagepng($img);



//4、销毁资源
imagedestroy($img);

?>







