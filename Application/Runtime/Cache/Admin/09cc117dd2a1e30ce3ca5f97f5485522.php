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
<title>编辑订单 - 订单管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">订单状态：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="order_status" id="order_status" size="1">
					<option value="0" 
					<?php if(($data["order_status"]) == "0"): ?>selected<?php endif; ?>
					>未付款</option>
					<option value="1" 
					<?php if(($data["order_status"]) == "1"): ?>selected<?php endif; ?>
					>已付款</option>
					<option value="2" 
					<?php if(($data["order_status"]) == "2"): ?>selected<?php endif; ?>
					>已发货</option>
					<option value="3" 
					<?php if(($data["order_status"]) == "3"): ?>selected<?php endif; ?>
					>交易成功</option>
					<option value="0" 
					<?php if(($data["order_status"]) == "4"): ?>selected<?php endif; ?>
					>申请退货</option>
					<option value="5" 
					<?php if(($data["order_status"]) == "5"): ?>selected<?php endif; ?>
					>已退货未退款</option>
					<option value="6" 
					<?php if(($data["order_status"]) == "6"): ?>selected<?php endif; ?>
					>退款成功</option>
			</select>
			<input type="hidden" class="input-text" value="<?php echo ($data["order_id"]); ?>" id="order_id" >
			</span> </div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input id="submit" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
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

<script type="text/javascript">

$('.btn-primary').click(function(msg){

	var order_id=$('#order_id').val();		// 订单ID
	var order_status=$('#order_status').val();	// 订单名称

	//将内容发送到PHP
	$.post("<?php echo U('Admin/Orders/edit');?>",{order_id:order_id,order_status:order_status},function(data){
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