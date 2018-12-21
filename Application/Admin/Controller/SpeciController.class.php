<?php
namespace Admin\Controller;

use Think\Controller;

class SpeciController extends CommonController {
    // 规格列表页
    public function showlist(){ 
        // 查询数据 
        $result=M('speci')->select();
        $this->assign('result',$result);
        // 加载视图
        $this->display();
    }

    // 规格添加
    public function append(){
        if(IS_AJAX){
            // 定义回调函数
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 实例化
            $speci=D('speci');
            // 创建数据
            if($speci->create()){
                // 添加数据
                $result=$speci->add();
                if($result){
                    // 写入数据成功
                    $info['code']=1;
                    $info['error']=true;
                    $info['info']='规格添加成功';
                    // 回调数据
                    $this->ajaxReturn($info);
                } else {
                    // 数据写入失败
                    $info['info']='规格添加失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                //失败
                $info['info']=$speci->getError();
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            //加载视图
            $this->display();
        }
    }

    // 规格修改
    public function edit(){
        if(IS_AJAX){
            // 定义回调函数
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 实例化
            $speci=D('speci');
            // 创建数据
            if($speci->create()){
                // 修改数据
                $result=$speci->save();
                if($result){
                    // 修改数据成功
                    $info['code']=1;
                    $info['error']=true;
                    $info['info']='规格修改成功';
                    // 回调数据
                    $this->ajaxReturn($info);
                } else {
                    // 数据修改失败
                    $info['info']='规格修改失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                //失败
                $info['info']=$speci->getError();
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            //查询需要修改的内容
            $speci=M('speci');
            $data=$speci->find(I('id'));
            $this->assign('data', $data);
            // 加载视图
            $this->display();
        }
    }

    // 规格删除
    public function del(){
        // 定义回调函数
        $info=['code'=>0,'error'=>false,'info'=>''];
        // 实例化
        $speci=M('speci');
        // 删除数据
        $result=$speci->delete(I('id'));
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
}

?>