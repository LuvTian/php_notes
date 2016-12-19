<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-04-24 21:13:35
 * @version $Id$
 */

include_once "config.php";

$keywords=$_POST['keywords'];
// echo $keywords;
// $keywords='php';

$search_sql="select title from ".$cfg_dbprefix."article where title like '%".$keywords."%' order by click desc limit 0,9;";
// echo $search_sql;

$results=$con->query($search_sql);//执行sql查询语句，返回结果集


$arr1=array();
$arr=array();
while ($resultArr=$results->fetch_array()) {//循环结果集数组，赋给新的数组
    $arr1[]=$resultArr;
    // echo $resultArr['title'].'---';
}
foreach ($arr1 as $key => $value) {//遍历新的数组并去重，返回新数组
    // echo $value;
    $arr[]=array_unique($value);//删除value值一样的项
}


// 关闭资源
$results->free();
$con->close();

if($keywords){
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);//php5.6
}
