<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-03-16 20:18:49
 * @version $Id$
 */

// 注册
$uname = $_POST['uname'];
// $uname = 'zb30402';
// $upass = md5(md5($_POST['upass']));
// $upass='';
// echo !empty($upass);

// echo $uname;

//数据库连接信息
$cfg_dbhost      = 'localhost'; //主机
$cfg_dbuser      = 'root'; //数据库用户名
$cfg_dbpwd       = ''; //数据库用户密码
$cfg_dbname      = 'test'; //数据库
$cfg_db_language = 'UTF8';

$con = new mysqli($cfg_dbhost, $cfg_dbuser, $cfg_dbpwd, $cfg_dbname); //连接数据库
// var_dump($con);
if ($con->connect_error) {
    die("连接数据库失败 " . $con->connect_errno . '---' . $con->connect_error);
}

$con->query("SET NAMES $cfg_db_language"); //设置数据库编码集

$select_sql = "select * from sk_users where username='{$uname}'";
// $insert_sql = "insert into  sk_users (username,password) values ('{$uname}','{$upass}')"; //定义插入sql语句

// echo $uname;
if (!empty($uname)) {
    $result = $con->query($select_sql); //执行查询sql 返回结果集(对象)
    // var_dump($result);
    // $arr    = $result->fetch_array(); //遍历结果集返回数组
    // echo "<pre>";
    // print_r($arr);
    if ($result->num_rows) {
        echo true;
    } else {
        echo false;
    }
} else {
    echo "请输入用户名";
}

$con->close(); //关闭数据库连接
