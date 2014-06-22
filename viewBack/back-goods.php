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

		<script>
			$().ready(function(e) {
			    $(".dropdown-toggle").click(function(e){
					e.preventDefault();
					$(this).siblings('.dropdown-menu').slideToggle(200);
				});
			});
		</script> 

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
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> <a href="back-orders.php" class="orders-a">管理订单</a> </a>
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
			<div class="back-goods-right">
				<div class="goods-title">
					<span>管理商品</span>
					<div class="dropdown">
						<a class="dropdown-toggle goods-title-nav" href="#">客厅专用</a> | 
					    <ul class="dropdown-menu">
						    <li><a href="#">花盆</a></li>
						    <li><a href="#">水果盘</a></li>
						    <li><a href="#">玩偶</a></li>
					    </ul>
					</div>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#">餐厅专用</a> | 
					    <ul class="dropdown-menu">
						    <li><a href="#">碟子</a></li>
						    <li><a href="#">刀具</a></li>
						    <li><a href="#">勺子</a></li>
					    </ul>
					</div>
					<div class="dropdown">
						<a class="dropdown-toggle " href="#">卧室专用</a> | 
					    <ul class="dropdown-menu">
						    <li><a href="#">墙贴</a></li>
						    <li><a href="#">台灯</a></li>
						    <li><a href="#">玩偶</a></li>
					    </ul>
					</div>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#">童房专用</a> | 
					    <ul class="dropdown-menu">
						    <li><a href="#">台灯</a></li>
						    <li><a href="#">抱枕</a></li>
						    <li><a href="#">灭蚊器</a></li>
					    </ul>
					</div>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#">书房专用</a> | 
					    <ul class="dropdown-menu">
						    <li><a href="#">笔筒</a></li>
						    <li><a href="#">书架</a></li>
						    <li><a href="#">小植物</a></li>
					    </ul>
					</div>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#">户外专用</a>
					    <ul class="dropdown-menu">
						    <li><a href="#">雕像</a></li>
						    <li><a href="#">盆栽</a></li>
						    <li><a href="#">玩偶</a></li>
					    </ul>
					</div>
				</div>
				<div class="goods-text">
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<table class="table">
									<thead>
										<tr>
											<th>商品编号</th>
											<th>商品名称</th>
											<th>商品单价</th>
											<th>商品缩略图</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>112011059</td>
											<td>江彩霞</td>
											<td>呼呼</td>
											<td><img src="../images/drawing/dr1.jpg"></td>
											<td><botton type="button" name="delete-good" value="delete" class="btn">删除</button></td>
										</tr>
										<tr>
											<td>112011059</td>
											<td>何业文</td>
											<td>荷叶</td>
											<td>822055377@qq.com</td>
											<td><botton type="button" name="delete-good" value="delete" class="btn">删除</button></td>
										</tr>
										<tr>
											<td>112011059</td>
											<td>林晓鑫</td>
											<td>蜡笔小新</td>
											<td>822055377@qq.com</td>
											<td><botton type="button" name="delete-good" value="delete" class="btn">删除</button></td>
										</tr>
										<tr>
											<td>112011059</td>
											<td>廖坤城</td>
											<td>体委</td>
											<td>822055377@qq.com</td>
											<td><botton type="button" name="delete-good" value="delete" class="btn">删除</button></td>
										</tr>
										<tr>
											<td>112011059</td>
											<td>刘志锋</td>
											<td>小锋锋</td>
											<td>822055377@qq.com</td>
											<td><botton type="button" name="delete-good" value="delete" class="btn">删除</button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<button type="button" name="add-goods" value="add" class="btn add-goods"><a href="back-goods-new.php">添加商品</a></button>
				<button type="button" name="update-goods" value="update" class="btn update-goods"><a href="back-goods-update.php">修改商品</a></button>

			</div>
		</div>
		
	</body>
</html>