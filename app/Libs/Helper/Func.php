<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/18 0018
 * Time: 下午 2:16
 */

namespace App\Libs\Helper;


class Func
{
    /**
     * @param $date
     * @return string
     */
    static function hourglassTime($date){
        $time = strtotime($date);
        $differ = TIME - $time;
        if($differ < 60){
            return $differ.' 秒前';
        }elseif ($differ < 3600){
            $minute = floor($differ / 60);
            return $minute.' 分钟前';
        }elseif ($differ < 86400){
            $hour = floor($differ / 3600);
            return $hour.' 小时前';
        }else{
            $day = floor($differ / 86400);
            return $day.' 天前';
        }
    }


}