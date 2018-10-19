<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Rely\Staticize;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $data = [];

    /**
     * @var Staticize
     */
    public static $STATICIZE;

    public function __construct(Request $request)
    {
        self::$STATICIZE = new Staticize($this,$request);
        self::$STATICIZE->get();
    }
}
