<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22 0022
 * Time: 下午 4:00
 */

namespace App\Http\AdminControllers;

use App\Http\Controllers\Rely\Staticize;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

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
}