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
	    		
                <dt><a href="javascript:void(0)">关注中心</a></dt>
	    		<dd><a href="javascript:void(0)">关注的商品</a></dd>
	    		<dd><a href="javascript:void(0)">关注的店铺 </a></dd>
	    		<dd><a href="javascript:void(0)">关注的品牌</a></dd>
	    		<dd><a href="javascript:void(0)">关注的活动</a></dd>
	    		
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
	    	    			<div>
	    	    				<img src="/shiji/Public/Home/img/user_01.png"/>
	    	    				<p><a href="javascript:void(0)">编辑头像</a></p>
	    	    			</div>
	    	    			<p>
	    	    				<img src="/shiji/Public/Home/img/user_icon01.png"/>
	    	    				<span>新人会员</span>
	    	    			</p>
	    	    			<p>
	    	    				<img src="/shiji/Public/Home/img/user_icon02.png"/>
	    	    				<span>购买天数：6天</span>
	    	    			</p>
	    	    		</li>
	    	    		<li>
	    	    			<label for="username">昵称：</label>
	    	    			<input name="username" id="username" value="<?php echo ($data["info_nicheng"]); ?>" />
	    	    		</li>
	    	    		<li>
	    	    			<label for="sex">性别：</label>
	    	    			<input type="radio" name="sex" id="gender" value="1" 
	    	    			<?php if(($data["info_gender"]) == "1"): ?>checked<?php endif; ?> 
	    	    			/><label for="man">男</label>
	    	    			<input type="radio" name="sex" id="gender" value="0" 
	    	    			<?php if(($data["info_gender"]) == "0"): ?>checked<?php endif; ?>  
	    	    			/><label for="woman">女</label>
	    	    			<input type="hidden" class="input-text" value="<?php echo ($user_id); ?>" placeholder="" id="info_user" >
	    	    		</li>
	    	    		<li>
	    	    			<label for="brithday">生日：</label>
	    	    			<select id="year" name="year">
	    	    				<option>&nbsp;请选择</option>
	    	    			</select><span>年</span>
	    	    			<select id="month" name="month">
	    	    				<option>&nbsp;请选择</option>
	    	    			</select><span>月</span>
	    	    			<select id="day" name="day">
	    	    				<option>&nbsp;请选择</option>
	    	    			</select><span>日</span>
	    	    			<span>填写生日有惊喜的哦</span>
	    	    		</li>
	    	    		<li>
	    	    			<label for="like">兴趣：</label>
	    	    			<span>选择您 感兴趣的分类，给您最新个推荐</span>
	    	    			<div>
	    	    			<?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><input type="radio" name="like" id="like" value="<?php echo ($foo["category_id"]); ?>" 
	    	    				<?php if(($data["info_like"]) == $foo["category_id"]): ?>checked<?php endif; ?>
	    	    				/><?php endforeach; endif; else: echo "" ;endif; ?>
		    	    		<?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><p><?php echo ($foo["category_name"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
	    	    			</div>	    	    			
	    	    		</li>
	    	    		<li>
	    	    			<label for="email">邮箱：</label>
	    	    			<a href="javascript:void(0)"><span>立即验证</span></a>
	    	    		</li>
	    	    		<li>
	    	    			<label for="name">姓名：</label>
	    	    			<input type="name" name="name" id="name" value="<?php echo ($data["info_name"]); ?>" />
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
	    	    <!--小提示-->
	    	    <p>安全小提示：</p>
	    	    <ol>
	    	    	<li>如果您的账号登录密码忘记，可以通过验证安保问题和答案，重新设置密码。</li>
	    	    	<li>由于安保问题是由您 选定的3个问题和答案，为了防止遗忘，建议您 一周验证记忆一次。</li>
	    	    	<li>安保问题不要设置过于简单， 容易被人猜到。</li>
	    	    </ol>
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
	var info_nicheng=$('#username').val();			// 昵称
	var info_gender=$('#gender:checked').val();		// 性别
	var info_user=$('#info_user').val();			// 用户id
	var info_year=$('#year').val();					// 出生年
	var info_month=$('#month').val();				// 出生月
	var info_day=$('#day').val();					// 出生日
	var info_like=$('#like:checked').val();			// 爱好
	var info_name=$('#name').val();					// 姓名
	var info_city=$('#s_province').val();			// 省份
	var info_area=$('#s_city').val();				// 城市
	var info_way=$('#s_county').val();				// 地区
	// alert(info_nicheng+'--'+info_gender+'--'+info_year+'--'+info_month+'--'+info_day+'--'+info_like+'--'+info_name+'--'+info_city+'--'+info_area+'--'+info_way);

	// 判断数据是否为空
	if(info_nicheng=='' || info_gender=='' || info_year==' 请选择' || info_month==' 请选择' || info_day==' 请选择' || info_like=='' || info_name=='' || info_city=='省份' || info_area=='地级市' || info_way=='市、县级市'){
		alert('数据不完整,请检查后再提交');
		return false;
	}

	$.post("<?php echo U('Home/Center/user');?>",{info_nicheng:info_nicheng,info_gender:info_gender,info_user:info_user,info_year:info_year,info_month:info_month,info_day:info_day,info_like:info_like,info_name:info_name,info_city:info_city,info_area:info_area,info_way:info_way},function(data){
		if(data.code==1){
			// 修改成功
			alert(data.info);
		} else {
			// 修改失败
			alert(data.info);
		}
	});
	msg.preventDefault();
});

</script>