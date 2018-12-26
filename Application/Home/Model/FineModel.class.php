<?php 
namespace Admin\Model;

use Think\Model;

class FineModel extends Model
{	
	
	// 静态自动完成
	protected $_auto = array ( 
		array('created_at','gettime',1,'callback'),  
	);

	public function gettime(){
		return date('Y-m-d');
	}
}

?>