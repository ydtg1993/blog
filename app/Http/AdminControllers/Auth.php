<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22 0022
 * Time: 下午 4:05
 */

namespace App\Http\AdminControllers;


use App\Http\Model\Permissions;
use App\Libs\Helper\Func;
use HuangYi\Rbac\Models\Permission;
use HuangYi\Rbac\RbacTrait;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use phpDocumentor\Reflection\Types\Boolean;

class Auth extends Admin
{
    use RbacTrait;

    public function menu()
    {
        $path = dirname(PROJECT_ROOT_PATH) . DIRECTORY_SEPARATOR . 'app/Http/AdminControllers/*';
        $controllers = glob($path);

        $list = [];
        $permission_infos = Permissions::getAllWhere();
        if($permission_infos){
            $permission_infos = $permission_infos->toArray();
        }else{
            $permission_infos = [];
        }

        foreach ($controllers as $controller) {
            $class_name = str_replace('.php', '', basename($controller));
            $class = __NAMESPACE__ . '\\' . $class_name;
            $object = new \ReflectionClass($class);

            $methods = $object->getMethods(\ReflectionMethod::IS_PUBLIC);
            $traits = $object->getTraits();
            foreach ($traits as $trait){
                $m = $trait->getMethods();
            }

            foreach ($methods as $method) {
                $method_name = $method->getName();
                if ($method->isConstructor()) {
                    continue;
                }
                $declare_class = $method->getDeclaringClass();

                if($declare_class->name != $class){
                    continue;
                }

                $c_n_name = $class_name . '.' . $method_name;
                $permission_info_index = Func::multiQuery2ArrayIndex($permission_infos,['slug'=>$c_n_name]);
                if (is_int($permission_info_index)) {
                    $permission_info = $permission_infos[$permission_info_index];
                    $permission_infos[$permission_info_index]['exists'] = true;
                    $data = [
                        'id' => $permission_info['id'],
                        'name' => $permission_info['name'],
                        'slug' => $permission_info['slug'],
                        'description' => $permission_info['description'],
                        'access' => $permission_info['access'],
                        'view' => $permission_info['view']
                    ];
                } else {
                    $id = Permissions::add([
                        'controller'=>$class_name,
                        'name' => $c_n_name,
                        'slug' => $c_n_name,
                        'description' => '',
                        'access' => 0,
                        'view' => 0
                    ]);
                    $data = [
                        'id' => $id,
                        'name' => $c_n_name,
                        'slug' => $c_n_name,
                        'description' => '',
                        'access' => 0,
                        'view' => 0
                    ];
                }

                $list[$class_name][] = $data;
            }
        }

        foreach ($permission_infos as $permission_info){
            if (!isset($permission_info['exists'])){
                Permissions::delInfoWhere(['id'=>$permission_info['id']]);
            }
        }

        $this->data['list'] = $list;
        return view('admin/auth', $this->data);
    }

    public function upMenu()
    {
        if(self::$REQUEST->ajax()){
            $id = self::$REQUEST->input('id');

            $data = [];
            if(self::$REQUEST->has('name')){
                $data['name'] = self::$REQUEST->input('name');
            }
            if(self::$REQUEST->has('description')){
                $data['description'] = self::$REQUEST->input('description');
            }
            if(self::$REQUEST->has('view')){
                $data['view'] = (int)(boolean)self::$REQUEST->input('view');
            }
            Permissions::upInfoWhere($data,['id'=>$id]);

            return self::$RESPONSE->result(0);
        }
    }

    public function role()
    {

    }

}