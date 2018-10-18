<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/30 0030
 * Time: 上午 9:20
 */

namespace App\Http\Controllers;

use App\Http\Model\Resource;
use App\Http\Model\User;
use Illuminate\Http\Request;

class Detail extends Controller
{
    public function index(Request $request)
    {
        $key = $request->route('key');
        $info = Resource::getInfoWhere(['secret_key'=>$key]);
        $author = User::getInfoWhere(['id'=>$info->author_id]);

        $this->data['info'] = $info;
        $this->data['author'] = $author;
        return view('detail',$this->data);
    }
}