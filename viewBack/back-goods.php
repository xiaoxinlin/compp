<?php
	require_once("../domain/UserClass.php");
	session_start();
?>
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
				<?php 
							$user = 0;
							if(isset($_SESSION['user'])){
								$user = $_SESSION['user'];
							}
							
							if($user){
								//var_dump($user);
								$userName = $user->getNickname();
								echo "<span>管理员：</span><span>$userName</span>";
							}
				?>
				<a href="../controllers/UserController.php?type=logout">注销</a>
			</div>
		</div>
		

		<!-- 中间 -->
		<div class="back-left">
			<div class="back-left-img"><img src="../images/back/p2.jpg"><br><span><?php echo $userName;?></span></div>
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
					<ul>
						<li><img src="../images/bedroom/b1.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
						<li><img src="../images/bedroom/b2.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
						<li><img src="../images/bedroom/b3.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
						<li><img src="../images/bedroom/b4.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
						<li><img src="../images/bedroom/b5.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>

						<li><img src="../images/bedroom/b7.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
						<li><img src="../images/bedroom/b8.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
						<li><img src="../images/bedroom/b9.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
						<li><img src="../images/bedroom/b10.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
						<li><img src="../images/bedroom/b11.jpg"><br><button name="delete-goods" value="delete" class="btn btn-mini">删除</button></li>
					</ul>
				</div>

				<button type="button" name="add-goods" value="add" class="btn add-goods"><a href="back-goods-new.php">添加商品</a></button>
				<button type="button" name="update-goods" value="update" class="btn update-goods"><a href="back-goods-update.php">修改商品</a></button>

			</div>
		</div>
		
	</body>
</html>