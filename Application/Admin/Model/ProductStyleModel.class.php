<?php 
namespace Admin\Model;

use Think\Model;

class ProductStyleModel extends Model
{	
	// 静态自动验证
	protected $_validate=array(
		array('product_num','require','款式库存不能为空'),
		array('product_num','/^[1-9]\d*$/','产品库存必须为数字'),
		array('product_price','require','款式价格不能为空'),
		array('product_price','/^([1-9][0-9]*)+(.[0-9]{1,2})?$/','产品价格必须为数字'),
		array('style_id','require','请选择款式')
		);
}

?>