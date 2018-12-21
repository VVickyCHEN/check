<?php 
namespace Admin\Model;

use Think\Model;

class ProgramModel extends Model
{	
	// 静态自动验证
	protected $_validate=array(
		array('title','require','名称不能为空'),
		array('title','1,20','长度必须少于20',1,'length'),
		array('standard','require','检查标准不能为空'),	
		array('standard','1,20','长度必须少于20',1,'length'),

		);
	// 静态自动完成
	protected $_auto = array ( 
		array('created_at','gettime',1,'callback'),  
		array('updated_at','gettime',3,'callback'),  
	);

	public function gettime(){
		return date('Y-m-d');
	}



}

?>