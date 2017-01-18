<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/12
 * Time: 13:34
 */
$dir ="./gif";//源文件的文件夹
$dir2 = "./png";//修改后的文件夹
$arr = _file($dir);
foreach($arr as $v){
    $v1 = basename($v);//获取文件名
    copy($dir."/".$v1,$dir2."/".$v1);//将源文件copy到指定文件夹下
}
$arr2 = _file($dir2);
foreach($arr2 as $t){
    $pos = strripos($t, ".");//获取文件名前缀的长度
    //echo $pos."</br>";
    $nN = substr($t, 0, $pos);//获取到文件名前缀
    $new = $nN . ".png";//拼接新的文件名后缀
    //echo $nN . "</br>";
    rename($t,$new);//重命名文件
}
//获取目录下所有文件
function _file($dir){
    $files=array();//定义一个空数组来存放文件名
    if(is_file($dir)) {//判断给定文件名是否为一个正常的文件
        return $dir;
    }
    $handle = opendir($dir);//打开目录
    if($handle) {
        while(($file = readdir($handle))!== false) {//开始循环获取目录下的文件
            if ($file != '.' && $file != '..') {//过滤掉.和..
                $filename = $dir . "/" . $file;//拼装目录路径
                if(is_file($filename)) {//判断给定文件名是否为一个正常的文件
                    $files[] = $filename;//把获取到的文件名存入数组中
                }else {
                    echo "洗洗睡吧";
                }
            }
        }
        closedir($handle);
    }
    return $files;
}

