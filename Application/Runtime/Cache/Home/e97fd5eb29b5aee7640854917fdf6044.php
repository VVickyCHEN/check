<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册页</title>
		<link rel="stylesheet" href="/shiji/Public/Home/css/public.css" />
		<link rel="stylesheet" href="/shiji/Public/Home/css/reg.css" />
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
			<p>注册新用户</p>
			<div>
				<h1>欢迎您注册世纪香坊商城账号</h1>
				<form enctype="multipart/form-data" method="post" onsubmit="return false;">
					<ul>
						<li>
							<label for="username">*请输入用户名：</label>
							<input type="text" name="username" id="username" value="" />
							<p>*必填  &nbsp;&nbsp;由3到16位的字母，数字，下划线组成</p>
						</li>
						<li>
							<label for="password">*请输入密码：</label> 
							<input type="password" name="password" id="password" value="" />
							<p>*必填  &nbsp;&nbsp;由6到18位的字母，数字，下划线组成</p>
						</li>
						<li>
							<label for="dbpassword">*请输重复输入密码：</label>
							<input type="password" name="dbpassword" id="dbpassword" value="" />
							<p>*必填</p>
						</li>
						<li>
							<label for="email">*请输入常用邮箱：</label>
							<input type="email" name="email" id="email" value="" />
						    <p>*必填</p>
						</li>
						<li>
							<label for="phone">*请输入手机号：</label>
							<input type="text" name="phone" id="phone" value="" />
						    <p>*必填</p>
						</li>
						<li>
						</li>
					</ul>
					<!-- <input type="submit" class="register" id="reg" value="注册"/> -->
					<button type="button" class="register" id="reg">注册</button>
					<input type="checkbox" name="checkbox" id="checkbox" />
					<label for="checkbox" >我已阅读并同意网站的使用 条件及隐私声明</label>
					<p>
						<span>已有账号？</span>
						<a href="login.html"><span>立即登录</span></a>
					</p>
				</form>
			</div>
		</div>
		<!--尾部-->
		<div id="footer">
			<p>世纪沉香坊有限公司 WowSai.com Copyright© 2008-2013 [京ICP备10020900][京公网安备11010502026420][京ICP证090011号]</p>
		</div>
		<script type="text/javascript" src="/shiji/Public/Home/js/jquery.js"></script>
		<script type="text/javascript" src="/shiji/Public/Home/js/reg.js"></script>
	</body>
</html>

<script type="text/javascript">

$('.register').click(function(msg){
	// 获取提交过来的数据
	var user_username=$('#username').val();			// 账号
	var user_password=$('#password').val();			// 密码
	var user_dbpassword=$('#dbpassword').val();		// 确认密码
	var user_email=$('#email').val();					// 邮箱
	var user_phone=$('#phone').val();					// 手机

	// 将获取的内容提交到后台
	$.post("<?php echo U('Home/User/reg');?>",{user_username:user_username,user_password:user_password,user_dbpassword:user_dbpassword,user_email:user_email,user_phone:user_phone},function(data){
		if(data.code==1){
			// 用户注册成功
			alert(data.info);
          	location.href="<?php echo U('Home/User/login');?>";
		} else {
			// 用户注册失败
			alert(data.info);
		}
	});
	msg.preventDefault();
})

</script>