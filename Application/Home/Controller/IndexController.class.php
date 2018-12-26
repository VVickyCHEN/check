<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    private $_timestamp = '';
    private $_program = '';
    private $_check = '';
    private $_login = '';

    public function _initialize(){
        $this->_timestamp = M('timestamp');
        $this->_program = M('program');
        $this->_check = M('check');
        $this->_login = M('login');
    }

    public function login()
    {
        if(IS_AJAX){

            $info=['code'=>0,'info'=>''];

            $data = $_POST;

            $base64 = $data['base64'];
            
            $path = './Public/Admin/img/canvas';
   
            $filename = time().'.jpg';

            $result = getImage($base64,$path,$filename);

            $login = D('login');
            $login -> create();

            $login -> name = $data['name'];
            $login -> check = $data['check'];
            $login -> user_img = $result['save_path'];
            $login -> created_at = date('Y-m-d');

            $insert = $login-> add();
            session('login_id',$insert);

            if($insert){
                $info['code']=1;
                $this->ajaxReturn($info);
            }else{
                $info['info']="登录失败";
                $this->ajaxReturn($info);
            }

        }

        // 如果已经登录了
        $login_id = session('login_id');
        if($login_id){
            $this->redirect('Index/index1');
        }
        $this->display();
    }

    public function load(){
        $this->display();
    }

    public function index(){  
        $this->display();
    }


    public function index1(){

        $login_id = session('login_id');

        // 先查询每日检修和周五检修
        $timestamp = $this->_timestamp->select();

        $nowdate = date('Y-m-d');

        // 根据检修时间段查找对应的program
        foreach ($timestamp as $key => $value) {

            $timestamp[$key]['program'] = $this->_program->where(['type'=>$value['timestamp']])->field('id,title,type')->select();
        }

        $this->assign('timestamp',$timestamp);
        // 根据工号id查询
    
        $this->display();
    }

    public function index2(){  
        $program_id = I('program_id');

        // 查询对应的检修详情
        $programdata = $this->_program->where(['id'=>$program_id])->field('id,title,img,standard')->find();

        $this->assign('programdata',$programdata);

        $this->display();
    }

    public function fine()
    {
        if(IS_AJAX)
        {
            $info = ["info"=>'',"code"=>'0'];

            $login_id = session('login_id');

            $program_id = I('program_id');

            $type = $this->_program->where(['id'=>$program_id])->getField('type');

            $created_at = date('Y-m-d');

            $check = D('check');
            $check->create();

            $check -> login_id=$login_id;
            $check -> program_id=$program_id;
            $check -> created_at=$created_at;
            $check -> type=$type;
            $create = $check->add();

            if($create)
            {
                $info['info'] = $program_id;
                $info['code'] = 1;
                $this->ajaxReturn($info);
            }else{
                $info['info'] = $this->geterror();
                $this->ajaxReturn($info);
            }
        
        }
    }

    public function index3(){  
        $program_id = $_GET['program_id'];
        $title = $this->_program->where(['id'=>$program_id])->getField('title');
        $this->assign('title',$title);
        $this->display();
    }

    public function index4(){ 
        $program_id = $_GET['program_id'];
        $title = $this->_program->where(['id'=>$program_id])->getField('title');
        $this->assign('title',$title);
        $this->display();
    }

    public function index5(){  
        $this->display();
    }

    public function iphone(){  

        $program_id = $_GET['program_id'];
        $this->assign('program_id',$program_id);

        $login_id = session('login_id');

        $title = $this->_program->where(['id'=>$program_id])->getField('title');

        $this->assign('title',$title);

        $this->display();
    }

    

   


}
