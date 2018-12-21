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
	    	<p>用户登录</p>
	    	<!--左侧导航-->
	    	<dl>
	    		<dt><a href="order.html">订单中心</a></dt>
	    		<dd class="active"><a href="order.html">我的订单</a></dd>
	    		
                <dt><a href="javascript:void(0)">关注中心</a></dt>
	    		<dd><a href="javascript:void(0)">关注的商品</a></dd>
	    		<dd><a href="javascript:void(0)">关注的店铺 </a></dd>
	    		<dd><a href="javascript:void(0)">关注的品牌</a></dd>
	    		<dd><a href="javascript:void(0)">关注的活动</a></dd>
	    		
	    		<dt><a href="javascript:void(0)">个人设置</a></dt>
	    		<dd><a href="user.html">个人资料</a></dd>
	    		<dd><a href="address.html">收货地址 </a></dd>
	    		<dd><a href="password.html">修改密码</a></dd>
	    	</dl>
	    	<!--右侧订单-->
	    	<div>
	    		<ul id="anniu">
	    			<li <?php if(($status) == "0"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Center/order');?>?statu=0">我的订单</a></li>
	    			<li <?php if(($status) == "1"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Center/order');?>?statu=1">待付款</a></li>
	    			<li <?php if(($status) == "2"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Center/order');?>?statu=2">待收货</a></li>
	    			<li <?php if(($status) == "3"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Center/order');?>?statu=3">待评价</a></li>
	    		</ul>
	    		<!--订单列表-->
		    	<ul class="order_list">
		    	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
		            <input type="checkbox" style="display: none;">
		            <a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["order_product"]); ?>"><img src=".<?php echo ($foo["product_thumb"]); ?>"></a>
		            <p><span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["order_product"]); ?>">【世纪沉香坊】</a></span><span><?php echo (mb_substr($foo["product_name"],0,12)); ?>...</span></p>
		            <p><span>颜色：棕色</span><span>规格：
		            <?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_style_id"]) == $foo["order_style"]): echo ($voo["style_name"]); endif; endforeach; endif; else: echo "" ;endif; ?>
					</span></p>
		            <p><span>¥ <?php echo ($foo["order_total"]); ?></span><span>0.8kg</span></p>
		            <p>
		            <?php if(($status) == "1"): ?><span><a href="javascript:void(0)" onclick="del(<?php echo ($foo["order_id"]); ?>)">删除</a></span><?php endif; ?>
		            <?php if(($status) == "2"): ?><span><a href="javascript:void(0)" onclick="tui(<?php echo ($foo["order_id"]); ?>)">退货</a></span><?php endif; ?>
		            <?php if(($status) == "3"): ?><span><a href="<?php echo U('Center/comment');?>?gid=<?php echo ($foo["product_id"]); ?>&oid=<?php echo ($foo["order_id"]); ?>">评论</a></span><?php endif; ?>
		            <span><a href="javascript:void(0)"></a></span></p>
		            </li><?php endforeach; endif; else: echo "" ;endif; ?>
		    	</ul>
		    	<ol id="pages">
		    	<?php if(($status) == "1"): ?><!-- <li>取消订单</li>
		    		<li>找人代付</li>
		    		<li>立即付款</li> --><?php endif; ?>
		    	</ol>
		    	<!--猜你喜欢-->
	    		<div class="love">
	    			<h3>猜你喜欢</h3>
	    			<ul>
	    			<?php if(is_array($like)): $i = 0; $__LIST__ = $like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img src=".<?php echo ($foo["product_thumb"]); ?>"/><span>越南香熏</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	    			</ul>
	    		</div>
	    		<!--看了又看-->
	    		<div class="love">
	    			<h3>看了又看</h3>
	    			<ul>
	    			<?php if(is_array($look)): $i = 0; $__LIST__ = $look;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img src=".<?php echo ($foo["product_thumb"]); ?>"/><span>越南香熏</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	    			</ul>
	    		</div>
	    	</div>
	    </div>
	    <script type="text/javascript" src="/shiji/Public/Home/js/jquery.js" ></script>
	<script type="text/javascript">
	function del(id){
		$.post("<?php echo U('Center/del');?>",{order_id:id},function(data){
			if(data.code==1){
				// 删除成功
				alert(data.info);
				location.href="<?php echo U('Center/order');?>?statu=1";
			} else {
				alert(data.info);
			}
		});
	}
	</script>
	<script type="text/javascript">
	function tui(id){
		$.post("<?php echo U('Center/tui');?>",{order_id:id},function(data){
			if(data.code==1){
				// 删除成功
				alert(data.info);
				location.href="<?php echo U('Center/order');?>?statu=2";
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