<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/12
 * Time: 15:29
 */
$img = './gif/timg.gif';
$im = imagecreatefromgif($img);
//$image = imagepng($im);
//输出
$str = "png";
//header("Content-Type:image/png");
$imge = imagepng($im,"./png/$str.png");


//4、释放资源
imagedestroy($im);


/*$this->im=imagecreatefromgif($this->SrcImg);
imagejpeg($this->im,$this->imgName.$this->Type);*/