<?php 
namespace Admin\Controller;

use Think\Controller;

class RoleController extends Controller {

    // 角色列表页
    public function showlist(){ 
        // 查询角色表
        $result=M('role')->select();
        $this->assign('result',$result);
        // 加载视图
        $this->display();
    }

    // 角色添加
    public function append(){
        if(IS_AJAX){
            // 定义回调数组
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询角色表
            $role=D('role');
            if($role->create()){
                // 数据创建成功
                $role_id=$role->add();
                if($role_id){
                    // 角色表数据添加成功
                    $ids = I('ids');
                    if($ids){
                        // 提交过来的角色权限不为空，遍历数组
                        foreach (I('ids') as $val){
                            $data['role_id']=$role_id;
                            $data['auth_id']=$val;
                            // 将数据分条插入角色_权限表
                            M('role_auth')->add($data);
                        }
                        $info['code']=1;
                        $info['error']=true;
                        $info['info']='角色创建成功';
                        // 回调函数
                        $this->ajaxReturn($info);
                    } else {
                        // 提交过来的权限为空
                        $info['info']='角色权限不存在';
                        // 回调函数
                        $this->ajaxReturn($info);
                    }
                } else {
                    // 角色表数据添加失败
                    $info['info']='角色创建失败';
                }
            } else {
                // 数据创建失败
                $info['info']=$role->getError();
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            // 查询已有的权限
            $list=M('auth')->where(['auth_pid'=>0])->field('auth_id,auth_name')->select();
            foreach ($list as $key => $val){
                $list[$key]['son']=$this->get_auth($val['auth_id']);
            }
            $this->assign('list',$list);
            // 查询出整张表的数据
            $auth=M('auth')->select();
            $this->assign('auth',$auth);
            // 加载视图
            $this->display();
        }
    }

    // 角色修改
    public function edit(){
        if(IS_AJAX){
            // 定义回调数组
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询角色表
            $role=D('role');
            if($role->create()){
                // 数据创建成功
                $role_id=$role->save();
                if($role_id || $role_id==0){
                    // 角色表数据修改成功
                    $ids = I('ids');
                    if($ids){
                        $rid=$_POST['role_id'];
                        // 提交过来的角色权限不为空
                        M('role_auth')->where(['role_id='.$rid])->delete();
                        // 遍历数组
                        foreach (I('ids') as $val){
                            $data['role_id']=$rid;
                            $data['auth_id']=$val;
                            // 将数据分条插入角色_权限表
                            M('role_auth')->add($data);
                        }
                        $info['code']=1;
                        $info['error']=true;
                        $info['info']='角色修改成功';
                        // 回调函数
                        $this->ajaxReturn($info);
                    } else {
                        // 提交过来的权限为空
                        $info['info']='角色权限不存在';
                        // 回调函数
                        $this->ajaxReturn($info);
                    }
                } else {
                    // 角色表数据添加失败
                    $info['info']='角色修改失败';
                }
            } else {
                // 数据创建失败
                $info['info']=$role->getError();
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            // 查询已有的权限
            $list=M('auth')->where(['auth_pid'=>0])->field('auth_id,auth_name')->select();
            foreach ($list as $key => $val){
                $list[$key]['son']=$this->get_auth($val['auth_id']);
            }
            $this->assign('list',$list);
            // 查询出整张表的数据
            $auth=M('auth')->select();
            $this->assign('auth',$auth);
            // 查询需要修改的内容
            $role=M('role');
            $data=$role->find(I('id'));
            $this->assign('data',$data);
            $role_auth=M('role_auth')->where('role_id='.I('id'))->field('auth_id')->select();
            $this->assign('role_auth',$role_auth);
            $imp='';
            foreach ($role_auth as $val){
                $imp.=$val['auth_id'].',';
            }
            $imps=rtrim($imp,",");
            $this->assign('imps',$imps);
            // 加载视图
            $this->display();
        }
    }

    // 角色删除
    public function del(){
        // 定义回调数组
        $info=['code'=>0,'error'=>false,'info'=>''];
        // 查询需要操作的表
        $role=M('role');
        $result=$role->delete(I('id'));
        if($result){
            // 删除角色_权限表的权限
            $role_auth=M('role_auth')->where(['role_id='.I('id')])->delete();
            if($role_auth){
            // 角色_权限表权限删除成功
            $info['code']=1;
            $info['error']='true';
            $info['info']='权限删除成功';
            // 回调函数
            $this->ajaxReturn($info);
            } else {
                // 角色_权限表权限删除失败
                $info['info']='权限删除失败';
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            // 删除失败
            $info['info']='角色删除失败';
            // 回调函数
            $this->ajaxReturn($info);
        }
    }

    // 递归函数
    public function get_auth($pid=0,$data=array()){
        $result=M('auth')->where(['auth_pid'=>$pid])->field('auth_id,auth_name')->select();
        if($result){
            foreach ($result as $val){
                $data[]=$val;
                $this->get_auth($val['auth_id'],$data);
            }
        }
        return $data;
    }

}

?>
