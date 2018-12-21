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
			<img src=".<?php echo ($goods["product_thumb"]); ?>"/>
			<div>
				<!--头部-->
				<div>
					<h2 class="product_name">世纪沉香坊 <?php echo ($goods["product_name"]); ?></h2>
                              <input type="hidden" id="proid" value="<?php echo ($goods["product_id"]); ?>">
                              <input type="hidden" id="product_thumb" value="<?php echo ($goods["product_thumb"]); ?>">
					<p>
					   <span class="price">价格 ¥ <?php echo ($goods["product_min"]); ?></span>
                                 <input type="hidden" id="prices" value="">
					   <span>浏览量：<?php echo ($goods["product_browse"]); ?></span>
					   <span>累计评价：<?php echo ($goods["product_comments"]); ?></span>
					</p>
				</div>
				<!--内容-->
				<dl>
					<dt>配&nbsp;送</dt>
					<dd>至北京朝阳区三环以内 有货，仅剩1件店铺单笔订单不满300元，收运费20元 由世纪沉香坊官方旗舰店负责发货，并提供售后服务。</dd>
				</dl>
				<dl id="style">
					<dt>选择款式</dt>
                              <?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i; if(($foo["product_id"]) == $goods["product_id"]): ?><dd>
                              <a onclick="products(<?php echo ($foo["product_style_id"]); ?>)">
                              <?php echo ($foo["style_name"]); ?>
                              <input type="hidden" class="prostyid" name="prostyid" value="<?php echo ($foo["product_style_id"]); ?>">
                              </a>
                              </dd><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</dl>
				<!--数量-->
				<div>
					<form action="" method="post">
						<input type="text" id="number" value="1"/>
					</form>
					<p>+</p>
					<p>-</p>
				</div>
				<p class="nums">库存件</p>
                        <input type="hidden" id="pronum" value="<?php echo ($product_num); ?>">
				<!--提交按钮-->
				<div>
					<p onclick="pays(<?php echo ($goods["product_id"]); ?>)">立即购买</p>
					<p onclick="cart(<?php echo ($goods["product_id"]); ?>)">加入购物车</p>
				</div>
			</div>	
		    <!--小图-->
		    <div>
		    	<img src="/shiji/Public/Home/img/pd_icon3.png">
		    	<div>
		    		<ul>
                        <?php if(is_array($goods['product_img'])): $i = 0; $__LIST__ = $goods['product_img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li><img src=".<?php echo ($foo); ?>"/></li><?php endforeach; endif; else: echo "" ;endif; ?>
			    	</ul>
		    	</div>
		    	<img src="/shiji/Public/Home/img/pd_icon4.png"/>
		    </div>
		    <!--产品分类-->
            <ul>
            	<li><a href="javascript:void(0)">产品分类</a></li>
            	<li><a href="javascript:void(0)">所有商品</a></li>
            	<li><a href="javascript:void(0)">最新上架</a></li>
            	<li><a href="javascript:void(0)">沉香珠串</a></li>
            	<li><a href="javascript:void(0)">16MM*14颗</a></li>
            	<li><a href="javascript:void(0)">6MM*108颗</a></li>
            	<li><a href="javascript:void(0)">8MM*108颗</a></li>
            	<li><a href="javascript:void(0)">其他规格</a></li>
            	<li><a href="javascript:void(0)">沉香雕件</a></li>
            	<li><a href="javascript:void(0)">精品雕件</a></li>
            	<li><a href="javascript:void(0)">珍品雕件</a></li>
            	<li><a href="javascript:void(0)">收藏典范</a></li>
            	<li><a href="javascript:void(0)">香道熏材</a></li>
            	<li><a href="javascript:void(0)">碎料香粉</a></li>
            	<li><a href="javascript:void(0)">烟片</a></li>
            	<li><a href="javascript:void(0)">香炉</a></li>
            	<li><a href="javascript:void(0)">线香盘香</a></li>
            	<li><a href="javascript:void(0)">套装礼盒</a></li>
            	<li><a href="javascript:void(0)">随形专区</a></li>
            	<li><a href="javascript:void(0)">随形 - 沉水浮</a></li>
            	<li><a href="javascript:void(0)">随形 - 沉水</a></li>
            	<li><a href="javascript:void(0)">奇楠专区</a></li>
            	<li><a href="javascript:void(0)">原材专区</a></li>
            	<li><a href="javascript:void(0)">摆件专区</a></li>
            	<li><a href="javascript:void(0)">一周新品</a></li>
            </ul>
            <!--商品详情和商品展示-->
            <div>
            	<div>
            		<ul>
            			<li class="active"><a href="javascript:void(0)">商品详情</a></li>
            			<li><a href="javascript:void(0)">累计评价</a></li>
            		</ul>
            		<ol>
                        <?php echo ($goods["product_detail"]); ?>
            		</ol>
            	</div>
            	<p><span>商品展示</span></p>
            	<ul class="pro_list">
                  <?php if(is_array($goods['product_content'])): $i = 0; $__LIST__ = $goods['product_content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li><img style="width: 832px;height: 636px;" src=".<?php echo ($foo); ?>"/></li><?php endforeach; endif; else: echo "" ;endif; ?>
            	</ul>
            </div>
            <!--商品详情和商品展示-->
            <div>
            	<div>
            		<ul>
            			<li><a href="javascript:void(0)">商品详情</a></li>
            			<li class="active"><a href="javascript:void(0)">累计评价</a></li>
            		</ul>
            		<ol>
            			<li class="active"><a href="javascript:void(0)">全部</a></li>
            			<!-- <li><a href="javascript:void(0)">图片（68）</a></li>
            			<li><a href="javascript:void(0)">追评（68）</a></li> -->
            		</ol>
            		<ul>
                        <?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li>
            				<p>
            					<span><?php echo (mb_substr($foo["comment_name"],0,1)); ?>******<?php echo (mb_substr($foo["comment_name"],-1,1)); ?>(匿名):</span>
            					<!-- <img src="/shiji/Public/Home/img/com_01.png" /> -->
            				</p>
            				<ul>
            					<li></li>
            					<li><?php echo ($foo["comment_connent"]); ?></li>
            					<li><?php echo (date("Y",$foo['order_time'])); ?>年<?php echo (date("m",$foo['order_time'])); ?>月<?php echo (date("d",$foo['order_time'])); ?>日 <?php echo (date("H",$foo['order_time'])); ?>:<?php echo (date("i",$foo['order_time'])); ?></li>
            				</ul>
            			</li><?php endforeach; endif; else: echo "" ;endif; ?>
            		</ul>
            	</div>
            </div>
	    	<!--猜你喜欢-->
    		<div class="love">
    			<h3>猜你喜欢</h3>
    			<ul>
                  <?php if(is_array($like)): $i = 0; $__LIST__ = $like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($foo["product_id"]); ?>"><img style="width:190px;height:190px" src=".<?php echo ($foo["product_thumb"]); ?>"/><span>越南香熏</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    			</ul>
    		</div>
		    <!--放大镜-->
		    <div></div>
		    <div><img src="/shiji/Public/Home/img/pd_01.png" /></div>
		</div>
		<script type="text/javascript" src="/shiji/Public/Home/js/tween.js" ></script>
<script type="text/javascript">
      function products(id){
            $.ajax({
                  url:"<?php echo U('Home/product/style');?>",
                  data:{psid:id},
                  type:"post",
                  dataType:'json',
                  success:function(data){
                      $('.price').text('价格 ¥ '+data.price);
                      $('#prices').val(data.price);
                      $('.nums').text('库存'+data.num+'件');
                      $('#pronum').val(data.num);
                  },
                  error:function(data){},
            });
      }
</script>
<script type="text/javascript">
      function pays(id){
            // 商品id
            var order_product=id;
            // 款式id
            var order_style=$('#style dd[class=active] .prostyid').val();
            // 购买数量
            var order_num=$('#number').val();
            // 库存
            var pronum=$('#pronum').val();
            // 价格
            var order_price=$('#prices').val();
            // 总价
            var order_total=order_price*order_num;

            if(order_style==''){
                  alert('请选择款式');
                  return false;
            }
            if(order_num>pronum){
                  alert('超过库存,请重新选择!');
                  return false;
            }
            $.ajax({
                  url:"<?php echo U('Home/Product/buys');?>",
                  data:{order_product:order_product,order_style:order_style,order_total:order_total,order_num:order_num},
                  type:"post",
                  dataType:'json',
                  success:function(data){
                        if(data.code==1){
                              alert(data.info);
                              location.href="<?php echo U('User/login');?>";
                        } else if(data.code==2){
                              location.href="<?php echo U('Cart/comfirm_order');?>";
                        } else {
                              alert(data.info);
                              return false;
                        }
                  },
                  error:function(data){},
            });
      }
</script>
<script type="text/javascript">
      function cart(id){
            // 商品id
            var cart_product=id;
            // 款式id
            var cart_style=$('#style dd[class=active] .prostyid').val();
            // 购买数量
            var cart_num=$('#number').val();
            // 单价
            var price=$('#prices').val();
            // 总价
            var cart_price=cart_num*price;
            // 库存
            var pronum=$('#pronum').val();

            if(cart_style==''){
                  alert('请选择款式和分期');
                  return false;
            }
            if(cart_num>pronum){
                  alert('超过库存,请重新选择!');
                  return false;
            }
            $.ajax({
                  url:"<?php echo U('Home/Product/cart');?>",
                  data:{cart_product:cart_product,cart_style:cart_style,cart_num:cart_num,cart_price:cart_price},
                  type:"post",
                  dataType:'json',
                  success:function(data){
                        if(data.code==1){
                              alert(data.info);
                              location.href="<?php echo U('User/login');?>";
                        } else if(data.code==2){
                              alert(data.info);
                        } else {
                              alert(data.info);
                              return false;
                        }
                  },
                  error:function(data){},
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