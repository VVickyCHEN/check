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
<title>商品管理列表</title>
</head>
<style type="text/css">

.page-container>div>.num{
	cursor: pointer;
	border: 1px solid #beafaf;
	height: 32px;
	width: 32px;
	display: inline-block;
	text-align: center;
	color: #0c0c0c;
	font-family: "microsoft yahei";
	font-size: 14px;
	line-height: 32px;
	background-color: #f0ecec;
}
.page-container>div>.current{
	cursor: pointer;
	border: 1px solid #beafaf;
	height: 32px;
	width: 32px;
	display: inline-block;
	text-align: center;
	color: #0c0c0c;
	font-family: "microsoft yahei";
	font-size: 14px;
	line-height: 32px;
	background-color: #333333;
}
.page-container>div>a:hover{
	background-color: #FFFFFF;
	color: #df1414;
}
.page-container>div>.prev{
	cursor: pointer;
	border: 1px solid #beafaf;
	height: 32px;
	width: 60px;
	display: inline-block;
	text-align: center;
	color: #0c0c0c;
	font-family: "microsoft yahei";
	font-size: 14px;
	line-height: 32px;
	background-color: #f0ecec;
}
.page-container>div>.next{
	cursor: pointer;
	border: 1px solid #beafaf;
	height: 32px;
	width: 60px;
	display: inline-block;
	text-align: center;
	color: #0c0c0c;
	font-family: "microsoft yahei";
	font-size: 14px;
	line-height: 32px;
	background-color: #f0ecec;
}
</style>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品管理 <span class="c-gray en">&gt;</span> 商品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
	<form action="<?php echo U('Admin/Product/showlist');?>" method="POST" >
		<input type="text" class="input-text" style="width:250px" placeholder="输入产品名称" id="" name="product_name">
		<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜商品</button>
	</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
	<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> 
	<a href="javascript:;" onclick="append('添加分类','<?php echo U('Admin/Product/append');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加商品</a></span> 
	<span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span></div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">商品列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="150">商品名称</th>
				<th width="150">商品分类</th>
				<th width="150">商品款式</th>
				<th width="150">商品价格</th>
				<th width="150">商品库存</th>
				<th width="150">添加时间</th>
				<th width="100">商品操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					<td><input type="checkbox"  class="checkid" value="<?php echo ($foo["product_id"]); ?>" name=""></td>
					<td><?php echo ($foo["product_name"]); ?></td>
					<td><?php echo ($foo["category_name"]); ?></td>
					<td>
					<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_id"]) == $foo["product_id"]): echo ($voo["style_name"]); ?>
					<a title="编辑款式" href="javascript:;" onclick="editstyle('款式编辑','<?php echo U('Admin/ProductStyle/edit');?>?id=<?php echo ($voo["product_style_id"]); ?>',<?php echo ($foo["product_id"]); ?>,'800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
					<a title="款式删除" href="javascript:;" onclick="delstyle(this,<?php echo ($voo["product_style_id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</br><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</td>
					<td>
					<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_id"]) == $foo["product_id"]): echo ($voo["product_price"]); ?></br><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</td>
					<td>
					<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_id"]) == $foo["product_id"]): echo ($voo["product_num"]); ?></br><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</td>
					<td><?php echo (date("Y-m-d H:i:s",$foo['product_ctime'])); ?></td>
					<td class="td-manage">
					<a title="添加款式" href="javascript:;" onclick="appstyle('添加款式','<?php echo U('Admin/ProductStyle/append');?>?id=<?php echo ($foo["product_id"]); ?>','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>
					<a title="编辑" href="javascript:;" onclick="edit('商品编辑','<?php echo U('Admin/Product/edit');?>?id=<?php echo ($foo["product_id"]); ?>',<?php echo ($foo["product_id"]); ?>,'800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
					<a title="删除" href="javascript:;" onclick="del(this,<?php echo ($foo["product_id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<?php echo ($page); ?>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/shiji/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/shiji/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/shiji/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/shiji/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/shiji/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/shiji/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/shiji/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/

/*产品-增加*/
function append(title,url,w,h){
	layer_show(title,url,w,h);
}

/*产品-删除*/
function del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: "<?php echo U('Admin/Product/del');?>",
			dataType: 'json',
			data:'id='+id,
			success: function(data){
				if(data.code==1){
					// 删除成功
					layer.alert(data.info,{end:function(){
						var index = layer.getFrameIndex(window.name);
						window.location.reload();
						$('.btn-refresh').click();
						layer.close(index);
					}});
				} else {
					// 删除失败
					layer.alert(data.info);
				}
			},
			error:function(data){},
		});		
	});
}

/*产品-编辑*/
function edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}

/*产品-批量删除*/
function datadel(obj,id){

	var select=[];
	$('.checkid:checked').each(function(){
		select.push($(this).val());
	})

	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: "<?php echo U('Admin/Product/datadel');?>",
			dataType: 'json',
			data: {id:select},
			success: function(data){
				if(data.code==1){
					// 删除成功
					layer.alert(data.info,{end:function(){
						var index = layer.getFrameIndex(window.name);
						window.location.reload();
						$('.btn-refresh').click();
						layer.close(index);
					}});
				} else {
					// 删除失败
					layer.alert(data.info);
				}
			},
			error:function(data){},
		});		
	});
}
</script>

<script type="text/javascript">
/*款式-编辑*/
function appstyle(title,url,id,w,h){
	layer_show(title,url,id,w,h);
}

/*款式-编辑*/
function editstyle(title,url,id,w,h){
	layer_show(title,url,w,h);
}

/*款式-删除*/
function delstyle(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: "<?php echo U('Admin/product_style/del');?>",
			dataType: 'json',
			data:'id='+id,
			success: function(data){
				if(data.code==1){
					// 删除成功
					layer.alert(data.info,{end:function(){
						var index = layer.getFrameIndex(window.name);
						window.location.reload();
						$('.btn-refresh').click();
						layer.close(index);
					}});
				} else {
					// 删除失败
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