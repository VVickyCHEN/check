<?php 
namespace Admin\Model;

use Think\Model;

class PlaceModel extends Model
{
	protected $_validate=array(

		array('place_name','require','产区名称不能为空')

		);
}


?>