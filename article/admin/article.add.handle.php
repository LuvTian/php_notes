<?php
    require_once('../connect.php');
    //把文章添加表单里的信息录入数据库
    // print_r($_POST);
    // 入库之前简单数据校验
    if(!(isset($_POST['title']) && !empty($_POST['title']))){
        echo "<script>alert('标题不能为空');window.location.href='article.add.php';</script>";
    }
    $title=$_POST['title'];
    $author=$_POST['author'];
    $description=$_POST['description'];
    $content=$_POST['content'];
    $dateline=time();

    $insertsql="INSERT article(title,author,description,content,dateline) VALUES('$title','$author','$description','$content','$dateline')";

    // echo $insertsql;
    if(mysql_query($insertsql)){//执行插入语句
        echo "<script>alert('文章发布成功');window.location.href='article.add.php';</script>";
    }else{
        echo "<script>alert('文章发布失败');window.location.href='article.add.php';</script>";
    }
?>
