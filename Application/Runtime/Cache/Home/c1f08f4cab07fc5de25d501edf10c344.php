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
		    		<dd><a href="<?php echo U('Home/Center/user');?>">个人资料</a></dd>
		    		<dd class="active"><a href="<?php echo U('Center/address');?>">收货地址 </a></dd>
		    		<dd><a href="password.html">修改密码</a></dd>
		    	</dl>
		    	<!--右侧订单-->
		    	<div>
		    		<p>收货地址列表页</p>
		    		<p>
		    			<span><a onclick="ins()">+</a></span>
		    			<span>您已经创建了</span>
		    			<span class="active"><?php echo ($count); ?></span>
		    			<span>个收货地址，最多可以 创建</span>
		    			<span class="active">20</span>
		    			<span>个</span>
		    			<input type="hidden" id="addressnum" value="<?php echo ($count); ?>">
		    		</p>
		    		<ul class="addressList">
		    		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
			    			<h3><?php echo ($foo["address_name"]); echo ($foo["address_way"]); ?></h3>
			    			<p>
			    				<span>
			    					<span>*</span>
			    					<span>收货人：</span>
			    				</span>
			    				<span><?php echo ($foo["address_name"]); ?></span>
			    			</p>
			    			<p>
			    				<span>
			    					<span>*</span>
			    					<span>所在地区：</span>
			    				</span>	    				
			    				<span><?php echo ($foo["address_city"]); echo ($foo["address_area"]); echo ($foo["address_way"]); ?></span>
			    			</p>
			    			<p>
			    				<span>
			    					<span>*</span>
			    					<span>地址：</span>
			    				</span>
			    				<span><?php echo ($foo["address_detail"]); ?></span>
			    			</p>
			    			<p>
			    				<span>
			    					<span>*</span>
			    					<span>手机号码：</span>
			    				</span>		    				
			    				<span><?php echo ($foo["address_phone"]); ?></span>
			    			</p>
			    			<p>
			    				<span>
			    					<span>*</span>
			    					<span>固定号码：</span>
			    				</span>		    				
			    				<span><?php echo ($foo["address_tel"]); ?></span>
			    			</p>
			    			<p>
			    				<span>
			    					<span>*</span>
			    					<span>电子邮箱：</span>
			    				</span>		    				
			    				<span><?php echo ($foo["address_email"]); ?></span>
			    			</p>
			    			<ul>
			    				<li><a href="javascript:void(0)" onclick="moren(<?php echo ($foo["address_id"]); ?>)">设为默认</a></li>
			    				<li><a href="javascript:void(0)">使用轻松购</a></li>
			    				<li><a href="javascript:void(0)" onclick="del(<?php echo ($foo["address_id"]); ?>)">删除</a></li>

			    			</ul>
			    		</li><?php endforeach; endif; else: echo "" ;endif; ?>
		    		</ul>
		    	</div>
		    </div>	
	        <!--页码-->
	       <!--  <ul class="page">
    			<li class="prev"><a href="javascript:void(0)">上一页</a></li>
    			<li class="on"><a href="javascript:void(0)">1</a></li>
    			<li><a href="javascript:void(0)">2</a></li>
    			<li><a href="javascript:void(0)">3</a></li>
    			<li><a href="javascript:void(0)">4</a></li>
    			<li><a href="javascript:void(0)">5</a></li>
    			<li><a href="javascript:void(0)">6</a></li>
    			<li><a href="javascript:void(0)">...</a></li>
    			<li class="next"><a href="javascript:void(0)">下一页</a></li>
    		</ul> -->
	    </div>

	<script type="text/javascript">
	function moren(id){
		$.post("<?php echo U('Center/moren');?>",{id:id},function(data){
			if(data.code==1){
				alert(data.info);
				location.href="<?php echo U('Center/address');?>";
			} else {
				alert(data.info);
			}
		});
	}
	</script>
	<script type="text/javascript">
	function ins(){
		var num=$('#addressnum').val();
		if(num>=20){
			alert('地址数已达上限,不可再添加');
		} else {
			location.href="<?php echo U('Center/insert');?>";
		}
	}
	</script>
	<script type="text/javascript">
	function del(id){
		$.post("<?php echo U('Center/address_del');?>",{id:id},function(data){
			if(data.code==1){
				// 删除成功
				alert(data.info);
				location.href="<?php echo U('Center/address');?>";
			} else {
				alert(data.info);
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