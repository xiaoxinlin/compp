<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/register.css" type="text/css"></link>
		<link rel="stylesheet" href="../style/bootstrap.min.css" />
		<link rel="stylesheet" href="../style/bootstrap-responsive.min.css" />

		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<title>创意家居小精品购物网站注册</title>


	</head>

	<body>
		<div class="container-fluid regbody-bg">
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span9">
					<div class="reg-header">
						<div class="reg-logo"><a href="../index.php"><img src="../images/logo3.png" ></a></div>
						<div class="reg-title">
							<a href="../index.php"><span class="reg-title"><strong>创意家居小</strong></span></a>
							<a href="../index.php"><span class="reg-title"><strong>精品购物网站</strong></span></a>
						</div>
						<div class="reg-yinyan"><span>精品之佳 ，永远安家</span></div>
						<div class="reg-login">
							<span class="reg-login-span1">已有账号？</span><span class="reg-login-span2"><a href="login.php">直接登录</a></span>
						</div>
					</div>

					<div class="reg-mid">
						<div class="reg-mid-left">
							<div class="reg-mid-text"><span>注册后，您可以购买我们的小精品，还可以享受我们真诚的服务噢！</span></div>
							<form action="../controllers/UserController.php" method="post">
								<ul>
									<li><span class="xing">*</span> 用&nbsp;&nbsp;户&nbsp;&nbsp;名：<input type="text" id="username" name="name" value="" required /></li>
									<li><span class="xing">*</span> 昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：<input type="text" id="nickname" name="nickname" value="" required /></li>
									<li><span class="xing">*</span> 密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" id="password" name="password" value="" required /></li>
									<li><span class="xing">*</span> 确认密码：<input type="password" id="password" name="password2" value="" required /></li>
									<li><span class="xing">*</span> 邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：<input type="email" id="email" name="email" value="" required /></li>
									<li><input type="hidden" id="authority" name="authority" value="customer"></li>
									<li><input type="hidden" id="type" name="type" value="addUser"></li>
									<li><input type="submit" name="submit" id="submit" class="reg-mid-btn" value="同意协议并注册" /></li>
								</ul>
								<span class="reg-mid-xieyi">&lt;&lt;小精品购物服务使用协&gt;&gt;</span>						
							</form>
						</div>

						<div class="reg-mid-right">

						</div>
					</div>

					<div class="reg-tail">
						<span>◎2014-2084localhost/compp2/view/register.php小精品购物网站 版权所有</span>
					</div>
				</div>
				<div class="span2"></div>

			</div>
		</div>
	</body>
</html>