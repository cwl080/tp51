<?php
/**
 * 登录控制器
 * Created by PhpStorm.
 * User: chenwenliang
 * Date: 2018/8/6
 * Time: 11:12
 */

namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    /*
     * 重复登录过滤
     * 如果已经登录。通过重定向输出，返回到对应的页面
     */
    public function initialize()
    {
        if(session('?admin.id')){
            $this->redirect('admin/admin/all');
        }
    }

    /*
     * 登录
     */
    public function login(){
        //判断是否是Ajax请求
        if(request()->isAjax())
        {
            $data = [
                'username' => input('post.username'),
                'password' => input('post.password')
            ];
            //进行验证
            $result =  model('Admin')->login($data);
            //验证完，返回信息
            if($result == 1){
                $this->success('登录成功！','admin/admin/all');
            }else{
                $this->error($result);
            }
        }
        return view();
    }


}