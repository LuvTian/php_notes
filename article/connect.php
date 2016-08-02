<?php
    require_once('config.php');
    // 连接数据库
    //赋值给一个连接标识符
    if(!($con=mysql_connect(HOST,USERNAME,PASSWORD))){
        echo mysql_error();
    }
    // 选择数据库
    if(!mysql_select_db('articles')){
        echo mysql_error();
    }
    // 设置字符集
    mysql_query('SET NAMES utf8');

?>
