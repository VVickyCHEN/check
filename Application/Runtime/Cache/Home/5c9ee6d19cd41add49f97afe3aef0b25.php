<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录页</title>
		<link rel="stylesheet" href="/shiji/Public/Home/css/login.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/public.css" />
	</head>
	<body>
		<!--头部-->
		<div id="header">
			<!--进行判断-->
		    <div class="logo">
		    	<a href="<?php echo U('Index/index');?>"><img src="/shiji/Public/Home/img/reg_01.png"/></a>
		    </div>
		</div>
		<!--中部-->
		<div id="middle">
			<p>用户登录</p>
			<div>
				<h1>欢迎您登录</h1>
				<p><a href="reg.html">注册</a></p>
				<form action="" method="post" onsubmit="return false;">
					<ul>
						<li>
							<label for="username">登录账号：</label>
							<input type="text" name="username" id="username" value="" />
						</li>
						<li>
							<label for="password">密码：</label>
							<input type="password" name="password" id="password" value="" />
							<a href="javascript:void(0)"><span>忘记密码？</span></a>
						</li>
						<li>
							<label for="info">验证码：</label>
							<input type="text" name="info" id="info" value="" />
							<a href="javascript:void(0)"><img src="/shiji/Home/User/verify" onclick="this.src='/shiji/Home/User/verify/'+Math.random()""></a>
							<a href="javascript:void(0)"></a>
						</li>
					</ul>
					<input type="checkbox" name="save" id="save"/>
					<label for="save">请保存我这次的登录信息</label>
					<button type="submit" id="login">登录</button>
				</form>
			</div>
		</div>
		<!--尾部-->
		<div id="footer">
			<p>世纪沉香坊有限公司 WowSai.com Copyright© 2008-2013 [京ICP备10020900][京公网安备11010502026420][京ICP证090011号]</p>
		</div>
		<script type="text/javascript" src="/shiji/Public/Home/js/jquery.js"></script>
		<script type="text/javascript" src="/shiji/Public/Home/js/login.js" ></script>
	</body>
</html>

<script type="text/javascript">
$('#login').click(function(msg){
	// 获取提交的内容
	var user_username=$('#username').val();		// 账号
	var user_password=$('#password').val();		// 密码
	var verify=$('#info').val();				// 验证码

	// 将获取的数据提交到后台
	$.post("<?php echo U('Home/User/login');?>",{user_username:user_username,user_password:user_password,captcha:verify},function(data){
		if(data.code==1){
			// 登录成功
			alert(data.info);
			location.href="<?php echo U('Index/index');?>";
		} else {
			// 登录失败
			alert(data.info);
		}
	});
	msg.preventDefault();
});
</script>