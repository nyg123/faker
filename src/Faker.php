<?php

namespace Nyg\Faker;

class Faker
{

    /**
     * 生成随机姓名
     * @return string
     * @author 牛永光 nyg1991@aliyun.com
     * @date 2020/7/28 10:22
     */
    public static function name()
    {
        $last_name_arr = json_decode(file_get_contents(__DIR__ . '/last_name.json'));
        $last_name = $last_name_arr[array_rand($last_name_arr)];
        $first_name_arr = json_decode(file_get_contents(__DIR__ . '/first_name.json'));
        $first_name = $first_name_arr[array_rand($first_name_arr)];
        return $last_name . $first_name;
    }

    /**
     * 生成随机手机号
     * @return string
     * @author 牛永光 nyg1991@aliyun.com
     * @date 2020/7/28 10:27
     */
    public static function phone()
    {
        $arr = [
            133,
            149,
            153,
            173,
            177,
            180,
            181,
            189,
            199,
            130,
            131,
            132,
            145,
            155,
            156,
            166,
            171,
            175,
            176,
            185,
            186,
            166,
            135,
            136,
            137,
            138,
            139,
            147,
            150,
            151,
            152,
            157,
            158,
            159,
            172,
            178,
            182,
            183,
            184,
            187,
            188,
            198,
        ];
        return $arr[array_rand($arr)] . rand(10000000, 99999999);
    }
}