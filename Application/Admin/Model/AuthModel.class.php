<?php 
namespace Admin\Model;

use Think\Model;

class AuthModel extends Model
{	
	// 静态自动验证
	protected $_validate=array(
		array('auth_name','require','权限名称不能为空'),
		// array('auth_name','/^[\u4E00-\u9FA5]{1,9}$/','权限名称只能是中文，且为1到9位'),
		array('auth_module','require','应用名称不能为空')
		);
}

?>