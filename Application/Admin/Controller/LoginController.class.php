<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function login(){
    	
    	//接收前台发送过来的数据
    	if(IS_AJAX){
            // file_put_contents('123.txt', I('username'));
            // $this->ajaxReturn(I('post.'));
    		//获取验证码
    		$verify = new \Think\Verify();
    		//判断验证码是否正确
    		$res=$verify->check(I('captcha'));

    	if($res){
    		//验证码正确
    		$msg=array();
    		$msg['state']='error';
    		//查询管理员表
    		$manager=D('manager');
    		//判断用户名密码是否正确
    		$username=$manager->where(array('username'=>I('username')))->find();
            if($username){
                // 账号存在
                if(crypt(I('password'),$username['password'])==$username['password']){
                    // 密码正确,查看该管理员是否启用
                    $map['username']=I('username');
                    $map['status']=0;
                    $status=$manager->where($map)->find();
                    if(!$status){
                		//用户名密码正确,将id与用户名保存到session中
                		session('admin_id',$username['id']);
                		session('admin_name',$username['username']);
                		//回调数据
                		$msg['code']=1;
                		$msg['info']='登录成功';
                		$msg['state']='success';
                		//发送数据到AJAX
                		$this->ajaxReturn($msg);
                	} else {
                        //验证码错误
                        $msg['code']=0;
                        $msg['info']='该管理员已被停用';
                        //发送数据到AJAX
                        $this->ajaxReturn($msg);
                	}
                } else {
                    // 密码错误
                    $msg['code']=0;
                    $msg['info']='密码错误';
                    //发送数据到AJAX
                    $this->ajaxReturn($msg);
                }
            } else {
                // 账号不存在
                $msg['code']=0;
                $msg['info']='该账号不存在';
                //发送数据到AJAX
                $this->ajaxReturn($msg);
            }
    	} else {
    			//验证码错误
    			$msg['code']=0;
    			$msg['info']='验证码错误';
    			//发送数据到AJAX
    			$this->ajaxReturn($msg);
    		}
    	}
        $this->display();
    }

    // 退出
    public function logout(){
        //清除session
        session(null);
        $this->redirect('Admin/Login/login');
    }

    //验证码
    public function verify() {

    	$config=array(

    		'fontSize' =>15,	             //字体大小
    		'useCurve'=>false,	             //虚线
    		'useNoise'=>false,	             //点
    		'length'=>4,	                 //字符数
            'codeSet'=>'0123456789',         //字符串
            'imageH'=>41,                    //高
    		// 'codeSet'=>'0123456789abcdefhijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',		    //字符串
    		);

    		$Verify = new \Think\Verify($config);

    		$Verify->entry();
    }
}

?>