<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" href="/shiji/Public/Home/css/public.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/<?php echo ($jc); ?>.css" />
		<!-- <link rel="stylesheet" href="/shiji/Public/Home/css/comfirm_order.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/index.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/shop_cart.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/address.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/comment.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/order.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/order_detail.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/user.css" /> -->
	</head>
<body>
		 <!--头部-->
	    <div id="header">
	    	<div class="top">
	    		<div>
	    			<span>您好&nbsp;欢迎来到世纪沉香坊在线商城</span>
	    			<p>
	    			<?php if(empty($_SESSION['user_id'])): ?><a href="<?php echo U('User/login');?>">登录 |</a>
	    			    <a href="<?php echo U('User/reg');?>">注册</a>
	    			    <?php else: ?>
	    			    <a href="<?php echo U('User/logout');?>">退出</a><?php endif; ?>
	    			</p>
	    			<ul>
	    				<li>
	    					<a href="javascript:void(0)">
	    						<img src="/shiji/Public/Home/img/icon1.png"/>
	    						<span>我关注的商品</span>
	    						<i></i>
	    					</a>
	    					<ul>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    					</ul>
	    				</li>
	    				<li>
	    					<a href="javascript:void(0)">
	    						<span>企业购 |</span> 						
	    					</a>
	    				</li>
	    				<li>
	    					<a href="<?php echo U('Center/order');?>">
	    						<span>我的订单</span>
	    						<i></i>
	    					</a>
	    					<ul>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    					</ul>
	    				</li>
	    				<li>
	    					<a href="javascript:void(0)">
	    						<span>商家支持</span>
	    						<i></i>
	    					</a>
	    					<ul>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    					</ul>
	    				</li>
	    				<li>
	    					<a href="javascript:void(0)">
	    						<img src="/shiji/Public/Home/img/icon2.png"/>
	    						<span>网站导航</span>
	    						<i></i>
	    					</a>
	    					<ul>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    						<li><a href="javascript:void(0)">文竹小盆栽</a></li>
	    					</ul>
	    				</li>
	    			</ul>
	    		</div>
	    	</div>
	    	<div>
	    		<div class="logo">
	    			<a href="<?php echo U('Index/index');?>"><img src="/shiji/Public/Home/img/logo.png"/></a>
	    		</div>
	    		<div>
	    			<div class="search">
	    				<form action="<?php echo U('Product/shop_list');?>" method="POST">
	    					<input type="text" name="product_name" placeholder="搜索关键词" />
	    					<button type="submit">搜索商品</button>
	    				</form>
	    			</div>
	    			<span>热门搜索：</span>
	    			<ul>
	    				<li><a href="<?php echo U('Product/shop_list');?>">沉香珠串 </a></li>
	    				<li><a href="<?php echo U('Product/shop_list');?>">沉香雕件</a></li>
	    				<li><a href="<?php echo U('Product/shop_list');?>">沉香摆件</a></li>
	    				<li><a href="<?php echo U('Product/shop_list');?>">沉香熏材</a></li>
	    			</ul>
	    		</div>
	    		<div class="cart">
	    			<a href="<?php echo U('Cart/shop_cart');?>">
	    				<img src="/shiji/Public/Home/img/cart.png"/>
	    				<span>我的购物车</span>
	    				<span>（<?php echo ($cartsum); ?>）</span>
	    			</a>
	    		</div>
	    	</div>

	    	<!--导航栏-->
	    	<div class="nav">
	    		<div>
	    			<div>
	    				<p>全部产品分类&nbsp;&nbsp;&nbsp;&nbsp;&gt;</p>
	    				<ul>
	    					<li><a href="<?php echo U('Product/shop_list');?>">奇楠专区</a></li>
	    					<li><a href="<?php echo U('Product/shop_list');?>">沉香串珠</a></li>
	    					<li><a href="<?php echo U('Product/shop_list');?>">随形专区 </a></li>
	    					<li><a href="<?php echo U('Product/shop_list');?>">香道熏材</a></li>
	    					<li><a href="<?php echo U('Product/shop_list');?>">沉香雕件</a></li>
	    					<li><a href="<?php echo U('Product/shop_list');?>">沉香原材</a></li>
	    					<li><a href="<?php echo U('Product/shop_list');?>">沉香摆件</a></li>
	    				</ul>
	    			</div>
	    			<ul>
	    				<li><a href="<?php echo U('Index/index');?>">首页</a></li>
	    				<li><a href="<?php echo U('Product/shop_list');?>">当日精选</a></li>
	    				<li><a href="<?php echo U('Product/shop_list');?>">设计精选</a></li>
	    				<li><a href="<?php echo U('Product/shop_list');?>">最新上市</a></li>
	    				<li><a href="<?php echo U('Product/shop_list');?>">人气商品</a></li>
	    			</ul>
	    		</div>
	    	</div>
	    </div>
