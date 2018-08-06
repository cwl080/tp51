<?php
/**
 * Created by PhpStorm.
 * User: chenwenliang
 * Date: 2018/8/6
 * Time: 23:14
 */

namespace app\admin\controller;


class Home extends Base
{
    /*
    * 退出
    */
    public function loginout(){
        session(null);
        if(session('?admin.id')){
            $this->error('退出失败');
        }else{
            $this->success('退出成功','admin/index/login');
        }
    }
}