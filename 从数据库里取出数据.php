<?php
    /**
     * 从数据库里取出数据的代码片段
     */
    require_once "config.php";//引入连接数据库核心文件

    $sql="select * from tablename where title like '%php%' order by time desc limit 0,9";//定义一个查询sql语句，这里只举一个简单例子

    $results=$con->query($sql);//执行sql语句，返回结果集(object对象)，$con是在config.php里定义的

    // 代码片段一：
    $arr=array();
    while($row = $results->fetch_assoc()) //从结果集中取出每一行进行循环
    {
        // var_dump($row);
        $arr[]=$row;//把每一行赋给索引数组，得到的$arr的第二维只有关联数组
    }

    print_r($arr);//最后得到数组
    echo json_encode($arr);//可以把数组转换成json 返回给前端使用


    // 代码片段二：
    $arrs=array();
    while($row = $results->fetch_array()) //从结果集中取出每一行进行循环
    {
        // var_dump($row);
        $arrs[]=$row;//把每一行赋给索引数组,得到的$arrs的第二维是索引数组和关联数组的组合
    }
    foreach ($arr1 as $key => $value) {//遍历新的数组并去重，返回新数组,这一步有点多此一举的，因为用上面的fetch_assoc就可以直接得到没有重复项的数组。
        // echo $value;
        $arr[]=array_unique($value);//删除value值一样的项
    }

    print_r($arr);//最后得到数组
    echo json_encode($arr);//可以把数组转换成json 返回给前端使用




    $results-free();//释放结果集
    $con->close();//关闭连接数据库



    // 其实两段代码最大的区别就是fetch_array和fetch_assoc的区别：
    // mysql_fetch_array  从结果集中取得一行作为关联数组，或数字数组，或二者兼有
    // mysql_fetch_assoc 从结果集中取得一行作为关联数组
    // mysql_fetch_row  从结果集中取得一行作为枚举数组
    // SELECT 语句根据情况可以只查询需要的字段，不必使用*查询出所有字段
?>
