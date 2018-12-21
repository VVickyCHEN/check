<?php
namespace Admin\Controller;

use Think\Controller;

class AuthController extends CommonController {

    // 权限列表页
    public function showlist(){  
        // 调用递归
        $result=$this->get_auth();
        $this->assign('result',$result);
        // 加载视图
        $this->display();
    }

    // 权限添加
    public function append(){
        if(IS_AJAX){
            // 定义回调数组
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询要添加数据的表
            $auth=D('auth');
            if($auth->create()){
                // 将数据插入数据库
                $res=$auth->add();
                if($res){
                    // 数据添加成功
                    $info['info']='权限添加成功';
                    $info['code']=1;
                    $info['error']=true;
                    // 回调函数
                    $this->ajaxReturn($info);
                } else {
                    // 数据添加失败
                     $info['info']='权限添加失败';
                     // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据添加失败
                $info['info']=$auth->getError();
                // $info['info']='数据添加失败';
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            // 调用递归
            $result=$this->get_auth();
            $this->assign('result',$result);
            // 加载视图
            $this->display();
        }
    }

    // 权限修改
    public function edit(){
        if(IS_AJAX){
            // file_put_contents('qq.txt',I('auth_name'));
            // $this->ajaxReturn(I('post.'));
            // exit;
            // 定义回调数组
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询要修改数据的表
            $auth=D('auth');
            if($auth->create()){
                // 将数据插入数据库
                $result=$auth->save();
                if($result){
                    // 数据修改成功
                    $info['code']=1;
                    $info['error']=true;
                    $info['info']='权限修改成功';
                    // 回调函数
                    $this->ajaxReturn($info);
                } else {
                    // 数据添加失败
                     $info['info']='权限修改失败';
                     // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据添加失败
                $info['info']=$auth->getError();
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            // 查询需要修改的内容
            $auth=M('auth');
            $data=$auth->find(I('id'));
            $this->assign('data',$data);
            // 调用递归
            $result=$this->get_auth();
            $this->assign('result',$result);
            // 加载视图
            $this->display();
        }
    }

    // 权限删除
    public function del(){
        // 定义回调数组
        $info=['code'=>0,'error'=>false,'info'=>''];
        // 查询需要操作的表
        $auth=M('auth');
        $result=$auth->delete(I('id'));
        if($result){
            // 删除成功
            $info['code']=1;
            $info['error']='true';
            $info['info']='权限删除成功';
            // 回调函数
            $this->ajaxReturn($info);
        } else {
            // 删除失败
            $info['info']='权限删除失败';
            // 回调函数
            $this->ajaxReturn($info);
        }
    }

    // 递归获取父级权限
    public function get_auth($pid=0,$spac=0){
        // 定义一个空数组
        static $data=array();
        // 每下一级，自动缩进四个字符
        $spac+=4;
        $auth=M('auth');
        $result=$auth->where(['auth_pid'=>$pid])->field('auth_id,auth_name,auth_module,auth_controller,auth_action')->select();
        // 若是有下级
        if($result){
            foreach ($result as $val){
                $val['auth_name']=str_repeat('&nbsp;',$spac).'|--'.$val['auth_name'];
                $data[]=$val;
                $this->get_auth($val['auth_id'],$spac);
            }
        }
        // 返回数组
        return $data;
    }
}




?>
