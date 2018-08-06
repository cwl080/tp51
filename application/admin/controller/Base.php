<?php
/**
 * Created by PhpStorm.
 * User: chenwenliang
 * Date: 2018/8/6
 * Time: 15:30
 */

namespace app\admin\controller;


use think\Controller;

class Base extends Controller
{
    //过滤器，如果没有登录，不准访问后台
    public function initialize()
    {
        if(!session('?admin.id')){
            $this->redirect('admin/index/login');
        }
    }

}