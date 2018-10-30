<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22 0022
 * Time: 下午 3:55
 */
$admin_url = '/'.ADMIN_URI;

Route::match(['get','post'],$admin_url . '/login', 'Admin@login');

$router->group(['middleware' => 'CheckAdminLogin'], function () use ($admin_url,$router) {
    $router->get($admin_url, 'Admin@index');
    $router->get($admin_url . '/auth/menu', 'Auth@menu');
    $router->post($admin_url . '/auth/upMenu', 'Auth@upMenu');
});