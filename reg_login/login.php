




<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-03-16 20:18:49
 * @version $Id$
 */



session_start();

// 登录
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

$login_sql="select * from sk_users where username='{$uname}'";//定义查询sql语句
$result=$con->query($login_sql);//执行查询sql语句返回结果集
$num=$con->affected_rows;//查询结果所影响的行数
if($num){//$num>0 说明查询到了，也就是用户存在
    $row=$result->fetch_array();//遍历结果集，返回数组
    if($upass===$row['password']){//用户输入的密码与数据库的密码进行对比
        // echo "登录成功";
        // header("location:index.php");
        $_SESSION['uname']=$uname;
        $_SESSION['upass']=$upass;
        echo json_encode($row);
    }else{
        exit("密码错误");
        echo "<a href='login.html'>返回登陆页面</a>";
    }
}else{
    echo "用户不存在";
    echo "<a href='login.html'>返回登陆页面</a>";
}
$result->free();//释放结果集
$con->close();//关闭数据库连接

?>



