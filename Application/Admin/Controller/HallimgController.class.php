<?php
namespace Admin\Controller;

use Think\Controller;

class HallimgController extends CommonController {

    // 轮播图列表页
    public function showlist(){  
        // 查询表单数据
        $hallimg=M('hallimg');
        $list=$hallimg->select();
        // foreach ($list as $key => $val) {
        //     $list[$key]['hallimg_img']=ltrim($val['hallimg_img'],'./Public');
        // }
        $this->assign('list',$list);
        // 加载视图
        $this->display();
    }

    // 轮播图修改
    public function edit(){
        if(IS_AJAX){
            // 定义回调数组
            $info=['code'=>0,'error'=>false,'info'=>''];
            // 查询要添加数据的表
            $hallimg=D('hallimg');
            if($hallimg->create()){
                // 数据创建成功

                $hall1 = A('hall1');

                $result=$hall1->get_upload('hallimg_img',$_FILES['imgfile']);
               
                if($result){

                    // 缩略图
                    $path=$hall1->get_thumb($result[0],285);

                    // 获取提交过来的数据
                    $data['hallimg_id']=$_POST['hallimg_id'];
                    $data['hallimg_img']=implode('',$result);
                    $data['hallimg_thumb']=$path;

                    // 修改数据
                    $update=$hallimg->save($data);
                    if($update) {
                        // 修改成功
                        $info['info']='轮播图修改成功';
                        $info['code']=1;
                        $info['error']=true;
                        // 回调函数
                        $this->ajaxReturn($info);
                    } else {
                        // 修改失败
                        $info['info']='轮播图修改失败';
                        // 回调函数
                        $this->ajaxReturn($info);
                    }
                } else {
                    // 上传文件为空
                    $info['info']='上传文件失败';
                    // 回调函数
                    $this->ajaxReturn($info);
                }
            } else {
                // 数据创建失败
                $info['info']='修改失败';
                // 回调函数
                $this->ajaxReturn($info);
            }
        } else {
            // 查询需要修改的数据
            $hallimg=M('hallimg');
            $data=$hallimg->find(I('id'));
            $this->assign('data',$data);
            // 加载视图
            $this->display();
        }
    }


    
    
}

?>