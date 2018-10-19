<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/20 0020
 * Time: 上午 10:26
 */

namespace App\Http\Controllers;


use App\Http\Controllers\Rely\Staticize;
use App\Http\Model\Resource;
use Illuminate\Http\Request;
use Stream\Stream;

class Home extends Controller
{
    public function index(Request $request)
    {
        $course_list = Resource::findListWithUser(['main_type' => Resource::MAIN_TYPE_COURSE], 1, 7);
        $note_list = Resource::findListWithUser(['main_type' => Resource::MAIN_TYPE_NOTE], 1, 7);

        $recent_list = Resource::findListWithUser(['type' => Resource::MAIN_TYPE_COURSE], 1, 7, 'resource.create_at', 'DESC');

        $this->data['course_list'] = $course_list;
        $this->data['note_list'] = $note_list;
        $this->data['recent_list'] = $recent_list;

        self::$STATICIZE->make('home');
    }
}