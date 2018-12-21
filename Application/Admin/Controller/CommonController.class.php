<?php 
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller{
	public function __construct(){
		// 继承父类的控制器
		parent::__construct();
		// 当前需要去访问的控制器-方法
		$nowac=CONTROLLER_NAME.'-'.ACTION_NAME;
		// 定义未登录是可以被访问的方法
		$login_ac='login-login,login-logout,login-verify';
		// 获取保存到session中的管理员id与管理员账号
		$admin_id=session('admin_id');
		$admin_name=session('admin_name');
		// 若没登录且访问的不是login_ac中的方法,则跳会登录页
		// stripos:查找字符串在另一字符串中第一次出现的位置
		if(empty($admin_id) && stripos($login_ac,$nowac)===false){
			$js=<<<eof
			<script>
			$moduleurl=__MODULE__;
			window.top.location.href="{$moduleurl}/Login/login";
			</script>
eof;
			echo $js;
			$this->redirect('Login/login');
			exit;
		}
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
		// 定义查询条件通过权限id查询出权限
		$where=array();
		$where['auth_id']=array('in',$auth_ids);
		$list=M('auth')->where($where)->field("concat(auth_controller,'-',auth_action) as ids")->select();
		// 将查询结果转换为一维数组
		$list=array_column($list,'ids');
		// 清除不符合规格的结果
		foreach ($list as $k => $v){
			if($v=='-'){
				unset($list[$k]);
			}
		}
		// 将最终结果转换为字符串
		$allow_ac=implode(',',$list);
		// 如果是超级管理员，则不受限制
		if(!($admin_name=='admin')){
			$login_ac='Login-login,Login-logout,Login-verify,Index-index,Index-welcome';
			// 判断进入的是否是公共页面或权限页面
			if(stripos($allow_ac,$nowac)===false && stripos($login_ac,$nowac)===false){
				exit('没有权限访问！');
			}
		}
	}
}
