<?php
$data=[[2,3,2,5,7,8,3,8,7],["a",'a','b',"c","b","c"]];
foreach($data as $key=>$value){
	$info[]=array_unique($value);//二维数组去重
}
echo "<pre>";
var_dump($info);
