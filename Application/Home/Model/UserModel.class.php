<?php 
namespace Home\Model;

use Think\Model;

class UserModel extends Model
{	
	// 静态自动验证
	// protected $_validate=array(
	// 	array('user_username','','帐号已经存在！',0,'unique',1)
	// 	);

	// 静态自动完成
	protected $_auto = array ( 
		array('user_time','time',1,'function'),  
		array('user_password','crypt',3,'function')  
	);

	public function login_check($data){
		$result=$this->where(['user_username'=>$data['user_username']])->field('user_id,user_username,user_password')->find();
		if(!empty($result)){
			// 账号存在
			if(crypt($data['user_password'],$result['user_password'])==$result['user_password']){
				// 密码正确
				return $result;
			} else {
				// 密码错误
				return null;
			}
		} else {
			// 账号不存在
			return null;
		}
	}
}

?>