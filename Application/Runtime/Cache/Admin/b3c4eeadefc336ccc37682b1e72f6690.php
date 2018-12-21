<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/shiji/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/shiji/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/shiji/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/shiji/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/shiji/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>修改商品 - 商品管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" method="post" id="form-admin-add" enctype="multipart/form-data" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>商品名称：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="<?php echo ($data["product_name"]); ?>" placeholder="" id="product_name" name="product_name" >
			<input type="hidden" class="input-text" value="<?php echo ($data["product_id"]); ?>" placeholder="" id="product_id" >
			<input type="hidden" class="input-text" value="<?php echo ($data["product_img"]); ?>" placeholder="" id="product_img" >
			<input type="hidden" class="input-text" value="<?php echo ($data["product_thumb"]); ?>" placeholder="" id="product_thumb" >
			<input type="hidden" class="input-text" value="<?php echo ($data["product_content"]); ?>" placeholder="" id="product_content" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">商品分类：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="product_category" id="product_category" size="1">
				<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($foo["category_id"]); ?>" 
					<?php if(($data["product_category"]) == $foo["category_id"]): ?>selected<?php endif; ?>
					><?php echo ($foo["category_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			</span> </div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">商品产区：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="product_place" id="product_place" size="1">
				<?php if(is_array($place)): $i = 0; $__LIST__ = $place;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($foo["place_id"]); ?>" 
					<?php if(($data["product_place"]) == $foo["place_id"]): ?>selected<?php endif; ?> 
					><?php echo ($foo["place_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			</span> </div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">商品价格区：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="product_region" id="product_region" size="1">
				<?php if(is_array($region)): $i = 0; $__LIST__ = $region;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($foo["region_id"]); ?>" 
					<?php if(($data["product_region"]) == $foo["region_id"]): ?>selected<?php endif; ?>  
					><?php echo ($foo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			</span> </div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">商品规格：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="product_speci" id="product_speci" size="1">
				<?php if(is_array($speci)): $i = 0; $__LIST__ = $speci;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($foo["speci_id"]); ?>" 
					<?php if(($data["product_speci"]) == $foo["speci_id"]): ?>selected<?php endif; ?>  
					><?php echo ($foo["speci_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			</span> </div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>商品最低价格：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="<?php echo ($data["product_min"]); ?>" placeholder="" id="product_min" name="product_min" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>添加主图：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="file" id="imgfile" multiple name="img[]">
			<p>若不修改图片,则不用选择文件</p>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>添加商品展示：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="file" id="confile" multiple name="content[]">
			<p>若不修改图片,则不用选择文件</p>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>添加水印图片：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="file" id="water" multiple name="water">
		</div>
		<p>可不添加</p>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>添加文字水印：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="" id="water_text" name="water_text" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>商品详情：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<script id="product_detail" type="text/plain" name="product_detail" style="width:500px;height:200px;"><?php echo ($data["product_detail"]); ?></script>
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" id="submit" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/shiji/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/shiji/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/shiji/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/shiji/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/shiji/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/shiji/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/shiji/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<!-- 百度编辑器js -->
<script type="text/javascript" charset="utf-8" src="/shiji/Public/Admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/shiji/Public/Admin/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript">
	 var ue = UE.getEditor('product_detail');
</script>

<script type="text/javascript">

// 获取
// getElementById:返回对拥有指定ID的第一个对象的引用
var imgfile=document.getElementById("imgfile");
var confile=document.getElementById("confile");
var waterfile=document.getElementById("water");
var submit=document.getElementById("submit");

// 点击提交按钮
submit.onclick=function(event){

	// 创建FormData对象
	var fd = new FormData();
	var product_style='';
	//遍历复选框:$.each('匹配的选择器',function(){  //执行的代码 })
	$.each($('input:checkbox:checked'),function(){
		//拼接获取到的id
		product_style+=$(this).val()+',';
	})
	// 获取数据
	var pname=$('#product_name').val();			//产品名称
	var pdetail=ue.getContent();				//产品详情

	// 创建FormData对象
	var fd = new FormData();
	// 添加数据到fd
	fd.append("product_id",$('#product_id').val());				//产品ID
	fd.append("product_name",$('#product_name').val());			//产品名称
	fd.append("product_category",$('#product_category').val());	//商品分类
	fd.append("product_place",$('#product_place').val()); 		//商品产区
	fd.append("product_region",$('#product_region').val()); 	//商品价格区
	fd.append("product_speci",$('#product_speci').val()); 		//商品规格
	fd.append("product_min",$('#product_min').val());			//产品最低价
	fd.append("product_detail",pdetail);						//产品详情
	fd.append("waterfile",waterfile.files[0]);					//商品水印
	fd.append("water_text",$('#water_text').val());				// 文字水印

	// formData多文件上传
	for(var i=0;i<imgfile.files.length;i++){
		// 在每个匹配元素的末尾插入参数内容
		fd.append("img[]",imgfile.files[i]);
	}
	for(var j=0;j<confile.files.length;j++){
		// 在每个匹配元素的末尾插入参数内容
		fd.append("content[]",confile.files[j]);
	}

	fd.append("proimg",$('#product_img').val());
	fd.append("prothumb",$('#product_thumb').val());
	fd.append("procontent",$('#product_content').val());


	// 调用ajax
	$.ajax({
		// 提交方式
		type:"post",
		//dataType:发送数据的提交方式,"json":返回JSON数据。
		// dataType:'json',
		// 提交地址
		url:"<?php echo U('Admin/Product/edit');?>",
		// async:true：异步提交
		async:true,
		data:fd,
		// form中设置了enctype="multipart/form-data" ，请求中的contentType会默认为multipart/form-data。contentType设置为false，避免JQuery对其操作，从而失去分界符，导致服务器不能正常解析文件
		contentType:false,
		// processData默认为true，设置为true时提交时不会序列化data
		processData:false,
		// 接收回调过来的信息
		success:function(data){
			if(data.code==1){
				// 数据添加成功
				layer.alert(data.info,{end:function(){
					var index = parent.layer.getFrameIndex(window.name);
					window.parent.location.reload();
					parent.$('.btn-refresh').click();
					parent.layer.close(index);
				}});
			} else {
				// 数据添加失败
				layer.alert(data.info);
			}
		},
		// error:function(data){},
	});
	event.preventDefault();
}
</script>

</body>
</html>