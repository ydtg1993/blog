<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/22 0022
 * Time: 下午 3:55
 */
$admin_url = '/'.ADMIN_URI;

Route::get($admin_url, 'Admin@index');
Route::get($admin_url . '/login', 'Admin@login');
