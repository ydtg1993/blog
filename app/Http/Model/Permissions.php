<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/18 0018
 * Time: 上午 11:57
 */

namespace App\Http\Model;


class Permissions extends JinonoForum
{
    protected $table = 'permissions';

    public static function getAllInids(array $where = [],array $ids = [])
    {
        return self::where($where)
            ->whereIn('id',$ids)
            ->get();
    }
}