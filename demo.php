<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/28
 * Time: 15:39
 */
header("content-type:text/html;charset=utf-8");
//$str = "http://bz.cfsa.net.cn/staticPages/7904104F-3CD8-4F31-9C38-0FD3CCE3574B.html";
//$filename = " GB 13102-2010 食品安全国家标准 炼乳.pdf";
//$url =$str.'/'.$filename;
$url = "http://d.kpzip.com/kzsem/Kuaizip_Setup_sem_001.exe";
//$url = "https://health-products.canada.ca/dpd-bdpp/item-iteme.do?pm-mp=00034399";
$url=urldecode($url);//转译URL地址
$fname=basename("$url"); //返回路径中的文件名部分
//echo $fname;exit();
$str_name=pathinfo($fname);  //以数组的形式返回文件路径的信息
$extname=strtolower($str_name['extension']); //把扩展名转换成小写
$time=date("Ymd",time());
$upload_dir="./upload/";//上传的路径
$file_name=$time.rand(1000,9999).'.'.$fname;
$dir=$upload_dir.$file_name;//创建上传目录
if(!file_exists($upload_dir)){
    mkdir($upload_dir,0777,true);
}
$ch = curl_init($url);//
$fp = fopen($dir, "wb");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
$res=curl_exec($ch);//执行
curl_close($ch);//关闭cURL资源，并且释放系统资源
fclose($fp);
if($res){
    echo "下载成功";
}else{
    echo "下载失败";
}
//测试 git 原创推送不输入密码

///2.转换成对象（页面简单的不需要转换，直接用content的内容进行处理）
//$html = str_get_html($content);
//$listData=$html->find("#letter-focus .letter-focus-item");//$listData为数组对象


//3.获取列表信息，保存链接及需要使用到的内容在数据表里面，记录下完整路径


//4.读取采集完成的数据表，然后获取页面内容放入对应的字段内，更新
