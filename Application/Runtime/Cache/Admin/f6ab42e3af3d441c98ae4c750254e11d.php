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
<title>添加权限 - 权限管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" method="post" id="form-admin-add" enctype="multipart/form-data" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>权限名称：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="<?php echo ($data["auth_name"]); ?>" placeholder="" id="auth_name" name="auth_name" >
			<input type="hidden" class="input-text" value="<?php echo ($data["auth_id"]); ?>" placeholder="" id="auth_id" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>父级名称：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<select id="auth_pid">
				<option value="0"
				<?php if(($data["auth_pid"]) == "0"): ?>selected<?php endif; ?> 
				>---请选择---</option>
				<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($foo["auth_id"]); ?>" 
				<?php if(($data["auth_pid"]) == $foo["auth_id"]): ?>selected<?php endif; ?>
				><?php echo ($foo["auth_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>应用名称：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="<?php echo ($data["auth_module"]); ?>" placeholder="" id="auth_module" name="auth_module" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>控制器名称：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="<?php echo ($data["auth_controller"]); ?>" placeholder="" id="auth_controller" name="auth_controller" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>方法名称：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="<?php echo ($data["auth_action"]); ?>" placeholder="" id="auth_action" name="auth_action" >
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否显示：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<select id="auth_type">
				<option value="1"
				<?php if(($data["auth_type"]) == "1"): ?>selected<?php endif; ?>
				>显示</option>
				<option value="0" 
				<?php if(($data["auth_type"]) == "0"): ?>selected<?php endif; ?>
				>隐藏</option>
			</select>
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

$('#submit').click(function(msg){
	// 获取数据
	var auth_id=$('#auth_id').val();					// 权限ID
	var auth_name=$('#auth_name').val();				// 权限名称
	var auth_pid=$('#auth_pid').val();					// 父类id
	var auth_module=$('#auth_module').val();			// 应用名称
	var auth_controller=$('#auth_controller').val();	// 控制器名称
	var auth_action=$('#auth_action').val();			// 方法名称
	var auth_type=$('#auth_type').val();				// 状态
// alert(auth_name+'-'+auth_pid+'-'+auth_module+'-'+auth_controller+'-'+auth_action+'-'+auth_type);

	// 将数据用ajax方法提到后台
	$.post("<?php echo U('Admin/Auth/edit');?>",{auth_id:auth_id,auth_name:auth_name,auth_pid:auth_pid,auth_module:auth_module,auth_controller:auth_controller,auth_action:auth_action,auth_type:auth_type},function(data){
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
	});
	msg.preventDefault();
})

</script>

</body>
</html>