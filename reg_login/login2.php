<?php
    header('conten-type:text/html;charset=utf-8');
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_errno){
        die('CONNECT ERROR:'.$conn->connect_error);
    }else{
        // echo "ok";
    }
    $conn->set_charset('utf8');



    // **********
    session_start();
    $uname=$_POST['uname'];
    $upass=md5(md5($_POST['upass']));
    // include('dbconn.php');
    $sql="select * from sk_users where username='{$uname}' and password='{$upass}'";
    $check_query=$conn->query($sql);//结果集
    if($result=$check_query->fetch_array()){
        $_SESSION['uname']=$uname;
        $_SESSION['upass']=$upass;
        // echo json_encode($result);
        echo json_encode(array('uname'=>$uname));
    }else{
        exit('登录失败');
    }
