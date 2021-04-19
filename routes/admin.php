<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| 后台公共路由部分
|
*/
Route::group(['namespace' => 'Admin\Auth'], function () {
    //登录、注销
    Route::get('login', 'LoginController@index')->name('admin.loginForm');
    Route::post('login', 'LoginController@login')->name('admin.login');
//    Route::get('logout', 'LoginController@logout')->name('admin.logout');
});

Route::group(['namespace' => 'Admin\Dashboard', 'middleware' => 'auth'], function (){
    Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');
});
