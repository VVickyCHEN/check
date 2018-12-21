<?php 
namespace Admin\Model;

use Think\Model;

class CategoryModel extends Model
{
	protected $_validate=array(

		array('category_name','require','分类名称不能为空')

		);
}


?>