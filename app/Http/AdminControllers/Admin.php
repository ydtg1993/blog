<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22 0022
 * Time: 下午 4:05
 */

namespace App\Http\AdminControllers;

use App\Http\Common\ResponseCode;
use App\Http\Controllers\Rely\Staticize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Admin
{
    public $data = [];
    public $administrator;
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
        $this->administrator = self::$REQUEST->session()->get('admin');
        if (!$this->administrator) {
            return Redirect::to(ADMIN_URI . '/login');
        }

        return view('admin/home');
    }

    public function login()
    {
        self::$REQUEST->session()->put('admin', 'hikki');
    }
}