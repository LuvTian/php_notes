<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @link    http://www.rehack.cn
 * @date    2016-05-24 09:37:26
 * @version $Id$
 */
header("Content-Type:text/html;charset=utf-8");

function getCity($ip){
    $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
    $ipjson=file_get_contents($url);
    echo $ipjson;
}

getCity($_SERVER["REMOTE_ADDR"]);
?>
