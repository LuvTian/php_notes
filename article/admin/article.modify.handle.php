<?php
    require_once('../connect.php');
    //把文章添加表单里的信息录入数据库
    // print_r($_POST);
    // 入库之前简单数据校验
    if(!(isset($_POST['title']) && !empty($_POST['title']))){
        echo "<script>alert('标题不能为空');window.location.href='article.add.php';</script>";
    }
    $id=$_POST['id'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $description=$_POST['description'];
    $content=$_POST['content'];
    $dateline=time();

    $updatesql="UPDATE article SET title='$title',author='$author',description='$description',content='$content',dateline='$dateline' WHERE id=$id";

    if(mysql_query($updatesql)){
        echo "<script>alert('文章修改成功');window.location.href='article.manage.php';</script>";
    }else{
        echo "<script>alert('文章修改失败');window.location.href='article.manage.php';</script>";
    }
?>
