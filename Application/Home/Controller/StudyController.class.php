<?php
namespace Home\Controller;

use Think\Controller;

class StudyController extends Controller {

	public function index(){

		$studystatus = D("studystatus");

        $user_id = session("user_id");
        

        if(IS_POST){

            if(!empty($user_id)){
                // 第几个厅
                $ting = $_POST["ting"];

                // 拿到m_n即第几个画板
                $banhua = $_POST["m_n"];

                $data['user_id'] = $user_id;

                // 先查询该用户是否有学习记录 
                $exist = $studystatus->where(['user_id'=>$user_id])->find();
                
                // 如果ting是1，就吧当前画板id存进去m_n1中
                if($ting==1){
                    
                    // 如果该用户有记录，就修改，不然就添加
                    if(!empty($exist)){
                        // 获取该用户看过的画板
                        $m_n1 = explode(',',$exist['m_n1']);

                        // 判断当前画板是否已经看过
                        if(in_array($banhua, $m_n1)){
                             $this->ajaxReturn('学习模式的当前画板已经看过');
                        }else{
                            $data['m_n1'] = $exist['m_n1'].','.$banhua;

                            $result = $studystatus->where(['user_id'=>$user_id])->save($data);
                            $this->ajaxReturn('学习模式的保存新数据');
                        }
                    }else{
                        $result = $studystatus->add($data);
                        $this->ajaxReturn('学习模式的新添加一条数据');
                    }
                }
                if($ting==2){
                    $banhua = $banhua + 1;
                    
                    // 如果该用户有记录，就修改，不然就添加
                    if(!empty($exist)){
                        // 获取该用户看过的画板
                        $m_n2 = explode(',',$exist['m_n2']);

                        // 判断当前画板是否已经看过
                        if(in_array($banhua, $m_n2)){
                            $this->ajaxReturn('学习模式的当前画板已经看过');
                        }else{
                            $data['m_n2'] = $exist['m_n2'].','.$banhua;

                            $result = $studystatus->where(['user_id'=>$user_id])->save($data);
                            $this->ajaxReturn('学习模式的保存新数据');
                        }
                    }else{
                        $result = $studystatus->add($data);
                            $this->ajaxReturn('学习模式的新添加一条数据');
                    }
                }
            }
        }

        if(!empty($user_id)){
            $index = A('index');
            $index->check();

            // 获取各个厅的画板和音频
            $Exam = A('exam');
            $Exam->hall();

            // 六个展厅的缩略图
            $hallimg = D('hallimg')->select();
            $this->assign('hallimg',$hallimg);

            $this->display();
        }else{
        $this->display('还没有登录，非法闯入！');die;
        }
	}

}