﻿
	    <!--主体内容-->
	    <div id="middle">
	    	<!--搜索框-->
	    	<div>
	    		<div class="search">
		    		<form action="" method="get" onsubmit="return false;">
						<input type="text" placeholder="搜索关键词" />
						<input type="hidden" name="cate" id="cate" value="">
						<input type="hidden" name="place" id="place" value="">
						<input type="hidden" name="speci" id="speci" value="">
						<input type="hidden" name="region" id="region" value="">
						<button type="submit">搜索</button>
					</form>
		    	</div>
		    	<h2>所有分类</h2>
		    	<!--分类框-->
		    	<div class="classify">
		    		<dl>
		    			<dt>产品类别：</dt>
		    			<?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><dd><a href="javascript:void(0)" onclick="cate(<?php echo ($foo["category_id"]); ?>)"><?php echo ($foo["category_name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?> 
		    		</dl>
		    		<dl>
		    			<dt>按产区分 :</dt>
		    			<?php if(is_array($place)): $i = 0; $__LIST__ = $place;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><dd><a href="javascript:void(0)" onclick="place(<?php echo ($foo["place_id"]); ?>)"><?php echo ($foo["place_name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
		    		</dl>
		    		<dl>
		    			<dt>按规格分：</dt>
		    			<?php if(is_array($speci)): $i = 0; $__LIST__ = $speci;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><dd>
		    			<a href="javascript:void(0)" onclick="speci(<?php echo ($foo["speci_id"]); ?>)"><?php echo ($foo["speci_name"]); ?></a>
		    			</dd><?php endforeach; endif; else: echo "" ;endif; ?>
		    		</dl>
		    		<dl>
		    			<dt>按价格分：</dt>
		    			<?php if(is_array($region)): $i = 0; $__LIST__ = $region;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><dd><a href="javascript:void(0)" onclick="region(<?php echo ($foo["region_id"]); ?>)"><?php echo ($foo["region_name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
		    		</dl>
		    	</div>
	    	    <!--综合排序-->
	    	    <div>
	    	    	<ul>
	    	    		<li class="active"><a href="javascript:void(0)">综合排序</a></li>
	    	    		<li><a href="javascript:void(0)">销量</a></li>
	    	    		<li><a href="javascript:void(0)">评论</a></li>
	    	    		<li><a href="javascript:void(0)">新品</a></li>
	    	    		<li><a href="javascript:void(0)">价格</a></li>
	    	    	</ul>
	    	    	<div>
	    	    		<p>共<i class="count"><?php echo ($count); ?></i> 件商品</p>
	    	    		<!-- <p>
	    	    			<span>1</span>
	    	    			<span>/120</span>
	    	    		</p>
	    	    		<form action="" method="get" onsubmit="return false;">
	    	    			<button type="submit" class="left">&lt;</button>
	    	    			<button type="submit">&gt;</button>
	    	    		</form> -->
	    	    	</div>
	    	    </div>
	    		<!--商品列表-->
	    		<ul class="pro_list">
	    		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
	    				<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img src="/shiji/Public/<?php echo (ltrim($foo["product_thumb"],'./Public')); ?>"></a>
	    				<h3><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">【世纪沉香坊】</a></h3>
	    				<p><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_name"]); ?></a></p>
	    				<span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_min"]); ?></a></span>
	    				<small><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">查看详情</a></small>
	    			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	    		</ul>
	    		<!-- 销量 -->
	    		<ul class="sales">
	    		<?php if(is_array($sales)): $i = 0; $__LIST__ = $sales;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
	    				<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img src="/shiji/Public/<?php echo (ltrim($foo["product_thumb"],'./Public')); ?>"></a>
	    				<h3><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">【世纪沉香坊】</a></h3>
	    				<p><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_name"]); ?></a></p>
	    				<span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_min"]); ?></a></span>
	    				<small><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">查看详情</a></small>
	    			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	    		</ul>
	    		<!--评论-->
	    		<ul class="comments">
	    		<?php if(is_array($comments)): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
	    				<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img src="/shiji/Public/<?php echo (ltrim($foo["product_thumb"],'./Public')); ?>"></a>
	    				<h3><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">【世纪沉香坊】</a></h3>
	    				<p><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_name"]); ?></a></p>
	    				<span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_min"]); ?></a></span>
	    				<small><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">查看详情</a></small>
	    			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	    		</ul>
	    		<!-- 新品 -->
	    		<ul class="nows">
	    		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
	    				<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img src="/shiji/Public/<?php echo (ltrim($foo["product_thumb"],'./Public')); ?>"></a>
	    				<h3><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">【世纪沉香坊】</a></h3>
	    				<p><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_name"]); ?></a></p>
	    				<span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_min"]); ?></a></span>
	    				<small><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">查看详情</a></small>
	    			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	    		</ul>
	    		<!-- 价格 -->
	    		<ul class="min">
	    		<?php if(is_array($min)): $i = 0; $__LIST__ = $min;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
	    				<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img src="/shiji/Public/<?php echo (ltrim($foo["product_thumb"],'./Public')); ?>"></a>
	    				<h3><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">【世纪沉香坊】</a></h3>
	    				<p><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_name"]); ?></a></p>
	    				<span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><?php echo ($foo["product_min"]); ?></a></span>
	    				<small><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>">查看详情</a></small>
	    			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	    		</ul>
	    		<!--页码-->
	    		<div>
	    			<ul class="page">
	    			<?php echo ($page); ?>
		    		</ul>
		    		<form action="" method="get" onsubmit="return false;">
		    			<p>共<i class="pagenum"><?php echo ($pagenum); ?></i> 页</p>
			    		
		    		</form>		    		
	    		</div>
	    		<!--猜你喜欢-->
	    		<div class="love">
	    			<h3>猜你喜欢</h3>
	    			<ul>
	    				<?php if(is_array($like)): $i = 0; $__LIST__ = $like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img style="width:190px;height:190px" src="/shiji/Public/<?php echo (ltrim($foo["product_thumb"],'./Public')); ?>"/><span>越南香熏</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	    			</ul>
	    		</div>
	    	</div>
	    </div>
<script type="text/javascript" src="/shiji/Public/Home/js/jquery.js" ></script>
<script type="text/javascript">
$(function(){
  $(".pro_list").show();
  $(".sales").hide();
  $(".comments").hide();
  $(".nows").hide();
  $(".min").hide();
});
</script>
<script type="text/javascript">
function cate(cid){
	$('#cate').val(cid);
	var cate=$('#cate').val();
	var place=$('#place').val();
	var speci=$('#speci').val();
	var region=$('#region').val();
	$.ajax({
		url:"<?php echo U('Home/Product/shop_list');?>",
		type:"post",
		dataType:'json',
		data:{cate:cate,place:place,speci:speci,region:region},
		success:function(data){
			var len=data.list.length;
			//即将更新的内容
			var content='';
			//遍历
			for(var i=0;i<len;i++){
				content+='<li>';
				content+='<a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'"><img src=".'+data.list[i].product_thumb+'"></a>';
				content+='<h3><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">【世纪沉香坊】</a></h3>';
				content+='<p><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">'+data.list[i].product_name+'</a></p>';
				content+='<span><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">'+data.list[i].product_min+'</a></span>';
				content+='<small><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">查看详情</a></small>';
				content+='</li>';
			}
			$('.pro_list').html(content);
			$('.page').html(data.page);
			var pagenum=data.pagenum;
			if(pagenum<1){
				pagenum=1;
			}
			$('.count').html(data.count);
		}
	});
}
function place(pid){
	$('#place').val(pid);
	var cate=$('#cate').val();
	var place=$('#place').val();
	var speci=$('#speci').val();
	var region=$('#region').val();
	$.ajax({
		url:"<?php echo U('Home/Product/shop_list');?>",
		type:"post",
		dataType:'json',
		data:{cate:cate,place:place,speci:speci,region:region},
		success:function(data){
			var len=data.list.length;
			//即将更新的内容
			var content='';
			//遍历
			for(var i=0;i<len;i++){
				content+='<li>';
				content+='<a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'"><img src=".'+data.list[i].product_thumb+'"></a>';
				content+='<h3><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">【世纪沉香坊】</a></h3>';
				content+='<p><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">'+data.list[i].product_name+'</a></p>';
				content+='<span><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">'+data.list[i].product_min+'</a></span>';
				content+='<small><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">查看详情</a></small>';
				content+='</li>';
			}
			$('.pro_list').html(content);
			$('.page').html(data.page);
			var pagenum=data.pagenum;
			if(pagenum<1){
				pagenum=1;
			}
			$('.count').html(data.count);
		}
	});
}
function speci(sid){
	$('#speci').val(sid);
	var cate=$('#cate').val();
	var place=$('#place').val();
	var speci=$('#speci').val();
	var region=$('#region').val();
	$.ajax({
		url:"<?php echo U('Home/Product/shop_list');?>",
		type:"post",
		dataType:'json',
		data:{cate:cate,place:place,speci:speci,region:region},
		success:function(data){
			var len=data.list.length;
			//即将更新的内容
			var content='';
			//遍历
			for(var i=0;i<len;i++){
				content+='<li>';
				content+='<a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'"><img src=".'+data.list[i].product_thumb+'"></a>';
				content+='<h3><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">【世纪沉香坊】</a></h3>';
				content+='<p><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">'+data.list[i].product_name+'</a></p>';
				content+='<span><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">'+data.list[i].product_min+'</a></span>';
				content+='<small><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">查看详情</a></small>';
				content+='</li>';
			}
			$('.pro_list').html(content);
			$('.page').html(data.page);
			var pagenum=data.pagenum;
			if(pagenum<1){
				pagenum=1;
			}
			$('.count').html(data.count);
		}
	});
}
function region(rid){
	$('#region').val(rid);
	var cate=$('#cate').val();
	var place=$('#place').val();
	var speci=$('#speci').val();
	var region=$('#region').val();
	$.ajax({
		url:"<?php echo U('Home/Product/shop_list');?>",
		type:"post",
		dataType:'json',
		data:{cate:cate,place:place,speci:speci,region:region},
		success:function(data){
			var len=data.list.length;
			//即将更新的内容
			var content='';
			//遍历
			for(var i=0;i<len;i++){
				content+='<li>';
				content+='<a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'"><img src=".'+data.list[i].product_thumb+'"></a>';
				content+='<h3><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">【世纪沉香坊】</a></h3>';
				content+='<p><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">'+data.list[i].product_name+'</a></p>';
				content+='<span><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">'+data.list[i].product_min+'</a></span>';
				content+='<small><a href="<?php echo U('Product/pro_details');?>?id='+data.list[i].product_id+'">查看详情</a></small>';
				content+='</li>';
			}
			$('.pro_list').html(content);
			$('.page').html(data.page);
			var pagenum=data.pagenum;
			if(pagenum<1){
				pagenum=1;
			}
			$('.pagenum').html(pagenum);
			$('.count').html(data.count);
		}
	});
}

</script>



	    <!--尾部-->
	    <div id="footer">
	    	<div>
	    		<ul>
	    			<li>
	    				<dl>
	    					<dt>帮助中心</dt>
				    		<dd>购物常见问题</dd>
				    		<dd>货到付款</dd>
	    				</dl>
	    			</li>
	    			<li>
	    				<dl>
    						<dt>我们承诺</dt>
		    				<dd>我们承诺100％原创设计</dd>
		    				<dd>365天不打烊</dd>
		    				<dd>无理由退换货 ( 除定制 )</dd>
	    				</dl>
	    			</li>
	    			<li>
	    				<dl>
	    					<dt>联系我们</dt>
		    				<dd>联系人：张经理</dd>
		    				<dd>微 信：778435497（咨询鉴定）</dd>
		    				<dd> 电 话：18605526776</dd>
	    				</dl>
	    			</li>
	    		</ul>
	    		<div class="code">
	    			<img src="/shiji/Public/Home/img/code1.png" alt="二维码" />
	    			<img src="/shiji/Public/Home/img/code2.png" alt="二维码" />
	    			<p>扫码进入官方服务号</p>
	    			<p>扫码张海明老师订阅号</p>
	    		</div>
	    	</div>
	    	<p>世纪沉香坊有限公司 WowSai.com Copyright© 2008-2013 [京ICP备10020900][京公网安备11010502026420][京ICP证090011号]</p>
	    </div>
	    <script type="text/javascript" src="/shiji/Public/Home/js/jquery.js" ></script>
		<script type="text/javascript" src="/shiji/Public/Home/js/public.js" ></script>
		<script type="text/javascript" src="/shiji/Public/Home/js/<?php echo ($jc); ?>.js" ></script>
	    <!-- <script type="text/javascript" src="/shiji/Public/Home/js/index.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/comfirm_order.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/pay.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/shop_cart.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/comment.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/order.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/order_detail.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/user.js" ></script> -->
	</body>
</html>