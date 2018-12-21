<?php 
namespace Admin\Model;

use Think\Model;

class StyleModel extends Model
{
	protected $_validate=array(

		array('style_name','require','款式名称不能为空')

		);
}


?>