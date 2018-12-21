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
<title>会员管理列表</title>
</head>
<link rel="stylesheet" type="text/css" href="/gt/Public/Admin/static/h-ui/css/page.css">
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 会员管理 <span class="c-gray en">&gt;</span> 会员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
	<a href="javascript:;" onclick="append('会员添加','<?php echo U('Admin/user/append');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 会员添加</a></span> 
	<span class="l" style="padding-left: 10px;">
	<a href="javascript:;" onclick="fabu('任务发布','<?php echo U('Admin/user/fabu');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 学习任务发布</a></span> 
	<span class="l" style="padding-left: 10px;">
	<a href="javascript:;" onclick="ksfabu('考试任务发布','<?php echo U('Admin/user/ksfabu');?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 考试任务发布</a></span> 
	<span class="l" style="padding-left: 10px;">
	<a href="javascript:;" onclick="yuqi()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 考试逾期的会员</a></span> 

	</div>

	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">会员列表</th>
			</tr>
			<tr class="text-c">
				<th width="50">头像</th>
				<th width="50">用户名</th>
				<th width="50">工号</th>
				<th width="30">学习进度</th>
				
				<th width="50">考试进度</th>
				<th width="50">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><tr class="text-c">

					<td><img style="width: 100px;height: 100px;" src="/gt/Public/<?php echo (ltrim($foo["user_img"],'./Public')); ?>"></td>
					<td><?php echo ($foo["user_username"]); ?></td>
					<td><?php echo ($foo["user_number"]); ?></td>
					<td>
						<p>一号厅：已完成<b><?php echo ($foo["studyting1"]); ?></b>板/共3板</p>
						<p>二号厅：已完成<b><?php echo ($foo["studyting2"]); ?></b>板/共4板</p>
					</td>
					
					<td>
						<p>一号厅：
							<?php if(in_array('0',$foo['examstatus'])){echo '完成';}else{echo '未完成';};?>
						</p>
						<p>二号厅：<?php if(in_array('1',$foo['examstatus'])){echo '完成';}else{echo '未完成';};?></p>
					</td>


				
					<td class="td-manage">
					<a title="编辑并查看详细信息" href="javascript:;" onclick="edit('编辑','edit.html?id=<?php echo ($foo["user_id"]); ?>',<?php echo ($foo["user_id"]); ?>,'800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
					<a title="删除" href="javascript:;" onclick="del(this,<?php echo ($foo["user_id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
					
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<?php echo ($page); ?>
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
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*产品-编辑*/
function edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
function fabu(title,url,w,h){
	layer_show(title,url,w,h);
}
function ksfabu(title,url,w,h){
	layer_show(title,url,w,h);
}
/*产品-增加*/
function append(title,url,w,h){
	layer_show(title,url,w,h);
}
function yuqi(){
		// console.log('考试逾期的会员');return false;		
	location.href="<?php echo U('Admin/User/yuqi');?>";
}
/*产品-删除*/
function del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: "<?php echo U('Admin/user/del');?>",
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