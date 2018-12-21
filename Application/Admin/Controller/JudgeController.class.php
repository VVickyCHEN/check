<?php
namespace Admin\Controller;

use Think\Controller;

class JudgeController extends CommonController{

    public function showlist(){
        // 三元运算符
        $p=isset($_GET['p'])?$_GET['p']:1;
        // 查询表单数据
        $list=M('judge')->page($p,6)->order('judge_id desc')->select();
        $this->assign('list',$list);
        // 查询条数
        $count=M('judge')->count();
        $this->assign('count',$count);
        // 调用分页按钮
        $Page= new \Think\Page($count,6);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show=$Page->show();
        $this->assign('page',$show);
        // 加载视图
        $this->display();
    }

    public function append(){
        if(IS_AJAX){
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询要添加数据的表
            $judge=D('judge');
            if($judge->create()){
                // 添加数据
                $judge-> judge_time = time();
                $insert=$judge->add();
                if($insert){
                    // 添加成功
                    $info['code']=1;
                    $info['error']=true;
                    $info['info']='答题添加成功';
                    // 回调函数
                    $this->ajaxReturn($info);
                } else {
                    // 添加失败
                    $info['info']='答题添加失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据添加失败
                $info['info']='数据创建失败';
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            // 加载视图
            $this->display();
        }
    }

    public function edit(){
        if(IS_AJAX){
             // 定义回调数组
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询要添加数据的表
            $judge=D('judge');
            if($judge->create()){
                // 获取数据
                $data['judge_content']=I('judge_content');
                $data['judge_true']=I('judge_true');
                // 修改数据
                $update=M('judge')->where(['judge_id'=>I('judge_id')])->save($data);
                if($update){
                    // 修改成功
                    $info['code']=1;
                    $info['error']=true;
                    $info['info']='答题修改成功';
                    // 回调函数
                    $this->ajaxReturn($info);
                } else {
                    // 修改失败
                    $info['info']='答题修改失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据添加失败
                $info['info']='数据创建失败';
                // 回调函数
                $this->ajaxReturn($info);
            }
        }else{
            // 查询数据
            $judge=M('judge');
            $data=$judge->find(I('id'));
            $this->assign('data',$data);
            // 加载视图
            $this->display();
        }
    }

    public function del(){
        // 定义回调数组
        $info=['code'=>0,'error'=>false,'info'=>''];
        // 实例化
        $judge=M('judge');
        // 删除数据
        $del=$judge->delete(I('id'));
        if($del){
            // 删除成功
            $info['code']=1;
            $info['error']=true;
            $info['info']='删除成功';
            // 回调函数
            $this->ajaxReturn($info);
        } else {
            // 删除失败
            $info['info']='删除失败';
            // 回调函数
            $this->ajaxReturn($info);
        }
    }

}