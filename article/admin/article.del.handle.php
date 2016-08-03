<?php
    require_once('../connect.php');

    $id = $_GET['id'];
    $deletesql="DELETE FROM article WHERE id=$id";
    if(mysql_query($deletesql)){
        echo "<script>alert('删除文章成功！');location.href='article.manage.php';</script>";
    }else{
        echo "<script>alert('删除文章失败！');location.href='article.manage.php';</script>";
    }
?>
