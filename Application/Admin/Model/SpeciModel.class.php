<?php 
namespace Admin\Model;

use Think\Model;

class SpeciModel extends Model
{
	protected $_validate=array(

		array('speci_name','require','规格名称不能为空')

		);
}


?>