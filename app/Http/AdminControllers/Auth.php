<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22 0022
 * Time: 下午 4:05
 */

namespace App\Http\AdminControllers;


use HuangYi\Rbac\RbacTrait;
use Illuminate\Http\Request;

class Auth extends Admin
{
    use RbacTrait;

    public function __construct(Request $request)
    {
        parent::__construct($request);

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