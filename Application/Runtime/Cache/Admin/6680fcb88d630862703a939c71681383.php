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
<title>发布任务</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" method="post" id="form-admin-add" enctype="multipart/form-data" >

	<input type="hidden" class="input-text" value="<?php echo ($data["user_id"]); ?>" placeholder="" id="user_id" >

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">发布任务：</label>
		<div class="formControls col-xs-8 col-sm-3">
			<textarea style="width: 300px; height: 200px;" type="text" class="input-text" id="mission" name="mission"><?php echo ($data["mission"]); ?></textarea> 
		</div>
	</div>

	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">选择会员：</label>
			<div class="formControls col-xs-8 col-sm-9">
			
				<dl class="permission-list">
					<dt>
						<label>
							<input type="checkbox" name="user-Character-0"  id="quanxuan">
							全选</label>
					</dt>	
					<dd>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="<?php echo ($foo["user_id"]); ?>" name="user-Character-0-0" class="ids">
									<?php echo ($foo["user_username"]); ?></label>
							</dt>
							
						</dl><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
				</dl>
				
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
var c= 2;
$('#quanxuan').on('click',function(){
	
	c++;
	// $("#ids:checked").attr('checked',false);
	if(c%2==1){

		$(".ids").prop("checked",true);
	}else{
		$(".ids").prop("checked",false);
	}
});


// 获取
// getElementById:返回对拥有指定ID的第一个对象的引用
var submit=document.getElementById("submit");

// 点击提交按钮
submit.onclick=function(event){
	// 创建FormData对象
	var fd = new FormData();

	var data = '';
	$('.ids:checked').each(function(){
		// 定义一个数组
		var select = '';
		select = $(this).val();

		data+=select+',';

	});	
	if(data==''){
		alert('请选择会员');return false;
	}


	var mission = $('#mission').val();
	
	fd.append('data',data);
	fd.append('mission',mission);

	$.ajax({
		// 提交方式
		type:"post",
		//dataType:发送数据的提交方式,"json":返回JSON数据。
		// dataType:'json',
		// 提交地址
		url:"<?php echo U('Admin/user/fabu');?>",
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
			}
		},
	});
	event.preventDefault();


	



}

</script>

</body>
</html>