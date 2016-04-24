<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-04-24 21:13:35
 * @version $Id$
 */

include_once "config.php";

$keywords=$_POST['keywords'];
echo $keywords;
// $keywords='php';

$search_sql="select * from ".$cfg_dbprefix."article where title like '%".$keywords."%' order by click desc limit 0,9;";
// echo $search_sql;

$results=$con->query($search_sql);//执行sql查询语句，返回结果集

// $num=$
while($resultArr=$results->fetch_array()){
    foreach ($resultArr as $key => $value) {
        $resultArr[$key]=$value;
    }
    $arr[]=$resultArr;
}
// echo $arr;
// print_r($arr);
// if($keywords){
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);//php5.6
    echo "1";
// }
