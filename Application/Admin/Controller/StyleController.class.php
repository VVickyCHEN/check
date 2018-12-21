<?php
namespace Admin\Controller;

use Think\Controller;

class StyleController extends Controller {

    // 款式列表页
    public function showlist(){   	
        $style=M('style');
        $result=$style->select();
        $this->assign('result',$result);
        $this->display();
    }

    // 款式添加
    public function append(){

        //若成功，接收AJAX发送过来的数据
        if(IS_AJAX){
            $info=['code'=>0,'error'=>false,'info'=>''];
            $style=D('style');
            if($style->create()){
                $result=$style->add();
                if($result){
                    // 写入数据成功
                    $info['code']=1;
                    $info['error']=true;
                    $info['info']='款式添加成功';
                    // 回调数据
                    $this->ajaxReturn($info);
                } else {
                    // 数据写入失败
                    $info['info']='款式添加失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                //失败
                $info['info']='款式创建失败';
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            $this->display();
        }
    }

    // 款式修改
    public function edit(){

        if(IS_AJAX){

            $info=['code'=>0,'error'=>false,'info'=>''];
            $style=D('style');

            if($style->create()){
                $result=$style->save();
                if($result){
                    // 修改数据成功
                    $info['code']=1;
                    $info['error']=true;
                    $info['info']='款式修改成功';
                    // 回调函数
                    $this->ajaxReturn($info);
                } else {
                    // 修改失败
                    $info['info']='款式修改失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据创建失败
                $info['info']='数据有误,请重新提交';
                // 回调函数
                $this->ajaxReturn($info);
            }
       } else {
         // 查询需要修改的数据
         $style=M('style');
         $data=$style->find(I('id'));
         $this->assign('data',$data);
         $this->display();
       }
    }

    // 款式删除
    public function del(){

        $info=['code'=>0,'error'=>false,'info'=>''];

        // 查询数据库
        $style=M('style');
        $result=$style->delete(I('id'));
        if($result){
            // 删除成功
            $info['code']=1;
            $info['error']='true';
            $info['info']='删除成功';
            // 回调函数
            $this->ajaxReturn($info);
        } else {
            // 删除失败
            $info['info']='删除失败';
            $this->ajaxReturn($info);
        }
    }
}

?>