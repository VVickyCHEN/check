<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
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
	    					<a href="collection_page.html">
	    						<span>收藏夹</span>
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
	    <!--中部-->
	    <div id="middle">
	    	<p>收银台</p>
	    	<ul>
	    		<li>订单提交成功，请您尽快付款！订单号21154878166</li>
	    		<li>
	    			<span>应付金额</span>
	    			<span class="active"><?php echo ($order_money); ?></span>
	    			<span>元</span>
	    		</li>
	    		<li>请您 在24小时内完成支付，否则订单会被自动取消（库存紧俏商品支付时限以订单详情页为准）。</li>
	    		<li>
	    			<span>&nbsp;&nbsp;&nbsp;订单详情</span>
	    			<a href="<?php echo U('Cart/order_detail');?>">
	    				<span></span>
	    				<span></span>
	    			</a>	    			
	    		</li>
	    	</ul>
	    	<div>
	    		<p>以下支付由###提供</p>
	    		<p>
	    			<span>白条额度未激活，</span>
	    			<a href="javascript:void(0)"><span class="active">立即激活</span></a>
	    			<span>即可消费</span>
	    		</p>
	    		<div>
	    			<form action="" method="post" onsubmit="return false;">
	    				<div>
	    					<input type="checkbox" name="card" id="card"/>
	    					<label for="card">银行卡</label>
	    					<p>
	    						<span>支付</span>
	    						<span class="active"><?php echo ($order_money); ?></span>
	    						<span>元</span>
	    						<input type="hidden" id="order_id" value="<?php echo ($order_id); ?>">
	    						<input type="hidden" id="order_money"  value="<?php echo ($order_money); ?>">
	    						<input type="hidden" id="order_address"  value="<?php echo ($order_address); ?>">
	    					</p>
	    				</div>	
	    				<div>
	    					<input type="text" name="card_num" id="card_num" placeholder="请输入银行卡时行识别"/>
	    					<button type="submit">确定</button>
	    				</div>
	    				<p>
	    					<span class="active">快捷支付</span>
	    					<span>网银支付</span>
	    				</p>
	    				<ul>
	    					<li><img src="/shiji/Public/Home/img/pay_02.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_03.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_04.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_05.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_06.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_07.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_08.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_09.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_10.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_11.png"/></li>
	    					<li><img src="/shiji/Public/Home/img/pay_12.png"/></li>
	    					<li>更多银行</li>
	    				</ul>
	    				<div>
	    					<input type="password" name="password" id="password" placeholder="请输入密码" />
	    					<button type="submit" id="submit">立即支付</button>
	    				</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
	    <!--尾部-->
	    <div id="footer">
	    	<p>世纪沉香坊有限公司 WowSai.com Copyright© 2008-2013 [京ICP备10020900][京公网安备11010502026420][京ICP证090011号]</p>
	    </div>
	    <script type="text/javascript" src="/shiji/Public/Home/js/jquery.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/public.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/pay.js" ></script>
	</body>
</html>

<script type="text/javascript">

$('#submit').click(function(msg){
	// 订单id
	var order_id=$('#order_id').val();
	// 总额
	var order_money=$('#order_money').val();
	// 总额
	var order_address=$('#order_address').val();
	
	$.ajax({
		url:"<?php echo U('Cart/pay');?>",
		data:{order_id:order_id,order_money:order_money,order_address:order_address},
		type:"post",
		dataType:"json",
		success:function(data){
			if(data.code==1){
				alert(data.info);
				location.href="<?php echo U('Cart/pay_success');?>";
			} else {
				alert(data.info);
				location.href="<?php echo U('Cart/pay_failure');?>";
			}
		}
	});
});

</script>