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
	    	<h3>我的购物车</h3>	    	
	    	<form action="comfirm_order.html" method="post" onsubmit="return false;">
	    		<!--配送地址-->
	    		<div>
		    		<p>全部商品（<?php echo ($cartsum); ?>）</p>
		    		<div>	    			
	    				<label for="address">配送至：</label>
	    				<select name="address" id="address">
	    			    	<option value="广州天河区">广州天河区</option>
	    			    	<option value="广州白云区">广州白云区</option>
	    			    	<option value="广州越秀区">广州越秀区</option>
	    			    	<option value="广州增城区">广州增城区</option>
	    			    </select>	    			    		    			
		    		</div>
		    	</div>
		    	<!--订单项-->
		    	<ul>
		    		<li>
		    			<input type="checkbox" onclick="demo()" name="checkAll" id="checkAll" />
		    			<label for="checkAll">全选</label>
		    		</li>
		    		<li>商品</li>
		    		<li>操作</li>
		    		<li>小计（元）</li>
		    		<li>数量</li>
		    		<li>单价</li>
		    	</ul>
		    	<!--满减-->
		    	<div>
		    		<button type="submit" onsubmit="return false;">满减</button>
		    		<p>
		    			<span>活动商品已购买2件（已减  </span>
		    			<span>¥66.8</span>
		    			<span>）</span>
		    		</p>
		    		<p><a href="shop_list.html">&gt;去凑单&gt;</a></p>
		    		<p></p>
		    	</div>
		    	<!--订单列表-->
		    	<ul class="order_list">
		    	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
          			<input type="checkbox" onclick="setAll()" name="cart_id" class="cart_id" value="<?php echo ($foo["cart_id"]); ?>">
          			<input type="hidden" class="cart_product" value="<?php echo ($foo["cart_product"]); ?>">
          			<input type="hidden" class="order_style" value="<?php echo ($foo["cart_style"]); ?>">
          			<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["cart_product"]); ?>">
          			<img src=".<?php echo ($foo["product_thumb"]); ?>"></a>
          			<p><span><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["cart_product"]); ?>">【世纪沉香坊】</a></span><span><?php echo ($foo["product_name"]); ?></span></p>
          			<p><span>颜色：棕色</span><span>规格：
          			<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_style_id"]) == $foo["cart_style"]): echo ($voo["style_name"]); endif; endforeach; endif; else: echo "" ;endif; ?>
					</span></p>
          			<p><span>¥
          			<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_style_id"]) == $foo["cart_style"]): echo ($voo["product_price"]); endif; endforeach; endif; else: echo "" ;endif; ?>
          			</span><span><a href="javascript:void(0)">更多促销</a></span></p>
          			<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if(($voo["product_style_id"]) == $foo["cart_style"]): ?><input type="hidden" class="money" value="<?php echo ($voo["product_price"]); ?>">
					<input type="hidden" class="product_num" value="<?php echo ($voo["product_num"]); ?>"><?php endif; endforeach; endif; else: echo "" ;endif; ?>
          			<div><div>
          			<button class="num_jian">-</button>
          			<input type="text" class="number" value="<?php echo ($foo["cart_num"]); ?>">
          			<button class="num_jia">+</button></div><span>有货</span></div>          			
          			<p><span>¥<i class="sums"><?php echo ($foo["cart_price"]); ?></i></span><span>0.8kg</span></p>
          			<p><span onclick="cartdel(<?php echo ($foo["cart_id"]); ?>)">删除</span>
	                <span>移到我的关注</span></p>
	                </li><?php endforeach; endif; else: echo "" ;endif; ?>
          		</ul>
		    	<!--结算-->
		    	<ol>
		    		<li><span onclick="allcheck()">全选 </span></li>
		    		<li><span onclick="alldel()">删除选中的商品 </span></li>
		    		<li><span>移到我的关注 </span></li>
		    		<li><span>清除下柜的商品</span></li>
		    		<li><span>¥<i class="allsums">0.00</i></span></li>
		    		<li><span>已选择<i class="allnums">0</i> 件商品&nbsp;&nbsp;&nbsp;总价： </span></li>    		
		    	</ol>
		    	<button type="button" id="submit">去结算</button>
	    	</form>
	    	<!--猜你喜欢-->
    		<div class="love">
    			<h3>猜你喜欢</h3>
    			<ul>
    			<?php if(is_array($like)): $i = 0; $__LIST__ = $like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img style="width:190px;height:190px" src=".<?php echo ($foo["product_thumb"]); ?>"/><span>越南香熏</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    			</ul>
    		</div>
	    </div>
<script type="text/javascript" src="/shiji/Public/Home/js/jquery.js" ></script>
<script type="text/javascript">
$('#submit').click(function(){
	var data=[];
	$('.cart_id:checked').each(function(){
		var select={};
		select.cart_id=$(this).parents('li').find('.cart_id').val();
		select.order_product=$(this).parents('li').find('.cart_product').val();
		select.order_style=$(this).parents('li').find('.order_style').val();
		var product_num=parseInt($(this).parents('li').find('.product_num').val());
		select.order_num=$(this).parents('li').find('.number').val();
		if(select.order_num>product_num){
			alert('有商品超过库存,请重新选择');
			return false;
		}
		select.order_total=$(this).parents('li').find('.sums').html();
		data.push(select);
	});
	if(data == ''|| data == null||data == undefined) {
		alert('请选择想要购买的商品');
        return false;
    }
    $.post("<?php echo U('Cart/shop_cart');?>",{data:data},function(data){
    	if(data.code==1){
    		location.href="<?php echo U('Cart/comfirm_order');?>";
    	} else {
    		alert(data.info);
    	}
    });
});

