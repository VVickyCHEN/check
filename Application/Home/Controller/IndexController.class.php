<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    private $_timestamp = '';
    private $_program = '';

    public function _initialize(){
        $this->_timestamp = M('timestamp');
        $this->_program = M('program');
    }

    public function index(){  
        $this->display();
    }

    public function index1(){
        // 先查询每日检修和周五检修
        $timestamp = $this->_timestamp->field('timestamp')->select();
        $this->assign('timestamp',$timestamp);
        $this->display();
    }

    public function index2(){  
        $this->display();
    }

    public function index3(){  
        $this->display();
    }

    public function index4(){  
        $this->display();
    }

    public function index5(){  
        $this->display();
    }

    public function phone(){  
        $this->display();
    }

    

   


}
