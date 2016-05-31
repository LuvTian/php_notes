<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @link    http://www.rehack.cn
 * @date    2016-05-24 09:37:26
 * @version $Id$
 */

/**
 * 调用淘宝ip地址查询接口，返回json数据
 * 访问限制：为了保障服务正常运行，每个用户的访问频率需小于10qps。
 * 详细请参看API主页：http://ip.taobao.com/
 */
header("Content-Type:text/html;charset=utf-8");

function getCity($ip){
    $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
    $ipjson=file_get_contents($url);
    echo $ipjson;
}

getCity($_SERVER["REMOTE_ADDR"]);
?>
