<?php 
namespace Admin\Model;

use Think\Model;

class ProductModel extends Model
{	
	// 静态自动验证
	protected $_validate=array(
		array('product_name','require','产品名称不能为空'),
		array('product_detail','require','产品详情不能为空')
		);

	// 静态自动完成
	protected $_auto=array(
		array('product_ctime','time',1,'function')
		);
}

?>