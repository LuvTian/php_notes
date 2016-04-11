<?php


//数据库连接信息
$cfg_dbhost = 'localhost';//主机
$cfg_dbuser = 'root';//数据库用户名
$cfg_dbpwd = '';//数据库用户密码
$cfg_dbname = 'test';//数据库
$cfg_db_language = 'UTF8';



$con=new mysqli($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd,$cfg_dbname);//连接数据库
// var_dump($con);
if ($con->connect_error) {
    die("连接数据库失败 ".$con->connect_errno.'---'.$con->connect_error);
}

$con->query("SET NAMES $cfg_db_language");//设置数据库编码集
?>
