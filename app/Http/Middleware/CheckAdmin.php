<?php

namespace App\Http\Middleware;

use App\Http\AdminControllers\Admin;
use App\Http\Common\ResponseCode;
use App\Http\Dao\UserActive;
use App\Http\Model\Permissions;
use App\Http\Model\RolePermission;
use App\Http\Model\UserRole;
use App\Libs\Helper\Func;
use Closure;
use HuangYi\Rbac\RbacTrait;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class CheckAdmin
{
    use RbacTrait;

    /**
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        //登录检查
        $is_login = UserActive::check($user_info);
        if(!$is_login){
            return Redirect::to(ADMIN_URI . '/login');
        }
        Admin::$data['user_info'] = $user_info;

        //权限检查
        $user_role = UserRole::getInfoWhere(['user_id'=>$user_info['id']]);
        if(!$user_role){
            die('没有角色');
        }

        $request_info = $request->route()->getAction();;
        $slug = str_replace('@','.',basename($request_info['controller']));
        Admin::$data['slug'] = $slug;
        $permission = Permissions::getInfoWhere(['slug'=>$slug]);

        $auths = RolePermission::getAllWhere(['role_id'=>$user_role['role_id']]);
        $auth_permission_ids = array_column($auths,'permission_id');

        if($permission){
            if(!in_array($permission['id'],$auth_permission_ids)){
                if($request->ajax()){
                    return ResponseCode::getInstance()->result(4004);
                }
                die('没有权限');
            }
        }else{
            if($request->ajax()){
                return ResponseCode::getInstance()->result(4004);
            }
            die('需要超级管理员开通');
        }

        //权限导航
        $navigations = Permissions::getAllInIds(['view'=>1,'access'=>0],$auth_permission_ids);
        Admin::$data['navigation'] = Func::group2Array($navigations->toArray(),['controller']);


        return $next($request);
    }
}