</script>
<script type="text/javascript">
// 全选框
function demo(){
	var checkAll=document.getElementById("checkAll");
	var checkOne=document.getElementsByName("cart_id");
	for(var i=0;i<checkOne.length;i++){
	checkOne[i].checked=checkAll.checked;
	}
}

// 子框
function setAll(){
	if(!$(".cart_id").checked){
	$("#checkAll").prop("checked",false);
	}
	var Onelen=$("input[type='checkbox'][class='cart_id']").length;
	var Allset=$("input[type='checkbox'][class='cart_id']:checked").length;

	if(Onelen==Allset){
	$("#checkAll").prop("checked",true);
	}
}
</script>
<script type="text/javascript">
$(function(){
	// 点击+号
	$(".num_jia").each(function(a){
		$(this).click(function(){
			// 获取数量
			var i=parseInt($(".number").eq(a).val());
			// 获取库存
			var product_num=parseInt($(this).parents('li').find('.product_num').val());
			if(i<product_num){
				i++;
			} else {
				i=product_num;
				alert('达到库存');
			}
			$(".number").eq(a).val(i);
			// 获取单价
			var price=parseFloat($(this).parents('li').find('.money').val());
			// 算出总价
			var sums=i*price;
			$(this).parents('li').find('.sums').html(sums.toFixed(2));
			// 价格求和
			var allsum=0;
			$('.cart_id:checked').each(function(){
				allsum+=parseFloat($(this).parents('li').find('.sums').html());
			});
			$('.allsums').html(allsum.toFixed(2));
			// 数量求和
			var allnum=0;
			$('.cart_id:checked').each(function(){
				allnum+=parseInt($(this).parents('li').find('.number').val());
			});
			$('.allnums').html(allnum);
		});
	});

	// 点击-号
	$(".num_jian").each(function(a){
		$(this).click(function(){
			// 获取数量
			var i=parseInt($(".number").eq(a).val());
			i--;
			if(i<1){
				i=1;
			}
			$(".number").eq(a).val(i);
			// 获取单价
			var price=parseFloat($(this).parents('li').find('.money').val());
			// 算出总价
			var sums=i*price;
			$(this).parents('li').find('.sums').html(sums.toFixed(2));
			// 价格求和
			var allsum=0;
			$('.cart_id:checked').each(function(){
				allsum+=parseFloat($(this).parents('li').find('.sums').html());
			});
			$('.allsums').html(allsum.toFixed(2));
			// 数量求和
			var allnum=0;
			$('.cart_id:checked').each(function(){
				allnum+=parseInt($(this).parents('li').find('.number').val());
			});
			$('.allnums').html(allnum);
		});
	});
});

</script>

<script type="text/javascript">
// 子框选择后求和
$('.cart_id').click(function(){
	// 价格求和
	var allsum=0;
	$('.cart_id:checked').each(function(){
		allsum+=parseFloat($(this).parents('li').find('.sums').html());
	});
	$('.allsums').html(allsum.toFixed(2));
	// 数量求和
	var allnum=0;
	$('.cart_id:checked').each(function(){
		allnum+=parseInt($(this).parents('li').find('.number').val());
	});
	$('.allnums').html(allnum);
});

// 全选框选择后求和
$('#checkAll').click(function(){
	if(this.checked){
		// 选择
		$('.cart_id').attr('checked',true);
		// 价格求和
		var allsum=0;
		$('.cart_id:checked').each(function(){
			allsum+=parseFloat($(this).parents('li').find('.sums').html());
		});
		$('.allsums').html(allsum.toFixed(2));
		// 数量求和
		var allnum=0;
		$('.cart_id:checked').each(function(){
			allnum+=parseInt($(this).parents('li').find('.number').val());
		});
		$('.allnums').html(allnum);
	} else {
		// 取消选择
		$('.cart_id').attr('checked',false);
		// 价格求和
		var allsum=0;
		$('.cart_id:checked').each(function(){
			allsum+=parseFloat($(this).parents('li').find('.sums').html());
		});
		$('.allsums').html(allsum.toFixed(2));
		// 数量求和
		var allnum=0;
		$('.cart_id:checked').each(function(){
			allnum+=parseInt($(this).parents('li').find('.number').val());
		});
		$('.allnums').html(allnum);
	}
});
</script>
<script type="text/javascript">
	//全选
	function allcheck(){
		// 全选框
		$('#checkAll').attr('checked',true);
		// 选择
		$('.cart_id').attr('checked',true);
		// 价格求和
		var allsum=0;
		$('.cart_id:checked').each(function(){
			allsum+=parseFloat($(this).parents('li').find('.sums').html());
		});
		$('.allsums').html(allsum.toFixed(2));
		// 数量求和
		var allnum=0;
		$('.cart_id:checked').each(function(){
			allnum+=parseInt($(this).parents('li').find('.number').val());
		});
		$('.allnums').html(allnum);
	}

	// 单条删除
	function cartdel(id){
		$.post("<?php echo U('Cart/cartdel');?>",{id:id},function(data){
			if(data.code==1){
				alert(data.info);
				location.href="<?php echo U('Cart/shop_cart');?>";
			} else {
				alert(data.info);
			}
		});
	}

	// 多条删除
	function alldel(){
		var select=[];
		$('.cart_id:checked').each(function(){
			select.push($(this).val());
		})
		$.post("<?php echo U('Cart/alldel');?>",{id:select},function(data){
			if(data.code==1){
				alert(data.info);
				location.href="<?php echo U('Cart/shop_cart');?>";
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