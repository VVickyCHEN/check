<?php
namespace Home\Controller;

use Think\Controller;

class ExamController extends Controller {
    public function canvas(){
        $fileurl = $_POST['imgSrc'];

        $ting = $_POST['ting'];

        $user_id = session('user_id');

        $path = './Public/Admin/img/canvas';
   
        $filename = $user_id.$ting.'.jpg';

        // 先删除旧的照片在添加新的照片
        $del = unlink($path.'/'.$filename);

        $result = $this->getImage($fileurl,$path,$filename);   

        $update['user_id'] = $user_id;
        // 0是一号厅
        if($ting=='0'){
            $update['ting1img'] = $result['save_path'];
            M('user')->save($update);
        }
        if($ting=='1'){
            $update['ting2img'] = $result['save_path'];
            D('user')->save($update);
        }     
    }

public function getImage($url,$save_dir='',$filename='',$type=0){
    if(trim($url)==''){
        return array('file_name'=>'','save_path'=>'','error'=>1);
    }
    if(trim($save_dir)==''){
        $save_dir='./';
    }
    if(trim($filename)==''){//保存文件名
        $ext=strrchr($url,'.');
        if($ext!='.gif'&&$ext!='.jpg'){
            return array('file_name'=>'','save_path'=>'','error'=>3);
        }
        $filename=time().$ext;
    }
    if(0!==strrpos($save_dir,'/')){
        $save_dir.='/';
    }
    //创建保存目录
    if(!file_exists($save_dir)){
        mkdir($save_dir,0777,true);
    }
    //获取远程文件所采用的方法
    if($type){
        $ch=curl_init();
        $timeout=5;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
        $img=curl_exec($ch);
        curl_close($ch);
    }else{
        ob_start();
        readfile($url);
        $img=ob_get_contents();
        ob_end_clean();
    }
    //$size=strlen($img);
    //文件大小
    $fp2=@fopen($save_dir.$filename,'a');
    fwrite($fp2,$img);
    fclose($fp2);
    unset($img,$url);
    return array('file_name'=>$filename,'save_path'=>$save_dir.$filename,'error'=>0);
}

    public function kaoshi(){
        $ting = $_GET['ting'];
        // $this->ajaxReturn($ting);die;

        $user_id = session('user_id');

        $now = D('user')->where(['user_id'=>$user_id])->find();

        $data['examstatus'] = $now['examstatus'].','.$ting;
        $data['user_id'] = $user_id;

        $result = D('user')->save($data);

        // ajax返回拍照的图片
        if($ting=='0'){
            $img = ltrim($now['ting1img'],'.');
            $this->ajaxReturn($img);   
        }
        if($ting=='1'){
            $img = ltrim($now['ting2img'],'.');
            $this->ajaxReturn($img);  
        }
    }

	public function index(){
        // dump(session('user_id'));die;
        // 查看用户登录状态，返回学习情况
        $user_id = session('user_id');
        if(!empty($user_id)){

            // 获取用户头像
            $userimg = D('user')->where(['user_id'=>$user_id])->getField('user_img');
            $this->userimg=$userimg;

            // 查询会员的考试拍照图片
            $ting1img = D('user')->where(['user_id'=>$user_id])->getField('ting1img');
            $ting2img = D('user')->where(['user_id'=>$user_id])->getField('ting2img');

            $this->ting1img=$ting1img;
            $this->ting2img=$ting2img;

            // 考试情况
            $examstatus = D('user')->where(['user_id'=>$user_id])->getField('examstatus');
            $examstatus = ltrim($examstatus,',');
            $examstatus = explode(',',$examstatus);

            $kaoshistatus1 = in_array('0', $examstatus);

            $kaoshistatus2 = in_array('1', $examstatus);
            
            $this->assign('kaoshistatus1',$kaoshistatus1);
            $this->assign('kaoshistatus2',$kaoshistatus2);

            // 获取各个厅的画板和音频
            $this->hall();

            // 六个展厅的缩略图
            $hallimg = D('hallimg')->select();
            $this->assign('hallimg',$hallimg);

            // 查看用户登录状态，返回考试情况
            $index = A('index');
            $index->checkexam();

            $judge = D('judge')->select();
            $choice = D('choice')->select();

            $examlist = array_merge($judge,$choice);

            $randkey = array_rand($examlist,'2');

            $examone1 = $examlist[$randkey['0']];
            $examone2 = $examlist[$randkey['1']];

            $this->assign('examone1',$examone1);
            $this->assign('examone2',$examone2);
            
            $this->display();
        }else{
            $this->display('还没有登录，非法闯入！');die;
        }
		
	}

