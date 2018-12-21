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
<title>管理员管理列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a id="shuaxin" class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="append('添加管理员','append','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">管理员列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th width="150">用户名</th>
				<th width="150">昵称</th>
				<th width="150">邮箱</th>
				<th width="150">手机</th>
				<th width="150">角色</th>
				<th width="150">状态</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>	
			<?php if(is_array($manager)): $i = 0; $__LIST__ = $manager;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					<td><?php echo ($foo["id"]); ?></td>
					<td><?php echo ($foo["username"]); ?></td>
					<td><?php echo ($foo["nicheng"]); ?></td>
					<td><?php echo ($foo["email"]); ?></td>
					<td><?php echo ($foo["phone"]); ?></td>
					<td><?php echo ($foo["role_name"]); ?></td>
					<?php if(($foo["status"]) == "1"): ?><td class="td-status"><span class="label label-success radius">已启用</span></td>
					<?php else: ?>
					<td class="td-status"><span class="label label-default radius">已禁用</span></td><?php endif; ?>
					<td class="td-manage">
					<a title="编辑" href="javascript:;" onclick="edit('管理员编辑','edit.html?id=<?php echo ($foo["id"]); ?>',<?php echo ($foo["id"]); ?>,'800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
					<?php if(($foo["status"]) == "1"): ?><a title="禁用" href="javascript:;" onclick="admin_stop(this,<?php echo ($foo["id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>
					<?php else: ?>
					<a title="启用" href="javascript:;" onclick="admin_start(this,<?php echo ($foo["id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a><?php endif; ?>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/gt/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/gt/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/gt/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/gt/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/gt/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/gt/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/gt/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('#shuaxin').trigger("click");
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function append(title,url,w,h){
	layer_show(title,url,w,h);
}

/*管理员-删除*/
// function del(obj,id){
// 	layer.confirm('确认要删除吗？',function(index){
// 		$.ajax({
// 			type: 'POST',
// 			url: "<?php echo U('Admin/Manage/del');?>",
// 			dataType: 'json',
// 			data: 'id='+id,
// 			success: function(data){
// 				if(data.code==1){
// 					$(obj).parents("tr").remove();
// 					layer.alert(data.info);
// 				} else {
// 					layer.alert(data.info);
// 				}
// 			},
// 			error:function(data){},
// 		});		
// 	});
// }

/*管理员-编辑*/
function edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}

/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		$.ajax({
			type: 'POST',
			url: "<?php echo U('Admin/Manager/admin_stop');?>",
			dataType: 'json',
			data: 'id='+id,
			success: function(data){
				if(data.code==1){
					//停用成功
					layer.alert(data.info,{end:function(){
						var index = layer.getFrameIndex(window.name);
						window.location.reload();
						$('.btn-refresh').click();
						layer.close(index);
					}});
				} else {
					// 停用失败
					layer.alert(data.info);
				}
			},
			error:function(data){},
		});		
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		$.ajax({
			type: 'POST',
			url: "<?php echo U('Admin/Manager/admin_start');?>",
			dataType: 'json',
			data: 'id='+id,
			success: function(data){
				if(data.code==1){
					// 启用成功
					layer.alert(data.info,{end:function(){
						var index = layer.getFrameIndex(window.name);
						window.location.reload();
						$('.btn-refresh').click();
						layer.close(index);
					}});
				} else {
					// 启用失败
					layer.alert(data.info);
				}
			},
			error:function(data){},
		});		
	});
}

</script>
</body>
</html>