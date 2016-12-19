<?php
    header('conten-type:text/html;charset=utf-8');
    require_once 'config.php';

    // **********
    session_start();
    $uname=$_POST['uname'];
    $upass=md5(md5($_POST['upass']));
    // include('dbconn.php');
    $sql="select * from sk_users where username='{$uname}' and password='{$upass}'";
    $check_query=$con->query($sql);//执行查询语句返回结果集
    if($check_query->num_rows==1){
        $_SESSION['uname']=$uname;
        $_SESSION['upass']=$upass;
        echo true;
    }else{
        exit('登录失败');
    }
    $check_query->free();//释放结果集
    $con->close();//关闭数据库连接
