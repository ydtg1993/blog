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

class UserActive
{
    /**
     * @param $user_info
     * @return bool
     * @throws \Exception
     */
    public static function restore($user_info)
    {
        $token = Func::createToken();
        $data = json_encode([
            'name' => $user_info['name'],
            'token' => $token,
        ]);

        Cookie::queue('user', $data, TIME + 86400);
        $cache_key = RedisDriver::getInstance()->getCacheKey('active.user', $token);
        return (boolean)RedisDriver::getInstance()->redis->setex($cache_key, 3600, json_encode($user_info));
    }

    /**
     * @param $user_info
     * @return bool
     * @throws \Exception
     */
    public static function check(&$user_info)
    {
        $info = (array)json_decode(Cookie::get('user'), true);
        if (!isset($info ['token'])) {
            return false;
        }

        $cache_key = RedisDriver::getInstance()->getCacheKey('active.user', $info ['token']);
        $user_info = RedisDriver::getInstance()->redis->get($cache_key);

        if ($user_info == null) {
            return false;
        }

        $time = RedisDriver::getInstance()->redis->ttl($cache_key);
        if ($time < 1000) {
            RedisDriver::getInstance()->redis->setex($cache_key, 3600, $user_info);
        }

        $user_info = (array)json_decode($user_info);
        return true;
    }

    /**
     * @param $token
     * @return bool
     * @throws \Exception
     */
    public static function destroy($token)
    {
        Cookie::forget('administrator');
        $cache_key = RedisDriver::getInstance()->getCacheKey('active.user', $token);
        return (boolean)RedisDriver::getInstance()->redis->del($cache_key);
    }
}