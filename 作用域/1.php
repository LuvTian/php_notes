<?php

// 案例一：
$num=2;
$a="数字 $num 哈哈！";

$flag=true;
if($flag){
    $num=4;
    echo $a; //这里结果为什么是数字 2 哈哈！   而我想在if里面改变$num的值，然后输出$a

}


// 上面的例子可以看出在if语句里面并不能改变变量$num的值，可以改写一下
//
// 改写一：
$num=2;
$a="数字 $num 哈哈！";

$flag=true;
if($flag){
    $num=4;
    $a="数字 $num 哈哈！"; //再次定义一下$a,但比较麻烦
    echo $a; //这里结果为数字 4 哈哈！

}

// 改写二：
function fn($num=2){
    $num=$num;
    $a="数字". $num ."哈哈";
    return $a;
}

$flag=true;
if($flag){
    $num=8;
    echo fn($num); //数字8哈哈
}


// 改写三：
class test
{
    private $num;
    function __construct()
    {
        $this->num = 3;
    }
    function test(){
        $flag = true;
        if($flag){
            $this->num = 4;
            $a = "数字$this->num";
            echo $a;
        }
    }
}

$test = new test();
echo $test->test(); //数字4

//测试的时候注释其他代码块
