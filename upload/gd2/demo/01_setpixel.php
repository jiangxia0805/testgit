<?php
//GD库 点
//1、创建画布 
$img = imagecreatetruecolor(200,200);

//2、画
$yellow = imagecolorallocate($img,255,0,0);
$green =  imagecolorallocate($img,0,255,0);
//填充画布
imagefill($img,0,0,$yellow);
//画点
for($i=0;$i<100;$i++){
	imagesetpixel($img,rand(1,199),rand(1,199),$green);
}
//3、展示
header("Content-Type:image/gif");
imagegif($img); 


//4、释放资源
imagedestroy($img);

?>




