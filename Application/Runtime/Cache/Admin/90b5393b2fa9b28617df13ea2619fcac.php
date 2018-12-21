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
<link rel="stylesheet" type="text/css" href="/check/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/check/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/check/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/check/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/check/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加内容 - 内容管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" action="" method="post" id="form-admin-add" enctype="multipart/form-data" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">用户名：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input style="width: 300px;" type="text" class="input-text" value="" placeholder="" id="user_username" name="user_username" >
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">工号：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input style="width: 300px;" type="text" class="input-text" value="" placeholder="" id="user_number" name="user_number" >
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">性别</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="user_gender" id="user_gender">
			<option value="0">男</option>
			<option value="1">女</option>
			</select>
			</span> 
		</div>
	</div>	

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="password" class="input-text" value="" placeholder="" id="user_password" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="password" class="input-text" value="" placeholder="" id="pass" >
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户头像：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="file" id="imgfile">
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">用户手机：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input style="width: 300px;" type="text" class="input-text" value="" placeholder="" id="user_phone" name="user_phone" >
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
<script type="text/javascript" src="/check/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/check/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/check/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/check/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/check/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/check/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/check/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 

<script type="text/javascript">

// 获取
// getElementById:返回对拥有指定ID的第一个对象的引用
var submit=document.getElementById("submit");
var imgfile=document.getElementById("imgfile");

// 点击提交按钮
submit.onclick=function(event){
	var user_password=$('#user_password').val();	// 密码
	var pass=$('#pass').val();			// 确认密码
// 判断提交的内容是否为空
	if(user_password==''|| pass==''){ 
		layer.alert('添加内容不能为空');return false;
	}
	// 创建FormData对象
	var fd = new FormData();
	// 添加数据到fd

	fd.append("user_username",$('#user_username').val());					
	fd.append("user_number",$('#user_number').val());					
	fd.append("user_gender",$('#user_gender').val());				
	fd.append("user_phone",$('#user_phone').val());					
	fd.append("user_password",user_password);						
	fd.append("pass",pass);						
	fd.append('imgfile',imgfile.files[0]);
	
	// 调用ajax
	$.ajax({
		// 提交方式
		type:"post",
		// 提交地址
		url:"<?php echo U('Admin/user/append');?>",
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
				return false;
			}
		},
		// error:function(data){},
	});
	event.preventDefault();
}
</script>

</body>
</html>