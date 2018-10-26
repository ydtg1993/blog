<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22 0022
 * Time: 下午 4:05
 */

namespace App\Http\AdminControllers;


use HuangYi\Rbac\RbacTrait;

class Auth extends Controller
{
    use RbacTrait;

    public $data = [];

    /**
     * @var Staticize
     */
    public static $STATICIZE;

    /**
     * @var Request
     */
    public static $REQUEST;

    public function __construct(Request $request)
    {
        self::$REQUEST = $request;
    }

    public function index()
    {

    }

    public function addRole()
    {

    }

    public function upRole()
    {

    }
}