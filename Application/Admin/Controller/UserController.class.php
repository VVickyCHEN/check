<?php
namespace Admin\Controller;

use Think\Controller;

class UserController extends CommonController {

    // 会员列表页
    public function showlist(){  
        // 三元运算符
        $p=isset($_GET['p'])?$_GET['p']:1;
        $list=M('user')->page($p,6)->order('user_id desc')->select();
        
        $this->assign('list',$list);
        // 查询条数
        $count=M('user')->count();
        $this->assign('count',$count);
        // 调用分页按钮
        $Page= new \Think\Page($count,6);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show=$Page->show();
        $this->assign('page',$show);
        // var_dump($list);
        // if(in_array('0',$list['0']['examstatus'])){echo '已完成';}else{echo '未完成';};die;
        // $count = count($list);
        // $this->count=$count;
        // $p = new \Think\Page($count, 4);
        // array_slice原理从数组的第*个元素开始取出，并返回数组中的其余元素  实现效果：获取每页的结果
        // $list = array_slice($list, $p->firstRow,$p->listRows);
        // $p -> setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        // $p -> setConfig('prev', '上一页');
        // $p -> setConfig('next', '下一页');
        // $p -> setConfig('last', '末页');
        // $p -> setConfig('first', '首页');
        // $p -> setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        // $p -> lastSuffix = false;
        // $page = $p->show();
        // $this->assign('page', $page);
        // $this->assign('list', $list);
        
        $this->display();
    }

    public function del(){
        // 定义回调函数
        $info=['code'=>0,'error'=>false,'info'=>''];
       
        // 删除数据
        $result=D('user')->delete(I('id'));
        if($result){
            // 删除成功
            $info['info']='删除成功';
            $info['error']='true';
            $info['code']='1';
            // 回调函数
            $this->ajaxReturn($info);
        } else {
            // 删除失败
            $info['info']='删除失败';
            $this->ajaxReturn($info);
        }
    }

    public function edit(){
        if(IS_AJAX){
            // 发生AJAX提交,定义回调数据
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询出需要操作的表
            $user=D('user');
            if($user->create()){
                // 数据创建成功
                $update['user_id']=I('user_id');
                $update['user_username']=I('user_username');
                $update['user_phone']=I('user_phone');
                $update['user_gender']=I('user_gender');
                $update['user_number']=I('user_number');

                if($_POST['user_password']){
                    $user_password=crypt($_POST['user_password'],$_POST['lastpass']);
                    $update['user_password']=$user_password;
                } else {
                    $update['password']=$_POST['lastpass'];
                }

                $banner = A('banner');
                $img=$banner->get_upload('user_img',$_FILES['imgfile']);
                if(empty($img)){
                    $update['user_img']=I('imageed');
                } else {
                    $update['user_img']=implode('',$img);
                }

                $result=$user->save($update);
                if($result){
                    
                    $info['code']=1;
                    $info['error']=true;
                    $info['info']='会员修改成功';
                    // 回调数组
                    $this->ajaxReturn($info);
                    
                } else {
                    // 管理员表修改失败
                    $info['info']='会员编辑失败';
                    // 回调数组
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据创建失败
                $info['info']=$user->getError();
                // 回调数组
                $this->ajaxReturn($info);
            }
        }
        // 查询需要修改的数据
        $user=M('user');
        $data=$user->find(I('id'));
        $this->assign('data',$data);
        // 加载视图
        $this->display();
    }

    

    public function append(){
        if(IS_AJAX){
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询要添加数据的表
            $user=D('user');
            if($user->create()){
                // 数据创建成功
                $user_id=$user->add();
                if($user_id){
                    $banner = A('banner');
                    $result=$banner->get_upload('user_img',$_FILES['imgfile']);

                    if(!empty($result)){

                        // 拿到user_id主键值
                        $data['user_id'] = $user_id;

                        $data['user_img']=implode('',$result);
                        // $data['user_time']=time();

                        $insert=$user->save($data);
                        
                        if($insert){
                            // 添加成功
                            $info['info']='添加成功';
                            $info['code']=1;
                            $info['error']=true;
                            // 回调函数
                            $this->ajaxReturn($info);
                        } else {
                            // 添加失败
                            $info['info']='添加失败';
                            // 回调函数
                            $this->ajaxReturn($info);
                        }
                    }else {
                        // 上传图片失败
                        $info['info']='图片上传失败';
                        // 回调函数
                        $this->ajaxReturn($info);
                            }
                }else {
                    // 账号创建失败
                    $info['info']='账号创建失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
                
            // 数据创建失败
            }else{
           // 数据创建失败
            $info['info']=$user->getError();
            // $info['info']='数据创建失败';
            // 回调函数
            $this->ajaxReturn($info);
            }
        // 没有发生阿贾克斯事件
        }else {
            // 加载视图
            $this->display();
        }
    }









}

?>