<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends CommonController {

    public function index(){
    	// 获取session中的信息
    	$admin_id=session('admin_id');
    	$admin_name=session('admin_name');
    	// 查看登录的管理员拥有什么权限
		$role_id=M('manager_role')->where(['manager_id'=>$admin_id])->field('role_id')->select();
		// 将查到的role_id转换成字符串
		// array_column:返回数组某个单一值。implode:将数组拼接成字符串
		$role_ids=implode(',',array_column($role_id,'role_id'));
		// 定义where查询条件数组,查询出角色的所有权限id
		$where['role_id']=array('in',$role_ids);
		$auth_id=M('role_auth')->where($where)->field('auth_id')->select();
		// 将查到的权限id装换为字符串
		$auth_ids=implode(',',array_unique(array_column($auth_id,'auth_id')));
		// 通过auth_id去查询角色拥有的权限
		if($admin_name=='admin'){
			// 超级管理员
			$list=M('auth')->where(['auth_pid'=>0])->select();
			// 查询二级菜单
			foreach ($list as $k => $v){
				$where['auth_pid']=$v['auth_id'];
				$where['auth_type']=1;
				$list[$k]['son']=M('auth')->where($where)->select();
			}
		} else {
			// 不是超级管理员
			$where['auth_pid']=0;
			$where['auth_id']=array('in',$auth_ids);
			$list=M('auth')->where($where)->select();
			// 查询二级菜单
			foreach ($list as $k => $v){
				$where['auth_pid']=$v['auth_id'];
				$where['auth_type']=1;
				$where['auth_id']=array('in',$auth_ids);
				$list[$k]['son']=M('auth')->where($where)->select();
			}
		}
		$this->assign('list',$list);
    	// 加载视图
        $this->display();
    }

    public function welcome(){
    	// 加载视图
		$this->display();
	}
    
}