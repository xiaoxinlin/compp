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
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"><a href="back-orders.php" class="orders-a">管理订单</a> </a>
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
			<div class="back-orders-right">	
				<div class="orders-right-title"><span>管理订单</span></div>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span12">
							<table class="table">
								<thead>
									<tr>
										<th>订单号</th>
										<th>订购客户</th>
										<th>订购精品</th>
										<th>订购总额</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>112011059</td>
										<td>江彩霞</td>
										<td>花盆1、花盆2、花盆3、花盆4</td>
										<td>花盆1</td>
										<td><botton type="button" name="delete-orders" value="delete" class="btn">删除</button></td>
									</tr>
									<tr>
										<td>112011059</td>
										<td>江彩霞</td>
										<td>花盆1、花盆2、花盆3、花盆4</td>
										<td>花盆1</td>
										<td><botton type="button" name="delete-orders" value="delete" class="btn">删除</button></td>
									</tr>
									<tr>
										<td>112011059</td>
										<td>江彩霞</td>
										<td>花盆1、花盆2、花盆3、花盆4</td>
										<td>花盆1</td>
										<td><botton type="button" name="delete-orders" value="delete" class="btn">删除</button></td>
									</tr>
									<tr>
										<td>112011059</td>
										<td>江彩霞</td>
										<td>花盆1、花盆2、花盆3、花盆4</td>
										<td>花盆1</td>
										<td><botton type="button" name="delete-orders" value="delete" class="btn">删除</button></td>
									</tr>
									<tr>
										<td>112011059</td>
										<td>江彩霞</td>
										<td>花盆1、花盆2、花盆3、花盆4</td>
										<td>花盆1</td>
										<td><botton type="button" name="delete-orders" value="delete" class="btn">删除</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

	</body>
</html>