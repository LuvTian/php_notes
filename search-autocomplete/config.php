<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @date    2016-04-24 21:14:19
 * @version $Id$
 */

$cfg_dbhost='localhost';
$cfg_dbuser='root';
$cfg_dbpwd='root';
$cfg_dbname='test';
$cfg_language='UTF8';
$cfg_dbprefix = '';//表前缀

$con=new mysqli($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd,$cfg_dbname);//连接数据库

if($con->connect_error){
    die("连接数据库失败 ".$con->connect_errno.'---'.$con->connect_error);
}
$con->query("SET NAMES $cfg_language");//设置数据库编码集
?>
