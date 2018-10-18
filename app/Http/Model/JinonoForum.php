<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/18 0018
 * Time: 上午 11:57
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class JinonoForum extends Model
{
    public $timestamps = false;


    public static function findListWhere(array $where = [],$page = 1,$limit = 30,$order_by = 'id',$sort = 'ASC')
    {
        $page-=$page;
        $start = $page * $limit;
        return self::where($where)->offset($start)->limit($limit)->orderBy($order_by, $sort)->get();
    }

    /**
     * @param array $where
     * @return mixed
     */
    public static function getInfoWhere(array $where = [])
    {
        return self::where($where)->first();
    }

    /**
     * @param array $data
     * @param array $where
     * @return mixed
     */
    public static function upInfoWhere(array $data,array $where = [])
    {
        return self::where($where)->update($data);
    }
}