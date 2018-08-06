<?php
/**
 * Created by PhpStorm.
 * User: chenwenliang
 * Date: 2018/8/6
 * Time: 13:06
 */

namespace app\common\validate;


use think\Validate;

class Admin extends Validate
{
    //验证规则
    protected $rule=[
        'username|管理员账户' =>  'require',  //不为空
        'password|密码'       =>  'require',  //不为空
    ];

    //登录场景验证 类似前台的验证
    public function sceneLogin()
    {
        //要验证的部分
        return  $this->only([
            'username',
            'password'
        ]);
    }
}