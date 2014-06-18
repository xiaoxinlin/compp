<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/bootstrap.min.css" />
		<link rel="stylesheet" href="../style/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="../style/back-login.css" type="text/css"></link>

		<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

		<title>创意家居小精品购物网站后台登录</title>

		<script>
			<?php 
				$error = $_GET['back_login_message'];
				if(isset($error)){
					if($error == 'error1'){
						echo "alert('用户名或密码错误！！');";
					}else if($error == 'error2'){
						echo "alert('请使用管理员帐号登录！！');";
					}
				}
			?>
			
		</script>
	</head>

	<body>
		<div class="back-login">
			<div class="back-login-title">
				<a href="../index.php"><img src="../images/logo3.png" width='60px' height='60px'></a><span>创意家居小精品购物网站后台登录</span>
			</div>
			<div class="back-login-text">

				<form action="../controllers/Back-loginController.php" method="post">
					<ul>
						<li>账号：<input type="text" name="id" value=""></li>
						<li>密码：<input type="password" name="password" value=""></li>
						<li><input type="submit" name="admin-login" value="登录" class="btn"></li>
					</ul>
				</form>
			</div>
		</div>
	</body>
</html>