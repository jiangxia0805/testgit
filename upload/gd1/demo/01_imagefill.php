<?php
//1、创建画布
$img = imagecreatetruecolor(200,200);
//2、画
//创建颜色
$red = imagecolorallocate($img,255,0,0);
//填充画布
// imagefill(resource $img,int $x,int $y,int $color)
                              
imagefill($img,0,0,$red);

//3、展示/收藏
/*
 *  - 通知浏览器将要输出图片
    header("Content-Type:image/gif")
 */
header("Content-Type:image/gif");
//应用函数输出图片
imagegif($img);


//4、回收资源
imagedestroy($img);
?>









