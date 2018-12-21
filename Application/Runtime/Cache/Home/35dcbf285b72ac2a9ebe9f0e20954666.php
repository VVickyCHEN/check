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
	    	<p>确认订单页</p>
	    	<p>
	    		<span>填写并核对订单信息</span>
	    		<span>配送至：</span>
	    	</p>
	    	<!--收货地址-->
	    	<div>
	    		<p>
	    			<span>收货人信息:</span>
	    			<span><a href="<?php echo U('Center/address');?>">新增收货地址</a></span>
	    		</p>
	    		<ul>
	    			<li>
	    				<p><?php echo ($address['address_name']); ?></p>
	    				<p><?php echo ($address['address_name']); ?></p>
	    				<p><?php echo ($address['address_city']); echo ($address['address_area']); echo ($address['address_way']); echo ($address['address_detail']); ?></p>
	    				<p><?php echo ($address['address_phone']); ?></p>
	    				<p>默认地址</p>
	    				<input type="hidden" class="address_id" value="<?php echo ($address['address_id']); ?>">
	    				<a href="javascript:void(0)"><span>删除</span></a>
	    				<a href="javascript:void(0)"><span>编辑</span></a>
	    			</li>
	    		</ul>
	    		<a href="javascript:void(0)"><span>更多地址>></span></a>
	    	</div>
	    	<p>填写并核对订单信息</p>
	    	<div>
	    		<p><a href="javascript:void(0)">满减</a></p>
	    		<p>
	    			<span>活动商品已购买2件（已减 </span>
	    			<span>&nbsp;¥ 66.8</span>
	    			<span>）</span>
	    		</p>
	    		<p><a href="javascript:void(0)">&gt;去凑单&gt;</a></p>
	    	</div>
	    	<!--订单列表-->
	    	<ul class="order_list">
	    	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
		        <input type="checkbox" class="order_id" value="<?php echo ($foo["order_id"]); ?>">
		        <a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["order_product"]); ?>"><img src=".<?php echo ($foo["product_thumb"]); ?>"></a>
		        <p><span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["order_product"]); ?>">【世纪沉香坊】</a></span>
		        <span><?php echo (substr($foo["product_name"],0,32)); ?>...</span></p>
		        <p><span>颜色：棕色</span>
		        <span>规格：
		        <?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_style_id"]) == $foo["order_style"]): echo ($voo["style_name"]); endif; endforeach; endif; else: echo "" ;endif; ?>
				</span></p>
		        <p><span>¥ 
		        <?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_style_id"]) == $foo["order_style"]): echo ($voo["product_price"]); endif; endforeach; endif; else: echo "" ;endif; ?>
				</span>
		        <span>0.8kg</span></p>
		        <p>X<?php echo ($foo["order_num"]); ?>
		        <input type="hidden" class="order_num" value="<?php echo ($foo["order_num"]); ?>">
		        <input type="hidden" class="order_total" value="<?php echo ($foo["order_total"]); ?>">
		        <input type="hidden" class="total" value="">
		        </p>
		        <p>有货</p>
		        </li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
	    	<!--金额计算-->
	    	<dl>
	    		<dt><i class="allnums"></i> 件商品，总商品金额：</dt><dd class="money">¥<i class="sums"></i></dd>
	    		<dt>返现：</dt><dd>¥00.00 </dd>
	    		<dt>运费：</dt><dd>¥00.00</dd>
	    		<dt>服务费：</dt><dd>¥00.00</dd>
	    		<dt>退换无忧：</dt><dd>¥00.00</dd>
	    	</dl>
	    	<p>
	    		<span>寄送至：广东省广州市广州天河区体育西路168号（时尚天河） </span>
	    		<span>
	    			<span>应付金额：总价：</span>
	    			<span>¥<i class="sums"></i></span>
	    		</span>
	    		<span>收货人：陆仁贾  &nbsp;188****2580</span>
	    	</p>	    	
	    	<button type="button" id="submit">提交订单</button>
	    	<!--猜你喜欢-->
    		<div class="love">
    			<h3>猜你喜欢</h3>
    			<ul>
    				<?php if(is_array($like)): $i = 0; $__LIST__ = $like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img style="width:190px;height:190px" src=".<?php echo ($foo["product_thumb"]); ?>"/><span>越南香熏</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    			</ul>
    		</div>
	    </div>
<script type="text/javascript" src="/shiji/Public/Home/js/jquery.js"></script>
<script type="text/javascript">
// 勾选后求和
$('.order_id').click(function(){
	// 价格求和
	var allsum=0;
	$('.order_id:checked').each(function(){
		allsum+=parseFloat($(this).parents('li').find('.order_total').val());
	});
	$('.sums').html(allsum.toFixed(2));
	$('.total').val(allsum.toFixed(2));
	// 数量求和
	var allnum=0;
	$('.order_id:checked').each(function(){
		allnum+=parseInt($(this).parents('li').find('.order_num').val());
	});
	$('.allnums').html(allnum);
});
</script>
<script type="text/javascript">
	$('#submit').click(function(msg){
		var id=[];
		$('.order_id:checked').each(function(){
			id.push($(this).val());
		})
		var money=$('.total').val();
		var address_id=$('.address_id').val();
		$.ajax({
			url:"<?php echo U('Cart/comfirm_order');?>",
			data:{id:id,money:money,address_id:address_id},
			type:"post",
			dataType:"json",
			success:function(data){
				if(data.code==1){
					location.href="<?php echo U('Cart/pay');?>";
				} else {
					alert(data.info);
					return false;
				}
			}
		});
	});
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