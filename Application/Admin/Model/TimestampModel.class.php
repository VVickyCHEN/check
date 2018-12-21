<?php 
namespace Admin\Model;

use Think\Model;

class TimestampModel extends Model
{	
	// 静态自动验证
	protected $_validate=array(
		array('timestamp','require','字段不能为空'),
		array('timestamp','1,10','长度必须少于10',1,'length'),
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