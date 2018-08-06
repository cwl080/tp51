<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------



//后台路由

Route::rule('/', 'admin/index/login', 'post|get');
//    Route::rule('loginout', 'admin/home/loginout', 'post');
Route::rule('loginout', 'admin/home/loginout', 'post');
Route::rule('adminlist', 'admin/admin/all', 'get');
Route::rule('adminadd', 'admin/admin/add', 'get|post');
Route::rule('adminstatus', 'admin/admin/status', 'post');
Route::rule('admindel', 'admin/admin/del', 'post');
Route::rule('devicelist', 'admin/device/all', 'get');
Route::rule('deviceadd', 'admin/device/add', 'get|post');
Route::rule('devicestatus', 'admin/device/status', 'post');
Route::rule('devicedel', 'admin/device/del', 'post');

/*
 * 加group的写法在输入url时要多加个 admin/adminlist 没有group只要 adminlist
 */
//Route::group('admin', function (){
//    Route::rule('/', 'admin/index/login', 'post|get');
////    Route::rule('loginout', 'admin/home/loginout', 'post');
//    Route::rule('loginout', 'home/loginout', 'post');
//    Route::rule('adminlist', 'admin/admin/all', 'get');
//    Route::rule('adminadd', 'admin/admin/add', 'get|post');
//    Route::rule('adminstatus', 'admin/admin/status', 'post');
//    Route::rule('admindel', 'admin/admin/del', 'post');
//    Route::rule('devicelist', 'admin/device/all', 'get');
//    Route::rule('deviceadd', 'admin/device/add', 'get|post');
//    Route::rule('devicestatus', 'admin/device/status', 'post');
//    Route::rule('devicedel', 'admin/device/del', 'post');
//
//});
//Route::get('think', function () {
//    return 'hello,ThinkPHP5!';
//});
//
//Route::get('hello/:name', 'index/hello');
//
//return [
//
//];
