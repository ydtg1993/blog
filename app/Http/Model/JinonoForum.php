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

    public static function add(array $data)
    {
        return self::insertGetId($data);
    }

    public static function findListWhere(array $where = [],$page = 1,$limit = 30,$order_by = 'id',$sort = 'ASC')
    {
        $page-=$page;
        $start = $page * $limit;
        $data = self::where($where)->offset($start)->limit($limit)->orderBy($order_by, $sort)->get();
        if($data){
            return $data->toArray();
        }

        return [];
    }

    public static function getAllWhere(array $where = [])
    {
        $data = self::where($where)->get();
        if($data){
            return $data->toArray();
        }

        return [];
    }

    /**
     * @param array $where
     * @return mixed
     */
    public static function getInfoWhere(array $where = [])
    {
        $data = self::where($where)->first();
        if($data){
            return $data->toArray();
        }

        return [];
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

    public static function upInfoInWhere(array $data,array $where = [],$flied = '')
    {
        return self::whereIn($flied,$where)->update($data);
    }

    public static function delInfoWhere(array $where)
    {
        return self::where($where)->delete();
    }


}