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
<title>款式编辑 - 产品管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" method="post" action="#" id="form-admin-add" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">
		<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($data["style_id"]) == $voo["style_id"]): ?><span class="c-red">*</span><?php echo ($voo["style_name"]); ?></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>产品库存：</label>
        <div class="formControls col-xs-8 col-sm-3">
            <input type="text" class="input-text" value="<?php echo ($data["product_num"]); ?>" placeholder="" id="product_num" name="product_num" >
            <input type="hidden" class="input-text" value="<?php echo ($data["product_style_id"]); ?>" placeholder="" id="product_style_id" >
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>产品价格：</label>
        <div class="formControls col-xs-8 col-sm-3">
            <input type="text" class="input-text" value="<?php echo ($data["product_price"]); ?>" placeholder="" id="product_price" name="product_price" >
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

$('#submit').click(function(msg){

	var product_style_id=$('#product_style_id').val();	// 产品_款式id
	var product_num=$('#product_num').val();			// 产品库存
	var product_price=$('#product_price').val();		// 产品价格

	//将内容发送到PHP
	//$.post{发送的地址，内容，回调}
	$.post("<?php echo U('Admin/ProductStyle/edit');?>",{product_style_id:product_style_id,product_num:product_num,product_price:product_price},function(data){
			if(data.code==1){				// 数据插入成功
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