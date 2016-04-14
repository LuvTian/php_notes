<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-04-14 20:50:01
 * @version $Id$
 */

// demo1
$arr1  = array("Volvo", "BMW", "Toyota");
$json1 = json_encode($arr1);

echo var_dump($json1); //string
echo "<br>";
echo $json1; //["Volvo","BMW","Toyota"]
echo "<br>------------------------------------------------------------------------------<br>";

// demo2
$arr2  = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
$json2 = json_encode($arr2);

echo var_dump($json2); //sring
echo "<br>";
echo $json2; //string {"a":1,"b":2,"c":3,"d":4,"e":5}
echo "<br>------------------------------------------------------------------------------<br>";

// demo3
$arr4 = array
    (
    array("Volvo", 100, 96),
    array("BMW", 60, 59),
    array("Toyota", 110, 100),
);
$json3 = json_encode($arr4);
echo var_dump($json3); //string
echo $json3; //[["Volvo",100,96],["BMW",60,59],["Toyota",110,100]]
echo "<br>------------------------------------------------------------------------------<br>";

// demo4
class Emp
{
    public $name      = "";
    public $hobbies   = "";
    public $birthdate = "";
}

$e            = new Emp();
$e->name      = "sachin";
$e->hobbies   = "sports";
$e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

echo var_dump($e); //object
echo "<br>";
echo json_encode($e); //{"name":"sachin","hobbies":"sports","birthdate":"08\/05\/1974 12:20:03 pm"}

/**
 * 总结：
 * 1.json_encode()函数是将一个php对象或数组转换成json字符串
 * 2.注意此函数执行成功返回的json格式的字符串类型（标准的json格式其实就是字符串），如果没有执行成功则返回false
 * 3.如果数组是索引数组，则返回方括号[]格式的字符串
 * 4.如果是对象或数组是关联数组，则返回大括号{}格式的字符串
 */
