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
	    	<p>用户登录</p>
	    	<!--左侧导航-->
	    	<dl>
	    		<dt><a href="order.html">订单中心</a></dt>
	    		<dd><a href="order.html">我的订单</a></dd>
	    		
	    		<dt><a href="javascript:void(0)">个人设置</a></dt>
	    		<dd class="active"><a href="user.html">个人资料</a></dd>
	    		<dd><a href="address.html">收货地址 </a></dd>
	    		<dd><a href="password.html">修改密码</a></dd>
	    	</dl>
	    	<!--右侧表单-->
	    	<div>
	    	    <form action="" method="post" >
	    	    	<ul>
	    	    		<li>
	    	    		</li>
	    	    		<li>
	    	    			<label for="username">收货人：</label>
	    	    			<input name="address_name" id="address_name" value="" />
	    	    		</li>
	    	    		<li>
	    	    		<label for="username">详细地址</label>
	    	    			<input name="address_detail" id="address_detail" value="" />
	    	    		</li>
	    	    		<li>
	    	    			<label for="name">联系手机：</label>
	    	    			<input name="address_phone" id="address_phone" value="" />
	    	    		</li>
	    	    		<li>
	    	    			<label for="email">邮箱：</label>
	    	    			<input name="address_email" id="address_email" value="" />
	    	    		</li>
	    	    		<li>
	    	    			<label for="name">固定电话：</label>
	    	    			<input name="address_tel" id="address_tel" value="" />
	    	    		</li>
	    	    		<li>
	    	    			<label for="address">住址：</label>
	    	    			<select id="s_province" name="s_province">
	    	    			</select>  
		                    <select id="s_city" name="s_city" ></select>
		                    <select id="s_county" name="s_county"></select>
	    	    		</li>
	    	    		<li>
	    	    			<button type="button" id="submit">提交</button>
	    	    		</li>
	    	    	</ul>
	    	    </form>
	    	</div>
	    </div>
	    <!--尾部-->
	    <div id="footer">
	    	<p>世纪沉香坊有限公司 WowSai.com Copyright© 2008-2013 [京ICP备10020900][京公网安备11010502026420][京ICP证090011号]</p>
	    </div>
	    
	    <script type="text/javascript" src="/shiji/Public/Home/js/jquery.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/user.js" ></script>
	    <script type="text/javascript" src="/shiji/Public/Home/js/public.js" ></script>
	    <script src="/shiji/Public/Home/area/area.js"></script>
	    <!-- <script type="text/javascript" src="/shiji/Public/Home/js/chinaArea.js" ></script> -->
	    
	</body>
</html>
<script type="text/javascript">_init_area()</script>
<script type="text/javascript">
    var Gid  = document.getElementById ;
    var showArea = function() {
        Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +    
        Gid('s_city').value + " - 县/区" + 
        Gid('s_county').value + "</h3>"
    }
    // Gid('s_county').setAttribute('onchange','showArea()');
</script>
<script type="text/javascript">
$('#submit').click(function(msg){
	// 获取数据
	var address_name=$('#address_name').val();
	var address_detail=$('#address_detail').val();
	var address_phone=$('#address_phone').val();
	var address_email=$('#address_email').val();
	var address_tel=$('#address_tel').val();
	var address_city=$('#s_province').val();
	var address_area=$('#s_city').val();
	var address_way=$('#s_county').val();

	// 判断数据是否为空
	if(address_name=='' || address_detail=='' || address_phone=='' || address_email=='' || address_tel=='' || address_city=='省份' || address_area=='地级市' || address_way=='市、县级市'){
		alert('数据不完整,请检查后再提交');
		return false;
	}

	var emas=(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/);
	if(!emas.test(address_email)){
		alert('邮箱格式错误!!');
		return false;
	}

	var phos=(/^(((13[0-9]{1})|159|153)+\d{8})$/);
	if(!phos.test(address_phone)){
		alert('手机格式错误!!');
		return false;
	}

	$.post("<?php echo U('Home/Center/insert');?>",{address_name:address_name,address_detail:address_detail,address_phone:address_phone,address_email:address_email,address_tel:address_tel,address_city:address_city,address_area:address_area,address_way:address_way},function(data){
		if(data.code==1){
			// 添加成功
			alert(data.info);
		} else {
			// 添加失败
			alert(data.info);
		}
	});
	msg.preventDefault();
});

</script>