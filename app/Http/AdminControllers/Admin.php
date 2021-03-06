<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22 0022
 * Time: 下午 4:05
 */

namespace App\Http\AdminControllers;

use App\Http\Common\RedisDriver;
use App\Http\Common\ResponseCode;
use App\Http\Controllers\Rely\Staticize;
use App\Http\Dao\UserActive;
use App\Http\Model\User;
use App\Libs\Helper\Func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class Admin
{
    public static $data = [
        'slug'=>'',
        'user_info'=>[],
        'navigation'=>[]
    ];

    /**
     * @var Staticize
     */
    public static $STATICIZE;

    /**
     * @var Request
     */
    public static $REQUEST;

    /**
     * @var
     */
    public static $RESPONSE;

    public function __construct(Request $request)
    {
        self::$REQUEST = $request;
        self::$RESPONSE = ResponseCode::getInstance();
    }

    public function index()
    {
        return view('admin/home',self::$data);
    }

    public function login()
    {
        if (self::$REQUEST->method() == 'POST') {
            $account = self::$REQUEST->input('account');
            $password = self::$REQUEST->input('password');

            $user = User::getInfoWhere(['account' => $account]);
            if ($user) {
                $pass = Func::packPassword($password, $user['token']);
                if ($user['password'] != $pass) {
                    UserActive::restore($user);

                    return Redirect::to(ADMIN_URI);
                }
            }
        }

        return view('admin/login');
    }
}