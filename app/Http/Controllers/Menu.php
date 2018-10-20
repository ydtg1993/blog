<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/15 0015
 * Time: 下午 3:08
 */

namespace App\Http\Controllers;

class Menu extends Controller
{
    public function index()
    {
        return view('menu',[]);
    }


}