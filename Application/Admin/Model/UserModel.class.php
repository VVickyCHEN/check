<?php 
namespace Admin\Model;

use Think\Model;

class UserModel extends Model
{	
	// 静态自动验证
	protected $_validate=array(
		array('user_username','require','用户名不能为空'),
		array('user_username','','帐号名称已经存在！',0,'unique',1),
		array('pass','user_password','确认密码与密码不一致',0,'confirm'), 
		// array('email','require','邮箱不能为空'),
		// array('email','email','邮箱格式不正确'),
		array('user_phone','require','手机不能为空'),
		array('user_phone','/^1[3|4|5|8][0-9]\d{8}$/','手机号码格式错误！','0','regex',1)
		);

	// 静态自动完成
	protected $_auto = array ( 
		array('user_time','time',1,'function'),  
		array('user_password','crypt',3,'function')  
	);

}

?>