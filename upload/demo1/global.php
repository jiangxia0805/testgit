<?php
$a = 10;

function add(){
	global $a;
	$b=5;
	return $a+$b;
}
echo add();
?>