<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/bootstrap.min.css" />
		<link rel="stylesheet" href="../style/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="../style/back.css" type="text/css"></link>

		<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

		<title>创意家居小精品购物网站后台管理</title>

	</head>

	<body>
		<!-- 头部 -->
		<div class="back-header">
			<div class="back-logo"><a href="../index.php"><img src="../images/logo3.png" width='50px' height='50px'></a></div>
			<div class="back-header-title"><span>创意家居小精品购物网站后台管理</span></div>
			<div class="back-header-right">
				<span>管理员：</span><span>江彩霞</span>
				<a href="">注销</a>
			</div>
		</div>
		

		<!-- 中间 -->
		<div class="back-left">
			<div class="back-left-img"><img src="../images/back/p2.jpg"><br><span>小呼呼</span></div>
			<div class="back-left-nav">
				<ul>
					<li>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> 管理用户 </a>
							</div>
							<div id="collapseOne" class="accordion-body in collapse" style="height: auto;">
								<div class="accordion-inner">
									<a href="back-customer.php">客户管理</a>
								</div>
								<div class="accordion-inner">
									<a href="back-admin.php">管理员管理</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"><a href="back-orders.php" class="orders-a">管理订单</a></a>
							</div>
						</div>
					</li>
					<li>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> <a href="back-goods.php" class="goods-a">管理商品</a></a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="back-right">
			<div class="back-admin-new-right">
				<div class="admin-new-title"><span>添加管理员</span></div>
				<div class="admin-new-text">
					<form action="" method="post">
						<ul>
							<li>用户名：<input type="text" id="username" name="username" value="" required /></li>
							<li>昵&nbsp;&nbsp;&nbsp;称：<input type="text" id="nickname" name="nickname" value="" required /></li>
							<li>密&nbsp;&nbsp;&nbsp;码：<input type="password" id="password" name="password" value="" required /></li>
							<li>邮&nbsp;&nbsp;&nbsp;件：<input type="email" id="email" name="email" value="" required /></li>
							<li><input type="hidden" id="authority" name="authority" value="admin"></li>
							<li>
								<input type="submit" name="submit" id="submit" class="btn" value="保存" />
								<input type="reset" name="reset" id="reset" class="btn" value="重填" />
								<a href="back-admin.php"  class="btn" name="cancel" id="cancel">取消</a>
							</li>
						</ul>				
					</form>
				</div>
			</div>
		</div>
			
	</body>
</html>