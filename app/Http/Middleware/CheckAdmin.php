<?php

namespace App\Http\Middleware;

use App\Http\AdminControllers\Admin;
use App\Http\Dao\AdministratorLoginCheck;
use App\Http\Model\Permissions;
use App\Http\Model\RolePermission;
use App\Http\Model\UserRole;
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
        $administrator = (array)json_decode(Cookie::get('administrator'),true);
        if(!isset($administrator['status_token'])){
            return Redirect::to(ADMIN_URI . '/login');
        }
        $is_login = AdministratorLoginCheck::checkLogin($administrator['status_token']);
        if(!$is_login){
            return Redirect::to(ADMIN_URI . '/login');
        }
        Admin::$data['administrator'] = $administrator;

        //权限检查
        $user_role = UserRole::getInfoWhere(['user_id'=>$administrator['id']]);
        if(!$user_role){
            die('没有角色');
        }

        $request_info = $request->route()->getAction();;
        $slug = str_replace('@','.',basename($request_info['controller']));
        $permission = Permissions::getInfoWhere(['slug'=>$slug]);

        $auths = RolePermission::getAllWhere(['role_id'=>$user_role->role_id]);
        $auth_permission_ids = [];
        if($auths){
            $auth_permission_ids = array_column($auths->toArray(),'permission_id');
        }

        if($permission){
            if(!in_array($permission->id,$auth_permission_ids)){
                die('没有权限');
            }
        }else{
            die('需要超级管理员开通');
        }

        //权限导航
        $navigations = Permissions::getAllInids(['view'=>1,'access'=>0],$auth_permission_ids);
        Admin::$data['navigation'] = $navigations->toArray();

        return $next($request);
    }
}
