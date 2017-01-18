<?php
/*
 * 验证码制作的步骤
1、画布
2、文字
3、干扰
4、输出
5、清理
 */
//1、创建画布
//验证码的宽
$width = 80;
//验证码的高
$height = 30;
$img = imagecreatetruecolor($width,$height);
//创建验证码的背景色，浅色 颜色随机
$bgcolor = imagecolorallocate($img,rand(200,255),
		                           rand(200,255),
		                           rand(200,255));
//验证码的背景填充颜色
imagefill($img,0,0,$bgcolor);

//2、文字
$codes = "0123456789abcdefghijklmnopqrstuvwxyz";
$code = "";
$num = 4; //验证码的位数
for($i=0;$i<$num;$i++){	
	$color = imagecolorallocate($img,rand(0,100),rand(0,100),rand(0,100));
	$code = substr($codes,rand(0,strlen($codes)-1),1);
	//把获取到的文字写入到画布中
	$font = 5;
	$x = ($width/$num)*$i+5;//文字开始写的起点x轴坐标
	$y = rand(5,10); //文字开始写的起点y轴坐标
	imagestring($img,$font,$x,$y,$code,$color);
}
//3、干扰
//循环输出100个颜色随机的点

for($i=1;$i<=100;$i++){
	$color = imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
	
	imagesetpixel($img,rand(1,79),rand(1,29),$color);
}


//循环输出10条颜色随机的线
for($i=0;$i<10;$i++){
	$color = imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
	
	imageline($img,rand(1,79),rand(1,29),rand(1,79),rand(1,29),$color);
}







//4、输出
header("Content-Type:image/png");
imagepng($img);

//5、清理
imagedestroy($img);









?>