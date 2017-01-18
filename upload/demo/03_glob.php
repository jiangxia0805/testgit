<?php
//glob遍历目录
$filename = glob("E:/PSD1606/*"); 
foreach($filename as $value){
	echo $value."<br/>";
}

?>