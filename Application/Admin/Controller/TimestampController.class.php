<?php
namespace Admin\Controller;

use Think\Controller;

class TimestampController extends CommonController {

    private $_timestamp = '';

    public function _initialize()
    {
        $this->_timestamp=M('timestamp');
    }

    // 轮播图列表页
    public function showlist(){  
        $p = isset($_GET['p'])?$_GET['p']:1;
        $list = $this->_timestamp->page($p,6)->select();
        
        $this->assign('list',$list);
        // 查询条数
        $count= $this->_timestamp->count();
        $this->assign('count',$count);
        // 调用分页按钮
        $Page= new \Think\Page($count,6);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show=$Page->show();
        $this->assign('page',$show);
        $this->display();
    }

    public function append()
    {
        if(IS_POST){
            $timestamp = D('timestamp');
            if($timestamp->create()){
                // 先插入数据
                $timestamp_id = $timestamp ->add();

                if($timestamp_id){
                    echo "<script>window.parent.location.reload();</script>";

                }else{
                    $this->error('添加成功出错');
                }
            }else{
                $error = $timestamp->getError();
                $this->error($error);
            }
        }
        $this->display();
    }

    public function del(){
        // 定义回调函数
        $info=['code'=>0,'error'=>false,'info'=>''];
       
        // 删除数据
        $result=$this->_timestamp->delete(I('id'));
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

    // 轮播图修改
    public function edit(){
        if(IS_POST){
            $id = $_POST['id'];
            $timestamp = D('timestamp');
            if($timestamp->create()){

                // 先插入数据
                $timestamp_id = $timestamp->save();

                if($timestamp_id){
                    echo "<script>window.parent.location.reload();</script>";
                }else{
                    $this->error('保存出错');
                }
            }else{
                $error = $timestamp->getError();
                $this->error($error);
            }
        } else {
            // 查询需要修改的数据
           
            $data=$this->_timestamp->find(I('id'));
            $this->assign('data',$data);
            // 加载视图
            $this->display();
        }
    }


    

    
}

?>