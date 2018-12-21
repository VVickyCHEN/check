<?php
namespace Admin\Controller;

use Think\Controller;

class ManagerController extends CommonController {

    // 管理员列表
    public function showlist(){
        // 查询管理员表的数据
        $manager=M('manager')->select();
        foreach ($manager as $key => $val){
            // 查询管理员的权限id
            $role_id=M('manager_role')->where(['manager_id'=>$val['id']])->field('role_id')->select();
            // 将查询到的id单独转成数组后去除重复项再转成字符串
            $role_id=implode(',',array_unique((array_column($role_id,'role_id'))));
            // 将查询到的角色id当成条件查询出角色名称
            $role_name=M('role')->where(['role_id'=>['in',$role_id]])->field('role_name')->select();
            // 将查询到的角色名称单独转成数组后去除重复项再转成字符串
            $role_name=implode(',',array_unique((array_column($role_name,'role_name'))));
            $manager[$key]['role_name']=$role_name;
        }
        $this->assign('manager',$manager);
        $this->display();
    }

    // 管理员添加
    public function append(){
        if(IS_AJAX){
            // 定义回调数组
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询需要操作的表
            $manager=D('manager');
            if($manager->create()){
                // 数据创建成功
                $manager_id=$manager->add();
                if($manager_id){
                    // 账号创建成功
                    $data['manager_id']=$manager_id;
                    $data['role_id']=$_POST['role_id'];
                    $manager_role=M('manager_role')->add($data);
                    if($manager_role){
                        // 管理员_权限表权限添加成功
                        $info['code']=1;
                        $info['error']=true;
                        $info['info']='管理员添加成功';
                        // 回调函数
                        $this->ajaxReturn($info);
                    } else {
                        // 管理员_权限表权限添加失败
                        $info['info']='管理员添加失败';
                        // 回调函数
                        $this->ajaxReturn($info);
                    }
                } else {
                    // 账号创建失败
                    $info['info']='账号创建失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据创建失败
                $info['info']=$manager->getError();
                // $info['info']='数据创建失败';
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            // 查询已有的权限角色
            $result=M('role')->select();
            $this->assign('result',$result);
            // 加载视图
            $this->display();
        }
    }

    // 管理员修改
    public function edit(){
        if(IS_AJAX){
            // 发生AJAX提交,定义回调数据
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询出需要操作的表
            $manager=D('manager');
            if($manager->create()){
                // 数据创建成功
                $update['id']=$_POST['id'];
                $update['username']=$_POST['username'];
                $update['nicheng']=$_POST['nicheng'];
                $update['email']=$_POST['email'];
                $update['phone']=$_POST['phone'];
                $update['gender']=$_POST['gender'];
                $update['status']=$_POST['status'];
                if($_POST['password']){
                    $password=crypt($_POST['password'],$_POST['lastpass']);
                    $update['password']=$password;
                } else {
                    $update['password']=$_POST['lastpass'];
                }
                $result=$manager->save($update);
                if($result || $result==0){
                    // 管理员表修改成功
                    $mid=$_POST['id'];
                    M('manager_role')->where(['manager_id='.$mid])->delete();
                    // $data['id']=$manager_role_id['id'];
                    $data['manager_id']=$_POST['id'];
                    $data['role_id']=$_POST['role_id'];
                    $manager_role=D('manager_role')->add($data);
                    if($manager_role){
                        // 管理员_角色表修改成功
                        $info['code']=1;
                        $info['error']=true;
                        $info['info']='管理员修改成功';
                        // 回调数组
                        $this->ajaxReturn($info);
                    } else {
                        // 管理员_角色表修改失败
                        $info['info']='管理员修改失败';
                        // 回调数组
                        $this->ajaxReturn($info);
                    }
                } else {
                    // 管理员表修改失败
                    $info['info']='管理员编辑失败';
                    // 回调数组
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据创建失败
                $info['info']=$manager->getError();
                // 回调数组
                $this->ajaxReturn($info);
            }
        }
        // 查询需要修改的数据
        $manager=M('manager as a');
        $data=$manager->join('manager_role as b on b.manager_id=a.id')->find(I('id'));
        $this->assign('data',$data);
        // 查询已有的权限角色
        $role=M('role')->select();
        $this->assign('role',$role);
        // 加载视图
        $this->display();
    }

    // 管理员停用
    public function admin_stop(){
        // 定义回调函数
        $info=['code'=>0,'error'=>true,'info'=>''];
        // 查询需要修改的项
        $manager=D('manager');
        $username=$manager->where('id='.I('id'))->getField('username');
        // 判断是否是超级账号
        if($username=='admin'){
            // 是超级账号,不可停用
            $info['info']='该账号是超级账号,不可停用';
        } else {
            // 不是超级管理员,可以停用
            $data['id']=I('id');
            $data['status']=0;
            $result=$manager->save($data);
            if($result){
                // 停用成功
                $info['code']=1;
                $info['error']=true;
                $info['info']='账号停用成功';
                // 回调函数
                $this->ajaxReturn($info);
            } else {
                // 停用失败
                $info['info']='账号停用失败';
                // 回调函数
                $this->ajaxReturn($info);
            }
        }
    }

    // 管理员启用
    public function admin_start(){
        // 定义回调函数
        $info=['code'=>0,'error'=>true,'info'=>''];
        // 查询需要修改的项
        $manager=D('manager');
        $data['id']=I('id');
        $data['status']=1;
        $result=$manager->save($data);
        if($result){
            // 启用成功
            $info['code']=1;
            $info['error']=true;
            $info['info']='账号启用成功';
            // 回调函数
            $this->ajaxReturn($info);
        } else {
            // 启用失败
            $info['info']='账号启用失败';
            // 回调函数
            $this->ajaxReturn($info);
        }
    }
}