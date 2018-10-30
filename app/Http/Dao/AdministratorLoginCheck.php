<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:45
 */

namespace App\Http\Dao;


use App\Http\Common\RedisDriver;
use App\Libs\Helper\Func;
use Illuminate\Support\Facades\Cookie;

class AdministratorLoginCheck
{
    /**
     * @param $user_info
     * @return bool
     * @throws \Exception
     */
    public static function restoreLogin($user_info)
    {
        $status_token = Func::createToken();
        Cookie::queue('administrator',json_encode([
            'id' => $user_info['id'],
            'name' => $user_info['name'],
            'status_token' => $status_token,
        ]),TIME + 86400);
        $cache_key = RedisDriver::getInstance()->getCacheKey('hash.administrator_status_token');
        return (boolean)RedisDriver::getInstance()->redis->hset($cache_key, $status_token, true);
    }

    /**
     * @param $token
     * @return bool
     * @throws \Exception
     */
    public static function checkLogin($token)
    {
        $cache_key = RedisDriver::getInstance()->getCacheKey('hash.administrator_status_token');
        return (boolean)RedisDriver::getInstance()->redis->hexists($cache_key, $token);
    }

    /**
     * @param $token
     * @return bool
     * @throws \Exception
     */
    public static function destroyLogin($token)
    {
        Cookie::forget('administrator');
        $cache_key = RedisDriver::getInstance()->getCacheKey('hash.administrator_status_token');
        return (boolean)RedisDriver::getInstance()->redis->hdel($cache_key, $token);
    }
}