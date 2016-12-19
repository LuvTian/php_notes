<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-04-24 21:13:35
 * @version $Id$
 */

require_once "config.php";

$keywords=$_POST['keywords'];
// echo $keywords;
// $keywords='php';

$search_sql="select title from ".$cfg_dbprefix."article where title like '%".$keywords."%' order by click desc limit 0,9;";
//echo $search_sql."<br>";

$results=$con->query($search_sql);//执行sql查询语句，返回结果集

$i=0;
$arr=array();
while($row = $results->fetch_array())
{
    $i++;
    $arr[$i]['title'] = $row['title'];
    // $arr[$i]['click'] = $row['click'];
}

//关闭资源
$results->free();
$con->close();



if($keywords){
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);//php5.6
}
