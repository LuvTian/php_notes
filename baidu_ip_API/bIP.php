<?php
/**
 * @authors Rehack (565195693@qq.com)
 * @link    http://www.rehack.cn
 * @date    2016-05-24 09:37:26
 * @version $Id$
 */

header("Content-Type:text/html;charset=utf-8");


// 调用百度ip库API接口，返回json数据
function getCity($ip){
    $ch = curl_init();
    $url = 'http://apis.baidu.com/apistore/iplookupservice/iplookup?ip='.$ip;
    $header = array(
        'apikey: 换成你的apikey',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    // var_dump(json_decode($res));
    // echo json_encode(json_decode($res));
    echo $res;
}

getCity($_SERVER["REMOTE_ADDR"]);
// getCity("110.184.188.145");
?>
