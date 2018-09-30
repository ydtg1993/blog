<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/30 0030
 * Time: 上午 9:20
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    public function index(Request $request)
    {
        return view('detail',[]);
    }
}