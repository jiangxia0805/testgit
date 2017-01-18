<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/13
 * Time: 9:58
 */
var_dump(rand_array(99999,992,555));
function rand_array($min,$max,$num) {
    $Num = 0;//初始化一个变量
    $arr = array();//定义一个空数组
    if($num<=($max-$min)) {
        while ($Num < $num) {
            $arr[] = mt_rand($min, $max);//在一定范围内随机生成一个数放入数组中
            $Num = count($arr);//将数组的数量存入变量count中
        }
    }else{
        echo "范围值不可取";
    }
    return $arr;
}

