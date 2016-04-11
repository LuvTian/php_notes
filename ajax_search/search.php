<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-04-03 13:18:14
 * @version $Id$
 */
header("Content-type:text/html;charset=utf-8");

include_once('config.php');



$search=$_POST['search'];
$searchSql="select * from data where note like '%{$search}%'";

$searchResult=$con->query($searchSql);

while($searchArr=$searchResult->fetch_array()){//遍历结果集的数组

    foreach ($searchArr as $key => $value) {
        $searchArr[$key]=$value;
    }

    $arr[]=$searchArr;
}

if($search){
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}



$searchResult->free();//释放结果集
$con->close();//关闭数据库连接
