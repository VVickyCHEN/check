<?php 
namespace Admin\Model;

use Think\Model;

class RegionModel extends Model
{
	protected $_validate=array(

		array('region_name','require','价格区间名称不能为空')

		);
}


?>