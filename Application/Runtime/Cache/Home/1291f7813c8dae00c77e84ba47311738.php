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
	    	<div>
		    		<!--左侧导航-->
		    	<dl>
		    		<dt><a href="order.html">订单中心</a></dt>
		    		<dd class="active"><a href="order.html">我的订单</a></dd>
		    		<dd><a href="order.html">团购订单</a></dd>
		    		<dd><a href="order.html">本地生活订单</a></dd>
		    		<dd><a href="order.html">取消订单记录</a></dd>
		    		
	                <dt><a href="javascript:void(0)">关注中心</a></dt>
		    		<dd><a href="javascript:void(0)">关注的商品</a></dd>
		    		<dd><a href="javascript:void(0)">关注的店铺 </a></dd>
		    		<dd><a href="javascript:void(0)">关注的品牌</a></dd>
		    		<dd><a href="javascript:void(0)">关注的活动</a></dd>
		    		
		    		<dt><a href="javascript:void(0)">客服服务</a></dt>
		    		<dd><a href="javascript:void(0)">退换货服务</a></dd>
		    		<dd><a href="javascript:void(0)">价格保护  </a></dd>
		    		<dd><a href="javascript:void(0)">意见建议</a></dd>
		    		<dd><a href="javascript:void(0)">购买咨询</a></dd>
		    		<dd><a href="javascript:void(0)">售后服务</a></dd>
		    		
		    		<dt><a href="javascript:void(0)">个人设置</a></dt>
		    		<dd><a href="user.html">个人资料</a></dd>
		    		<dd><a href="address.html">收货地址 </a></dd>
		    		<dd><a href="javascript:void(0)">修改密码</a></dd>
		    	</dl>
		    	<!--右侧订单-->
		    	<div>
		    		<p>我的订单</p>
		    		<div>
		    			<p>
		    				<span><a href="order.html">我的订单</a></span>
		    				<span>&gt;</span>
		    				<span class="active"><a href="order_detail.html">订单详情</a></span>
		    			</p>
		    			<ul>
		    				<li>
		    					<p>订单编号：</p>
		    					<p>21154878166</p>
		    				</li>
		    				<li>
		    					<p>订单状态：</p>
		    					<p class="active">等待付款</p>
		    				</li>
		    				<li>
		    					<p>收货人：</p>
		    					<p>陆仁贾</p>
		    				</li>
		    				<li>
		    					<p>地址：</p>
		    					<p>广州天河区体育西路168号</p>
		    				</li>
		    				<li>
		    					<p>手机号码：</p>
		    					<p>188****2580</p>
		    				</li>
		    				<li>
		    					<p>电话邮箱：</p>
		    					<p>868956@******COM</p>
		    				</li>
		    			</ul>
		    		</div>
		    		
		    		<div>
		    			<p>支付及配送方式</p>
		    			<ul>
		    				<li>
		    					<p>支付方式：</p>
		    					<p class="active">在线支付</p>
		    				</li>
		    				<li>
		    					<p>运费：</p>
		    					<p>00.00元</p>
		    				</li>
		    				<li>
		    					<p>送货时间：</p>
		    					<p>工作日。双休日与假日均送货</p>
		    				</li>
		    			</ul>
		    		</div>
		    		
		    		<div>
		    			<p>发票信息</p>
		    			<ul>
		    				<li>
		    					<p>发票类型：</p>
		    					<p>普通发票</p>
		    				</li>
		    				<li>
		    					<p>发票抬头：</p>
		    					<p>个人</p>
		    				</li>
		    				<li>
		    					<p>发票内容：</p>
		    					<p>明细</p>
		    				</li>
		    			</ul>
		    		</div>
		    		
		    		<ul>
		    			<li>商品图片</li>
		    			<li>商品名称</li>
		    			<li>商品属性</li>
		    			<li>商品价格</li>
		    			<li>商品数量</li>
		    			<li>库存状态</li>
		    		</ul>
		    		
		    		<!--订单列表-->
		    		<ul class="order_list">
			    	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
			            <a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["order_product"]); ?>"><img src=".<?php echo ($foo["product_thumb"]); ?>"></a><p>
			            <span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["order_product"]); ?>">【世纪沉香坊】</a></span><span><?php echo (mb_substr($foo["product_name"],0,13)); ?>...</span></p>
			            <p><span>颜色：棕色</span>
			            <span>规格：<?php echo (mb_substr($foo["style_name"],0,5)); ?></span></p>
			            <p><span>¥<?php echo ($foo["order_total"]); ?></span>
			            <span>0.8kg</span></p>
			            <p>X<?php echo ($foo["order_num"]); ?></p>
			            <p>有货</p>
			            </li><?php endforeach; endif; else: echo "" ;endif; ?>
			    	</ul>
			    	
			    	<!--金额计算-->
			    	<dl>
			    		<dt>总商品金额：</dt><dd>¥<?php echo ($sums); ?></dd>
			    		<dt>返现：</dt><dd>¥-00.00 </dd>
			    		<dt>运费：</dt><dd>¥00.00</dd>
			    		<dt>服务费：</dt><dd>¥00.00</dd>
			    		<dt>退换无忧：</dt><dd>¥00.00</dd>
			    	</dl>
			    	<p>
			    		<span>寄送至：广东省广州市广州天河区体育西路168号（时尚天河） </span>
			    		<span>
			    			<span>应付金额：总价：</span>
			    			<span>¥<?php echo ($sums); ?></span>
			    		</span>
			    		<span>收货人：陆仁贾  &nbsp;188****2580</span>
			    	</p>	    	
			    	<button type="submit">返回</button>
		    	</div>
	    	</div>	    	
	    </div>


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