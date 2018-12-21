<?php 
namespace Admin\Model;

use Think\Model;

class LoginModel extends Model
{

	public function check($username,$password){
		//查询用户名是否存在
		$data=$this->where(array('username'=>$username))->find();
		if(isset($data)){
			//如果用户名存在,验证密码是否正确
			if(crypt($password,$data['password'])==$data['password']){
				// D('manager')->where(['id'=>$data['id']]);
				return $data;
			}else{
				return null;
			}
		}else{
			return null;
		}
	}
}

?>