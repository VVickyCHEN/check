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
<title>订单管理列表</title>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 订单管理 <span class="c-gray en">&gt;</span> 订单列表 <a id="shuaxin" class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="daochu()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 订单导出</a></span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">订单列表</th>
			</tr>
			<tr class="text-c">
				<th width="80">收件人</th>
				<th width="100">收件电话</th>
				<th width="150">收件地址</th>
				<th width="200">商品名称</th>
				<th width="80">商品数量</th>
				<th width="100">商品款式</th>
				<th width="100">订单号</th>
				<th width="100">状态</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					<td><?php echo ($foo["address_name"]); ?></td>
					<td><?php echo ($foo["address_phone"]); ?>/</br><?php echo ($foo["address_tel"]); ?></td>
					<td><?php echo ($foo["address_city"]); echo ($foo["address_area"]); echo ($foo["address_way"]); echo ($foo["address_detail"]); ?></td>
					<td>
					<?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_id"]) == $foo["order_product"]): echo ($voo["product_name"]); ?></br><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</td>
					<td><?php echo ($foo["order_num"]); ?></td>
					<td>
					<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_style_id"]) == $foo["order_style"]): echo ($voo["style_name"]); ?></br><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</td>
					<td><?php echo ($foo["order_number"]); ?></td>
					<td>
						<?php switch($foo["order_status"]): case "0": ?>未付款<?php break;?>
						<?php case "1": ?>已付款<?php break;?>
						<?php case "2": ?>已发货<?php break;?>
						<?php case "3": ?>交易成功<?php break;?>
						<?php case "4": ?>申请退货<?php break;?>
						<?php case "5": ?>已退货未退款<?php break;?>
						<?php case "6": ?>退款成功<?php break; endswitch;?>
					</td>
					<td class="td-manage">
					<a title="编辑" href="javascript:;" onclick="edit('订单编辑','edit.html?id=<?php echo ($foo["order_id"]); ?>',<?php echo ($foo["order_id"]); ?>,'800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
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
	function daochu(){
		location.href="<?php echo U('Admin/Orders/export');?>"
	}

	/*产品-编辑*/
	function edit(title,url,id,w,h){
		layer_show(title,url,w,h);
	}

</script>
</body>
</html>