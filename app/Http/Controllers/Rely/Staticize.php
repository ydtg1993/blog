<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/19 0019
 * Time: 下午 4:17
 */

namespace App\Http\Controllers\Rely;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Staticize
{
    const SUFFIX = '.html';
    protected $OBJ = null;
    protected $request = null;

    public function __construct(Controller $OBJ, Request $request)
    {
        $this->OBJ = $OBJ;
        $this->request = $request;
    }

    public function get()
    {
        $cm_name = basename($this->request->route()->getActionName());
        $prefix = $this->request->route('prefix');

        if (!$cm_name) {
            $cm_name = 'home';
        }

        if ($prefix) {
            $prefix = $prefix . DIRECTORY_SEPARATOR;
        }
        $file = PROJECT_ROOT_PATH . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . $prefix . $cm_name . self::SUFFIX;
        if (!is_file($file)) {
            return;
        }
        echo file_get_contents($file);
        exit(0);
    }

    public function make($blade = 'home')
    {
        $cm_name = basename($this->request->route()->getActionName());
        $prefix = $this->request->route('prefix');

        if ($prefix) {
            $prefix = $prefix . DIRECTORY_SEPARATOR;
        }
        $file = PROJECT_ROOT_PATH . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . $prefix . $cm_name . self::SUFFIX;

        $path = dirname($file);
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
            chmod($path, 0777);
        }

        if (is_file($file)) {
            unlink($file);
        }

        $content = view($blade, $this->OBJ->data)->__toString();
        file_put_contents($file, $content);
        echo $content;
        exit(0);
    }
}