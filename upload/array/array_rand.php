<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/13
 * Time: 10:31
 */
var_dump(rand_arr(1,100,50));
function rand_arr($min,$max,$num){
    $Num = 0;//初始化一个变量
    $arr = array();//定义一个空数组
    if($num<=($max-$min)){//给定的$num值是否小于$max-$min 如果小于就死循环了
        while($Num<$num){//开始循环给$arr赋值
            $arr[] = mt_rand($min,$max);//存入随机数
            $arr = array_unique($arr);//删除数组中重复的值
            $Num = count($arr);//将数组个数存入
        }
    }else{
        echo "范围值不可取";
    }
    return $arr;
}