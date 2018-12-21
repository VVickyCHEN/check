<?php
namespace Admin\Controller;

use Think\Controller;

class ProgramController extends CommonController {

    private $_program = '';
    private $_timestamp = '';

    public function _initialize()
    {
        $this->_timestamp=M('timestamp');
        $this->_program=M('program');
    }

    // 轮播图列表页
    public function showlist(){  
        $p = isset($_GET['p'])?$_GET['p']:1;
        $list = $this->_program->page($p,6)->select();
        
        $this->assign('list',$list);
        // 查询条数
        $count= $this->_program->count();
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
            $program = D('program');
            if($program->create()){

                $file = $_FILES['imgfile'];
                if($file["type"]=='image/jpeg'||$file["type"]=='image/png'||$file==null){
                    
                    // 先插入数据
                    $program_id = $program ->add();

                    $banner = A('banner');
                    $result=$banner->get_upload('img',$file);

                    $data['img']=implode('',$result);
                    
                    $save = $this->_program->where(['program_id'=>$program_id])->save($data);

                    if($save){
                        echo "<script>window.parent.location.reload();</script>";
                    }else{
                        $this->error('图片保存出错');
                    }
                }else{
                    $this->error('请上传图片类型的文件');
                }
                
            }else{

                $error = $program->getError();
                $this->error($error);
                
            }
        }
        $timestamp = $this->_timestamp->select();
        $this->assign('timestamp',$timestamp);
        $this->display();
    }

    // 产区删除
    public function del(){
        // 定义回调函数
        $info=['code'=>0,'error'=>false,'info'=>''];
       
        // 删除数据
        $result=$this->_program->delete(I('id'));
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
        if(IS_POST){

            $program = D('program');
            if($program->create()){

                $id = $_POST['id'];


                $file = $_FILES['imgfile'];
                if($file["type"]=='image/jpeg'||$file["type"]=='image/png'){
                    
                    // 先插入数据
                    $program_id = $program->save();

                    $banner = A('banner');
                    $result=$banner->get_upload('img',$file);

                    $data['img']=implode('',$result);

                    $save = $this->_program->where(['program_id'=>$id])->save($data);

                    if($save){
                        echo "<script>window.parent.location.reload();</script>";
                    }else{
                        $this->error('图片保存出错');
                    }
                }else{
                    $this->error('请上传图片类型的文件');
                }
                
            }else{

                $error = $program->getError();
                $this->error($error);
                
            }

        } else {
            // 查询需要修改的数据
            $timestamp = $this->_timestamp->select();
            $this->assign('timestamp',$timestamp);
            $data=$this->_program->find(I('program_id'));
            $this->assign('data',$data);
            // 加载视图
            $this->display();
        }
    }


    

    
}

?>