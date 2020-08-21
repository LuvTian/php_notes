<?php
// 生成UUID v4版本的两种方法

/**
 * 生成UUID v4 版本 
 * 基于随机数
 * 参考 https://www.php.net/manual/en/function.uniqid.php#94959 https://uuid.ramsey.dev/en/latest/rfc4122/version4.html
 * @return string
 */
function uuidv4() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),

        // 16 bits for "time_mid"
        mt_rand(0, 0xffff),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand(0, 0x0fff) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand(0, 0x3fff) | 0x8000,

        // 48 bits for "node"
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}
$v4_uuid = uuidv4();
print("$v4_uuid\n");

// 第二种方法 Use more cryptographically strong algorithm to generate pseudo-random bytes and format it as GUID v4 string
// 使用加密性更强的算法生成伪随机字节并将其格式化为guidv4字符串
function uuid4($data){
    if (function_exists('uuid_create') === true){
        return uuid_create(4);
    }else{
        assert(strlen($data) == 16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
// echo uuid4(openssl_random_pseudo_bytes(16));
// echo uuid4(random_bytes(16)); // PHP7使用random_bytes()方法生成随机字节序列甚至更简单
// 推荐使用第二种方法
