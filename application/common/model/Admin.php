<?php
/**
 * 后台登录验证器
 * Created by PhpStorm.
 * User: chenwenliang
 * Date: 2018/8/6
 * Time: 13:03
 */

namespace app\common\model;


use think\Model;
use think\model\concern\SoftDelete;

class Admin extends Model
{
    //软删除  //先查询在修改
    use SoftDelete;

    //登录校验
    public function login($data){
        //引用校验器
        $validate = new \app\common\validate\Admin();

        if(!$validate->scene('login')->check($data)){
            return $validate->getError();
        }

        //查询数据库中是否有该用户的存在
        $is_username=$this->where('username',$data['username'])->find();
        if(!$is_username){
            return '用户名错误!';
        }
        $result=$this->where($data)->find();
        if($result){
            //判断用户是否可用
            if($result['status'] != 1){
                return '此'.'账户被禁用';
            }
            //成功记录session
            $sessionData = [
                'id'        => $result['id'],
                'nickname'  =>  $result['nickname'],
                'is_super'  =>  $result['is_super']
            ];

            session('admin',$sessionData);
            return 1;
        }else{
            return '密码错误!';
        }
    }
}