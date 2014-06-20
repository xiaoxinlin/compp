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
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href=""> <a href="back-orders.php" class="orders-a">管理订单</a></a>
							</div>
						</div>
					</li>
					<li>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href=""> <a href="back-goods.php" class="goods-a">管理商品</a></a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="back-right">
			<div class="back-admin-right">
				<!-- 面包导航 -->
				<div class="dr-mid-rightnav">
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<ul class="breadcrumb">
									<li>
										<a href="../index.php">管理用户</a> <span class="divider">/</span>
									</li>
									<li class="active">管理员管理</li>								
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span12">
							<table class="table">
								<thead>
									<tr>
										<th>账号</th>
										<th>客户名</th>
										<th>客户昵称</th>
										<th>客户邮箱</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>112011059</td>
										<td>江彩霞2</td>
										<td>呼呼</td>
										<td>822055377@qq.com</td>
										<td><botton type="button" name="delete-admin" value="delete" class="btn">删除</button></td>
									</tr>
									<tr>
										<td>112011059</td>
										<td>何业文</td>
										<td>荷叶</td>
										<td>822055377@qq.com</td>
										<td><botton type="button" name="delete-admin" value="delete" class="btn">删除</button></td>
									</tr>
									<tr>
										<td>112011059</td>
										<td>林晓鑫</td>
										<td>蜡笔小新</td>
										<td>822055377@qq.com</td>
										<td><botton type="button" name="delete-admin" value="delete" class="btn">删除</button></td>
									</tr>
									<tr>
										<td>112011059</td>
										<td>廖坤城</td>
										<td>体委</td>
										<td>822055377@qq.com</td>
										<td><botton type="button" name="delete-admin" value="delete" class="btn">删除</button></td>
									</tr>
									<tr>
										<td>112011059</td>
										<td>刘志锋</td>
										<td>小锋锋</td>
										<td>822055377@qq.com</td>
										<td><botton type="button" name="delete-admin" value="delete" class="btn">删除</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<button type="button" name="add-admin" value="add" class="btn"><a href="back-admin-new.php">添加管理员</a></button>
			</div>	
		</div>	

	</body>
</html>