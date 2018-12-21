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
<title>修改选择题 - 选择题管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" action="" method="post" id="form-admin-add" enctype="multipart/form-data" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">选择题：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<input type="hidden" name="judge_id" id="choice_id" value="<?php echo ($data["choice_id"]); ?>">
			<textarea text style="width: 300px;height: 100px;" id="choice_content" name="choice_content"><?php echo ($data["choice_content"]); ?></textarea>
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>选项A</label>
		<div class="formControls col-xs-8 col-sm-8">
			<input type="text" class="input-text" value="<?php echo ($data["choice_a"]); ?>" placeholder="" id="choice_a" >
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>选项B</label>
		<div class="formControls col-xs-8 col-sm-8">
			<input type="text" class="input-text" value="<?php echo ($data["choice_b"]); ?>" placeholder="" id="choice_b" >
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>选项C</label>
		<div class="formControls col-xs-8 col-sm-8">
			<input type="text" class="input-text" value="<?php echo ($data["choice_c"]); ?>" placeholder="" id="choice_c" >
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>选项D</label>
		<div class="formControls col-xs-8 col-sm-8">
			<input type="text" class="input-text" value="<?php echo ($data["choice_d"]); ?>" placeholder="" id="choice_d" >
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">正确答案：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="choice_true" id="choice_true" size="1">
				<?php switch($data["choice_true"]): case "0": ?><option value="0" selected>A</option>
						<option value="1">B</option>
						<option value="2">C</option>
						<option value="3">D</option><?php break;?>
	                <?php case "1": ?><option value="0">A</option>
						<option value="1" selected>B</option>
						<option value="2">C</option>
						<option value="3">D</option><?php break;?>
	                <?php case "2": ?><option value="0">A</option>
						<option value="1">B</option>
						<option value="2" selected>C</option>
						<option value="3">D</option><?php break;?>
	                <?php case "3": ?><option value="0">A</option>
						<option value="1">B</option>
						<option value="2">C</option>
						<option value="3" selected>D</option><?php break;?>
	                <?php default: endswitch;?>
			</select>
			</span> 
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

	var choice_id=$('#choice_id').val();
	var choice_content=$('#choice_content').val();
	var choice_a=$('#choice_a').val();
	var choice_b=$('#choice_b').val();
	var choice_c=$('#choice_c').val();
	var choice_d=$('#choice_d').val();
	var choice_true=$('#choice_true').val();

	//将内容发送到PHP
	$.post("<?php echo U('Admin/Choice/edit');?>",{choice_id:choice_id,choice_content:choice_content,choice_a:choice_a,choice_b:choice_b,choice_c:choice_c,choice_d:choice_d,choice_true:choice_true},function(data){
			if(data.code==1){
				// 数据修改成功
				layer.alert(data.info,{end:function(){
					var index = parent.layer.getFrameIndex(window.name);
					window.parent.location.reload();
					parent.$('.btn-refresh').click();
					parent.layer.close(index);
				}});
			} else {
				// 数据修改失败
				layer.alert(data.info);
				return false;
			}
		});
		msg.preventDefault();
	});

</script> 

</body>
</html>