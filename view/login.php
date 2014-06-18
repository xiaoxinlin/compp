<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/login.css" type="text/css"></link>
		<title>创意家居小精品购物网站登录</title>
		
		<script>
			<?php 
				
				
				if(isset($_GET['login_message'])){
					$error = $_GET['login_message'];
					if($error == 'error1'){
						echo "alert('用户名或密码错误！！');";
					}else if($error == 'error2'){
						echo "alert('请使用用户帐号登录！！');";
					}
				}else if( isset($_GET['id']) ){
					$id = $_GET['id'];
					$message = "你注册的ID号是$id";
					echo "alert('$message');";
				}
			?>
			
		</script>
	</head>

	<body>
		<div class="center">	
			<section>
				<img src="../images/login/2.gif"  />
			</section>
			<aside>
				<form action="../controllers/LoginController.php" method="post">
					<div class="ribbon"><span>登录</span> <span class="zhuce"> <a href="register.php">注册</a></span></div>
					<div class="wrapper">
					    <div class="book"></div>
					    <div class="loginwrapper"> <span class="usertext">账  号:</span><br />
					        <input class="textbox" size="25" type="text" name="id">
					        <br />
					        <span class="usertext">密   码:</span><br />
					        <input class="textbox" type="password" name="password" />
					        <img alt="Lock Image" src="../images/login/lock.png"><br />
					        <input type="hidden" name="authority" value="customer">
					    </div>
					    <div class="bottomwrapper">
					        <input class="button" id="login_btn" type="submit" name="submit" value="">
					    </div>
					</div>
				</form>
			</aside>
		</div>
		<div class="login-header">
			<span><strong>欢迎登录创意家居小精品购物网站</strong></span>
			<a href="../index.php">首页&gt;&gt;</a>
		</div>

	</body>
</html>