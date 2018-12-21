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
<link rel="stylesheet" type="text/css" href="/sifaju/gt/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/sifaju/gt/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/sifaju/gt/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/sifaju/gt/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/sifaju/gt/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>选择题列表</title>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>判断题<span class="c-gray en">&gt;</span> 判断题管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
	<a href="javascript:;" onclick="append('添加课堂','<?php echo U('Admin/Judge/append');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加判断题</a></span> 
</div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">内容列表</th>
			</tr>
			<tr class="text-c">
				<th width="150">答题</th>
				<th width="150">答案</th>
				<th width="100">添加时间</th>
				<th width="100">内容操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					<td><?php echo ($foo["judge_content"]); ?></td>
					<?php if(($foo["judge_true"]) == "0"): ?><td>正确</td>
					<?php else: ?>
						<td>错误</td><?php endif; ?>
					<td><?php echo (date("Y-m-d H:i:s",$foo['judge_time'])); ?></td>
					<td class="td-manage">
					<a title="编辑" href="javascript:;" onclick="edit('内容编辑','<?php echo U('Admin/Judge/edit');?>?id=<?php echo ($foo["judge_id"]); ?>',<?php echo ($foo["judge_id"]); ?>,'800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					<a title="删除" href="javascript:;" onclick="del(this,<?php echo ($foo["judge_id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<?php echo ($page); ?>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/sifaju/gt/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/sifaju/gt/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/sifaju/gt/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/sifaju/gt/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/sifaju/gt/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/sifaju/gt/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/sifaju/gt/Public/Admin/lib/laypage/1.2/laypage.js"></script>
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
			url: "<?php echo U('Admin/Judge/del');?>",
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

</script>
</body>
</html>