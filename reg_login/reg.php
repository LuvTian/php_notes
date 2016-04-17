<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-03-16 20:18:49
 * @version $Id$
 */
require_once 'config.php';

// 注册
$uname = $_POST['uname'];
$upass = md5(md5($_POST['upass']));

$select_sql = "select * from sk_users where username='{$uname}'";
$insert_sql = "insert into  sk_users (username,password) values ('{$uname}','{$upass}')"; //定义插入sql语句

// echo $uname;
if (!empty($uname) && !empty($upass)) {
    $result = $con->query($select_sql); //执行查询sql 返回结果集(对象)

    if (!($result->num_rows)) {
        echo "注册成功";
        $con->query($insert_sql);
    } else {
        // echo "用户被注册";
    }
} else {
    echo "请输入用户名";
}

$con->close(); //关闭数据库连接
