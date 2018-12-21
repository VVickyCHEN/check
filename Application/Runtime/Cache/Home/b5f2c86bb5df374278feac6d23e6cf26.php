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
	    <!--中部-->
	    <div id="middle">
	    	<p>用户中心</p>
	    	<div>
		    		<!--左侧导航-->
		    	<dl>
		    		<dt><a href="<?php echo U('Center/order');?>">订单中心</a></dt>
		    		<dd><a href="<?php echo U('Center/order');?>">我的订单</a></dd>
		    		
	                <dt><a href="javascript:void(0)">关注中心</a></dt>
		    		<dd><a href="javascript:void(0)">关注的商品</a></dd>
		    		<dd><a href="javascript:void(0)">关注的店铺 </a></dd>
		    		<dd><a href="javascript:void(0)">关注的品牌</a></dd>
		    		<dd><a href="javascript:void(0)">关注的活动</a></dd>
		    		
		    		<dt><a href="javascript:void(0)">个人设置</a></dt>
		    		<dd class="active"><a href="<?php echo U('Center/user');?>">个人资料</a></dd>
		    		<dd><a href="<?php echo U('Center/insert');?>">收货地址 </a></dd>
		    		<dd><a href="<?php echo U('Center/password');?>">修改密码</a></dd>
		    	</dl>
		    	<!--右侧订单-->
		    	<div>
		    		<div>
		    			<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($product["product_id"]); ?>">
		    				<img src="/shiji/Public/<?php echo (ltrim($product["product_thumb"],'./Public')); ?>" />
		    			</a>
		    			
		    			<form method="get" action="" onsubmit="return false;">
		    				<p>请您至少填写一件商品的评价</p>
		    				<div>
		    					<p><!-- 商品满意度 --></p>
		    					<ul>
		    						<!-- <li><img src="/shiji/Public/Home/img/page_icon.png"></li>
		    						<li><img src="/shiji/Public/Home/img/page_icon.png"></li>
		    						<li><img src="/shiji/Public/Home/img/page_icon.png"></li>
		    						<li><img src="/shiji/Public/Home/img/page_icon.png"></li>
		    						<li><img src="/shiji/Public/Home/img/page_icon.png"></li> -->
		    					</ul>
		    				</div>
		    				<div>
		    					<p>买家印象</p>
		    					<ul>
		    						<li>质量不错</li>
		    						<li>款式不错</li>
		    						<li>设计精美</li>
		    						<li>颜色好看</li>
		    						<li>做工精细</li>
		    						<li>用料真实</li>
		    						<li>时尚大气</li>
		    						<li>大小适中</li>
		    					</ul>
		    				</div>
		    				<div>
		    					<p>评价晒单</p>
		    					<div>
		    						<textarea class="connent"></textarea>
		    						<!-- <img src="/shiji/Public/Home/img/sc_o1.png" />
		    						<img src="/shiji/Public/Home/img/sc_o1.png" /> -->
		    						<input type="hidden" id="product_id" value="<?php echo ($product_id); ?>">
		    						<input type="hidden" id="order_id" value="<?php echo ($order_id); ?>">
		    						<input type="hidden" id="username" value="<?php echo ($username); ?>">
		    					</div>
		    				</div>
		    				<input type="file" id="imgfile" multiple name="img[]" value="上传相片" />
		    				<p>上传相片</p>
		    				<button type="submit" id="submit">提交</button>
		    			</form>
		    		</div>
		    	    <!--评价列表-->
		    	    <ul>
		    	    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
            				<p>
            					<span><?php echo (mb_substr($foo["comment_name"],0,1)); ?>******<?php echo (mb_substr($foo["comment_name"],-1,1)); ?>(匿名):</span>
            				</p>
            				<?php if($foo["comment_img"] != null): ?><img src="/shiji/Public/<?php echo (ltrim($foo["comment_img"]["0"],'.Public/')); ?>"><?php endif; ?>
            				<ul>
            					<li></li>
            					<li><?php echo ($foo["comment_connent"]); ?></li>
            					<li><?php echo (date("Y",$foo['order_time'])); ?>年<?php echo (date("m",$foo['order_time'])); ?>月<?php echo (date("d",$foo['order_time'])); ?>日 <?php echo (date("H",$foo['order_time'])); ?>:<?php echo (date("i",$foo['order_time'])); ?></li>
            				</ul>
            			</li><?php endforeach; endif; else: echo "" ;endif; ?>
            		</ul>	
		    	    <!--页码-->
			        <ul class="page">
		    			<?php echo ($page); ?>
		    		</ul>
		    	</div>
		    </div>	
	    </div>

<script type="text/javascript">
var imgfile=document.getElementById("imgfile");
var submit=document.getElementById("submit");

submit.onclick=function(){
	var fd = new FormData();
	var ss=$('.connent').val();
	if(ss==''){
		alert('评论不可为空');
		return false;
	}
	fd.append("comment_connent",ss);
	fd.append("comment_name",$('#username').val());		
	fd.append("product_id",$('#product_id').val());	
	fd.append("order_id",$('#order_id').val());
	for(var i=0;i<imgfile.files.length;i++){
		// 在每个匹配元素的末尾插入参数内容
		fd.append("img[]",imgfile.files[i]);
	}
	$.ajax({
		// 提交方式
		type:"post",
		// 提交地址
		url:"<?php echo U('Home/Center/comment');?>",
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
				// 数据添加成功
				alert(data.info);
				location.href="<?php echo U('Center/order');?>?statu=3"
			} else {
				// 数据添加失败
				alert(data.info);
			}
		},
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