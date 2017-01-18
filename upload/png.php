<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/12
 * Time: 11:49
 */
//把格式为GIF的图片转换成PNG格式
//1 获取到需要转换的文件
//3 转换
//4 保存
$dir ="./gif";//源文件的文件夹
$dir2 = "./png/";//修改后的文件夹
$arr = _file($dir);//
foreach($arr as $v){
    //echo $v."</br>";
    $v1 = basename($v);//获取文件名
    //echo $v1."</br>";
    $pos = strripos($v1, ".");//获取文件名前缀的长度
    //echo $pos."</br>";
    $nN = substr($v1, 0, $pos);//获取到文件名前缀
    //echo $nN ."</br>";
    $im = imagecreatefromgif($v);//载入gif图像资源
    //$image = imagepng($im);
    imagepng($im,"{$dir2}{$nN}.png");//以png格式输出并保存到指定目录下
    imagedestroy($im);//释放资源
    //copy($dir."/".$v1,$dir2."/".$v1);//将源文件copy到指定文件夹下
}
//获取目录下所有文件
function _file($dir){
    $files=array();//定义一个空数组来存放文件名
    if(is_file($dir)) {//判断给定文件名是否为一个正常的文件
        return $dir;
    }
    $data = opendir($dir);//打开目录
    if($data) {
        while(false !== ($file = readdir($data))) {
            if ($file != '.' && $file != '..') {//过滤掉.和..
                $filename = $dir . "/" . $file;//拼装目录路径
                //echo $filename."</br>";
                if(is_file($filename)) {//判断给定文件名是否为一个正常的文件
                    $files[] = $filename;//把获取到的文件名存入数组中
                }else {
                    echo "洗洗睡吧";
                }
            }
        }
        closedir($data);//关闭目录
    }
    return $files;
}