    // 各个展厅的画板查询
    public function hall(){
        // 展厅1的画板
        $hall1 = D('hall1');
        $result1 = $hall1->select();

        foreach($result1 as $k=>$v){

            $hallimg1 .="./".ltrim($v['hall1_img'],'.');
            $hallimg1 .=',';

            // 展厅1的音频
            $hall1mp3 .="./".ltrim($v['hall1_mp3'],'.');
            $hall1mp3 .=',';
        }

        $hallimg1 = rtrim($hallimg1,',');

        $this->assign('hallimg1',$hallimg1);

        $hall1mp3 = rtrim($hall1mp3,',');

        $this->assign('hall1mp3',$hall1mp3);

        // 展厅二的画板
        $hall2 = D('hall2');
        $result2 = $hall2->select();

        foreach($result2 as $k=>$v){

            $hallimg2 .="./".ltrim($v['hall2_img'],'.');
            $hallimg2 .=',';

            // 展厅二的音频
            $hall2mp3 .="./".ltrim($v['hall2_mp3'],'.');
            $hall2mp3 .=',';
        }

        $hallimg2 = rtrim($hallimg2,',');

        $this->assign('hallimg2',$hallimg2);

        $hall2mp3 = rtrim($hall2mp3,',');

        $this->assign('hall2mp3',$hall2mp3);
    }

    public function Text(){
        $exam = D("exam");

        $user_id = session("user_id");
        if(!empty($user_id)){
                // 第几个厅
                $ting = $_POST["ting"];

                // 拿到m_n即第几个画板
                $banhua = $_POST["tm_n"];

                // 储存user_id用于存入数据
                $data['user_id'] = $user_id;

                // 先查询该用户是否有学习记录 
                $exist = $exam->where(['user_id'=>$user_id])->find();

                // 如果ting是1，就吧当前画板id存进去tm_n1中
                if($ting==1){

                    // 如果该用户有记录，就修改，不然就添加
                    if(!empty($exist)){
                        // 获取该用户看过的画板
                        $tm_n1 = explode(',',$exist['tm_n1']);

                        // 判断当前画板是否已经看过
                        if(in_array($banhua, array_filter($tm_n1))){
                             $this->ajaxReturn('考试模式当前画板已经看过');
                        }else{
                            $data['tm_n1'] = $exist['tm_n1'].','.$banhua;
                            $result = $exam->where(['user_id'=>$user_id])->save($data);
                            $this->ajaxReturn('考试模式保存新数据');
                        }
                    }else{
                        $data['tm_n1'] = $banhua;
                        $result = $exam->add($data);
                        $this->ajaxReturn('考试模式新添加一条数据');
                    }
                    
                }
                if($ting==2){
                    $banhua = $banhua + 1;
                    
                    // 如果该用户有记录，就修改，不然就添加
                    if(!empty($exist)){
                        // 获取该用户看过的画板
                        $tm_n2 = explode(',',$exist['tm_n2']);

                        // 判断当前画板是否已经看过
                        if(in_array($banhua, $tm_n2)){
                            $this->ajaxReturn('考试模式当前画板已经看过');
                        }else{
                            $data['tm_n2'] = $exist['tm_n2'].','.$banhua;

                            $result = $exam->where(['user_id'=>$user_id])->save($data);
                            $this->ajaxReturn('考试模式保存新数据');
                        }
                    }else{
                        $data['tm_n2'] = $banhua;
                        $result = $exam->add($data);
                        $this->ajaxReturn('考试模式新添加一条数据');
                    }
                }
            }
    }

}