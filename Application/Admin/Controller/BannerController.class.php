<?php
namespace Admin\Controller;

use Think\Controller;

class BannerController extends CommonController {

    // 轮播图列表页
    public function showlist(){  
            // 查询表单数据
            $banner=M('banner');
            $list=$banner->select();
            foreach ($list as $key => $val) {
                $list[$key]['banner_thumb']=ltrim($val['banner_thumb'],'./Public');
            }
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
            $banner=D('banner');
            if($banner->create()){
                // 数据创建成功
                $result=$this->get_upload('banner_img',$_FILES['imgfile']);
                $water=$this->get_upload('water',$_FILES['waterfile']);
                $watertext=$_POST['water_text'];
                if($result){
                    if(!empty($water)){
                            $water=implode('',$water);
                            $images=$this->get_water($result[0],$water);
                    }
                    if(!empty($watertext)){
                        // 添加文字水印
                        $imagetext=$this->text_water($result[0],$watertext);
                    }
                    // 缩略图
                    $path=$this->get_thumb($result[0],285);
                    // 获取提交过来的数据
                    $data['banner_id']=$_POST['banner_id'];
                    $data['banner_img']=implode('',$result);
                    $data['banner_thumb']=$path;
                    // 修改数据
                    $update=$banner->save($data);
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
            $banner=M('banner');
            $data=$banner->find(I('id'));
            $this->assign('data',$data);
            // 加载视图
            $this->display();
        }
    }

    //图片上传
    public function get_upload($image,$files){
        $path='./Public/Admin/img/';
        if(!file_exists($path)){
            // mkdir：若文件路径不存在，则自动创建一个文件夹
            mkdir($path,0777,true);
            $path=rtrim($path,'/').'/';
        }
        $config = array(
            // 限制上传图片的大小
            'maxSize'    =>    3145728,
            // 上传图片的路径
            'rootPath'   =>    $path,
              // 上传文件的保存名称
            'saveName'   =>    array('uniqid',''),
            // 允许上传的文件格式
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
            // 自动使用子目录保存上传文件 默认为true
            'autoSub'    =>    true,
             // 子目录创建方式，采用数组或者字符串方式定义
            'subName'    =>    array('date','Ymd'),
        );
        // $url='__PUBLIC__/Admin/img/';
        // 实例化类
        $upload = new \Think\Upload($config);
        $info = $upload->upload(array($image=>$files));
        $result=array();

        if(!$info){
                // 上传文件不成功
                 return $result;
            } else {
                // 上传文件成功
                foreach ($info as $val){
                    $result[]=$path.$val['savepath'].$val['savename'];
                }
                return $result;
            }
    }

    // 生成缩略图
    protected function get_thumb($path,$size)
    {
        // 拼接路径，在文件名前加上宽度
        $savepath=substr($path,0,strrpos($path,'/')+1).$size.'_'.substr($path,strrpos($path,'/')+1);
        // 实例化图像类
        $image = new \Think\Image();
        // 使用open方法打开图像
        $image->open($path);
        $image->thumb($size,$size)->save($savepath);
        // 返回路径
        return $savepath;
    }

    // 添加图片水印
    protected function get_water($img,$water_img){
        $image = new \Think\Image();
        $images=$image->open($img)->water($water_img,\Think\Image::IMAGE_WATER_SOUTHEAST,80)->save($img);
        return $images;
    }

    // 添加文字水印
    protected function text_water($img,$text_water){
        $image = new \Think\Image();
        $imagetext=$image->open($img)->text($text_water,'./Public/Admin/ttf/msyh.ttf',20,'#000000',\Think\Image::IMAGE_WATER_NORTHWEST)->save($img); 
        return $imagetext;
    }
}

?>