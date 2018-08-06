<?php
/**
 * 管理员控制器
 * Created by PhpStorm.
 * User: chenwenliang
 * Date: 2018/8/6
 * Time: 10:48
 */

namespace app\admin\controller;




class Admin extends Base
{
    /*
     *  显示所有的管理员
     */
    public function all(){
        $admins = model('Admin')->order(['is_super' => 'asc', 'status' => 'asc'])->paginate(10);
        $viewData = [
            'admins' => $admins
        ];
        $this->assign($viewData);
        return view();
    }

    /*
     *  添加管理员
     */
    public function add(){
        return view();
    }

    /*
     * 管理员的状态
     */
    public function status(){
        if(request()->isAjax){
            $data = [
                'id'        => input('post.id'),
                'status'    => input('post.status') ? 0 : 1,
            ];
            $adminInfo = model('Admin')->find($data['id']);
            $adminInfo->status = $data['status'];
            $result = $adminInfo->save();
            if($result){
                $this->success('操作成功');
            }else{
                $this->error('操作失败');
            }
        }
//        return view();
    }

    /*
     * 管理员的删除
     */
    public function del(){
        return view();
    }
}