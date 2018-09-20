<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/20 0020
 * Time: 上午 10:26
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Stream\Stream;

class Home extends Controller
{
    public function index(Request $request)
    {
        var_dump(phpinfo());exit;
        Stream::start();
        $a = 100000;

        for ($i = 2; $i<$a;$i++)
        {
            $c = $i*2;
        }

        Stream::end();
    }
}