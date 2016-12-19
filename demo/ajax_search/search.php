<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-04-03 13:18:14
 * @version $Id$
 */
header("Content-type:text/html;charset=utf-8");

require_once 'config.php';



$keywords=$_POST['keywords'];
$searchtype=$_POST['searchtype'];
// echo $searchtype;


// $search='房';
$searchSql="select * from data where {$searchtype} like '%{$keywords}%'";

$searchResult=$con->query($searchSql);

while($row=$searchResult->fetch_assoc()){//从结果集中取出每一行进行循环
    // var_dump($row);
    $arr[]=$row;
}
// echo "<pre>";
// print_r($arr);
// die;
if($keywords){
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}

$searchResult->free();//释放结果集
$con->close();//关闭数据库连接
