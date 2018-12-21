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
<link rel="stylesheet" type="text/css" href="/gt/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/gt/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/gt/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/gt/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/gt/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>管理员添加 - 管理员管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" method="post" action="#" id="form-admin-add" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="" id="username" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="password" class="input-text" value="" placeholder="" id="password" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="password" class="input-text" value="" placeholder="" id="pass" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>昵称</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="" id="nicheng" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="" id="email" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="" id="phone" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">性别</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="gender" id="gender">
			<option value="1">男</option>
			<option value="0">女</option>
			</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">状态</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="status" id="status">
			<option value="1">启用</option>
			<option value="0">禁用</option>
			</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">角色</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="role_id" id="role_id">
			<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($foo["role_id"]); ?>"><?php echo ($foo["role_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input id="submit" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/gt/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/gt/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/gt/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/gt/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/gt/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/gt/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/gt/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 

<script type="text/javascript">

$('#submit').click(function(msg){

	var username=$('#username').val();	// 用户名
	var password=$('#password').val();	// 密码
	var pass=$('#pass').val();			// 确认密码
	var nicheng=$('#nicheng').val();	// 昵称
	var email=$('#email').val();		// 邮箱
	var phone=$('#phone').val();		// 手机
	var gender=$('#gender').val();		// 性别
	var status=$('#status').val();		// 状态
	var role_id=$('#role_id').val();	// 权限角色

	// 判断提交的内容是否为空
	if(password==''|| pass==''){ 
		layer.alert('添加内容不能为空');return false;
	}

	//将内容发送到PHP
	//$.post{发送的地址，内容，回调}
	$.post("<?php echo U('Admin/Manager/append');?>",{username:username,password:password,pass:pass,nicheng:nicheng,email:email,phone:phone,gender:gender,status:status,role_id:role_id},function(data){
			if(data.code==1){
				// 数据插入成功
				layer.alert(data.info,{end:function(){
					var index = parent.layer.getFrameIndex(window.name);
					window.parent.location.reload();
					parent.$('.btn-refresh').click();
					parent.layer.close(index);
				}});
			} else {
				// 数据插入失败
				layer.alert(data.info);
				return false;
			}
		});
		msg.preventDefault();
	});

</script> 

</body>
</html>