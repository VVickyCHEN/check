<?php
namespace Home\Controller;

use Think\Controller;

class ReadController extends Controller {

	public function index(){

        // 获取各个厅的画板和音频
        $Exam = A('exam');
        $Exam->hall();

        // 六个展厅的缩略图
        $hallimg = D('hallimg')->select();
        $this->assign('hallimg',$hallimg);

	$this->display();
	}

}