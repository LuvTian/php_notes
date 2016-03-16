<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-03-16 20:18:49
 * @version $Id$
 */


// 注册
$uname=$_POST['uname'];
$upass=md5(md5($_POST['upass']));

// echo $uname;

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

$insert_sql="insert into  sk_users (username,password) values ('{$uname}','{$upass}')";//定义插入sql语句
$con->query($insert_sql);//执行插入sql语句

$con->close();//关闭数据库连接

?>
