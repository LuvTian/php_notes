<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-03-16 20:18:49
 * @version $Id$
 */
require_once 'config.php';

// 验证用户名
$uname = $_POST['uname'];

$select_sql = "select * from sk_users where username='{$uname}'";
// $insert_sql = "insert into  sk_users (username,password) values ('{$uname}','{$upass}')"; //定义插入sql语句

if (!empty($uname)) {
    $result = $con->query($select_sql); //执行查询sql 返回结果集(对象)
    if ($result->num_rows) {
        echo true;
    } else {
        echo false;
    }
} else {
    echo "请输入用户名";
}

$con->close(); //关闭数据库连接
